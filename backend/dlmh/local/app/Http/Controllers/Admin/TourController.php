<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Schedule;
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

        $filename = $req->poster->getClientOriginalName();
        $tour = new Tour;
        $tour->tour_name = $req->name;
        $tour->tour_slug = str_slug($req->name);
        $tour->tour_cate = $req->cate;
        $tour->tour_number = $req->number;
        $tour->tour_departure_date = $req->departure_date;
        $tour->tour_return_date = $req->return_date;
        $tour->tour_introduction = $req->introduction;
        $tour->tour_price = $req->price;
        $tour->tour_poster = $filename;
        $tour->tour_user_post = Auth::user()->id;
        $tour->save();
        $req->poster->storeAs('images/tour/poster',$filename);

        $index = array();
        $temp = 0;
        foreach ($data as $key => $value) {
            if( strpos( $key ,'day' ) !== false) {
                $index[$temp] = substr($key,3);
                $temp++;
            }
        }

        $tour = Tour::where('tour_name',$req->name)->first();

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
