<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Schedule;
use App\Models\PictureTour;
use App\Http\Requests\AddTourRequest;
use DB;
use Auth;
class TourController extends Controller
{
    public function getTour()
    {
        $data['tourlist'] = DB::table('tour')->join('category',
            'tour.tour_cate','category.cate_id')->orderBy('tour_id','desc')->get();
        return view('admin.list_tour',$data);
    }

    public function getAddTour()
    {
        $data['catelist'] = Category::all();
        return view('admin.add_tour',$data);
    }

    public function postAddTour(AddTourRequest $req)
    {
        $data = $req->request;

        // if(count($_FILES['pictour'])) {
        //     // foreach ($_FILES['uploads']['filesToUpload'] as $file) {
                
        //     //     //do your upload stuff here
        //     //     echo $file;
                
        //     // }
        //     dd($_FILES);
        // }


        $poster = $req->pictour[0];

        $filePosterName = $poster->getClientOriginalName();

        $tour = new Tour;
        $tour->tour_name = $req->name;
        $tour->tour_slug = str_slug($req->name);
        $tour->tour_cate = $req->cate;
        $tour->tour_quantity = $req->quantity;
        $tour->tour_number_day = $req->number_day;
        $tour->tour_number_night = $req->number_night;
        $tour->tour_introduction = $req->introduction;
        $tour->tour_price = $req->price;
        $tour->tour_poster = $filePosterName;
        $tour->tour_user_post = Auth::user()->id;
        $tour->tour_new = true;
        $tour->save();
        $poster->storeAs('images/tour/poster',$filePosterName);

        $index = array();
        $temp = 0;
        foreach ($data as $key => $value) {
            if( strpos( $key ,'day' ) !== false) {
                $index[$temp] = substr($key,3);
                $temp++;
            }
        }

        $tour = Tour::where('tour_name',$req->name)->first();

        for ($i= 1; $i < count($req->pictour); $i++) { 
            $picName = $req->pictour[$i]->getClientOriginalName();
            $picTour = new PictureTour;
            $picTour->pic_tour = $tour->tour_id;
            $picTour->pic_name = $picName;
            $picTour->save();
            $req->pictour[$i]->storeAs('images/tour',$picName);
        }

        foreach ($index as $value) {
            $imageName = $req['img'.$value]->getClientOriginalName();
            $schedule = new Schedule;
            $schedule->schedule_title = $req['title'.$value];
            $schedule->schedule_content = $req['content'.$value];
            $schedule->schedule_tour = $tour->tour_id;
            $schedule->schedule_image = $imageName;
            $schedule->schedule_day = $req['day'.$value];
            $schedule->save();

            $req['img'.$value]->storeAs('images/tour/schedule',$imageName);
        }

        return back()->with(['flag'=>'success','message'=>'Thêm tour mới thành công']);
    }

    public function getEditTour($id)
    {
        $data['tour'] = Tour::find($id);
        $data['catelist'] = Category::all();
        $data['schedulelist'] = Schedule::where('schedule_tour',$id)->get();
        //  dd($data['schedulelist']);
        return view('admin.edit_tour', $data);
    }

    public function postEditTour(AddCateRequest $req, $id)
    {
        $category = Category::find($id);
        $category->cate_name = $req->name;
        $category->cate_slug = str_slug($req->name);
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteTour($id)
    {
        Tour::destroy($id);
        return back();
    }
}