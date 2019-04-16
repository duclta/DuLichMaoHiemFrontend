<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Schedule;
use App\Models\PictureTour;
use DB;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['cates_featured'] = DB::table('category')
            ->where('cate_featured', '=', 1)
            ->leftJoin('tour','cate_id','tour.tour_cate')
            ->select(DB::raw('cate_id, cate_name, cate_slug, cate_poster, count(tour_id) as cate_count'))
            ->groupBy('cate_id','cate_name')
            ->get();
            
        $data['tours_new'] = DB::table('tour')
            ->where('tour_new','1')
            ->join('category','tour.tour_cate','category.cate_id')
            ->leftJoin('comment','tour.tour_id','comment.cmt_tour')
            ->select(DB::raw('tour_id, tour_name, tour_slug, tour_price, tour_poster, cate_name, count(cmt_id) as cmt_count, avg(cmt_score) as cmt_avg_score'))
            ->groupBy('tour_id','tour_name')
            ->orderBy('tour_id','desc')
            ->get();

        $data['tours_featured'] = DB::table('tour')
            ->where('tour_featured','1')
            ->where('tour_departure_date', '>=', date("Y-m-d"))
            ->join('category','tour.tour_cate','category.cate_id')
            ->leftJoin('comment','tour.tour_id','comment.cmt_tour')
            ->select(DB::raw('tour_id, tour_name, tour_slug, tour_price, tour_poster, cate_name, count(cmt_id) as cmt_count, avg(cmt_score) as cmt_avg_score'))
            ->groupBy('tour_id','tour_name')
            ->orderBy('tour_id','desc')
            ->get();
        //dd($data['tours_new']);
        return view('frontend.home',$data);
    }

    public function getDetail($id)
    {
        $data['tour'] = Tour::find($id);
        $data['cate'] = Category::where('cate_id',$data['tour']->tour_cate)->first();
        $data['comment_list'] = Comment::where('cmt_tour',$id)->get();
        $data['schedule_list'] = Schedule::where('schedule_tour',$id)->orderBy('schedule_day')->get();
        $data['pictour_list'] = PictureTour::where('pic_tour',$id)->orderBy('pic_id')->get();
        if(count($data['comment_list']) != 0){
            $data['average'] = array_sum($data['comment_list']) / count($data['comment_list']);
        }
        else{
            $data['average'] = 0;
        }

        $datetime1 = strtotime($data['tour']->tour_departure_date);
        $datetime2 = strtotime($data['tour']->tour_return_date);
        $secs = $datetime2 - $datetime1;// == return sec in difference
        $data['days'] = $secs / 86400;

        return view('frontend.tour_detail',$data);
    }
}
