<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Schedule;
use App\Models\PictureTour;
use App\Models\Ticket;
use DB;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['catelist'] = Category::all();
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
        
        $data['comment_list'] = Comment::where('cmt_tour',$id)->orderBy('cmt_id')->get();
        $data['schedule_list'] = Schedule::where('schedule_tour',$id)->orderBy('schedule_day')->get();
        $data['pictour_list'] = PictureTour::where('pic_tour',$id)->orderBy('pic_id')->get();
        
        $data['tours_new'] = DB::table('tour')
            ->where('tour_new','1')
            ->where('tour_id','<>',$data['tour']->tour_id)
            ->where('tour_cate',$data['tour']->tour_cate)
            ->join('category','tour.tour_cate','category.cate_id')
            ->leftJoin('comment','tour.tour_id','comment.cmt_tour')
            ->select(DB::raw('tour_id, tour_name, tour_slug, tour_price, tour_poster, cate_name, count(cmt_id) as cmt_count, avg(cmt_score) as cmt_avg_score'))
            ->groupBy('tour_id','tour_name')
            ->orderBy('tour_id','desc')
            ->get();

        $reviews = Comment::where('cmt_tour',$id)
                        ->groupBy('cmt_score')
                        ->selectRaw('cmt_score , count(cmt_id) as cmt_count')
                        ->orderBy('cmt_score')
                        ->get();
        $data['reviews'] = [
            0 =>['percent' => 0, 'number' => 0],
            1 =>['percent' => 0, 'number' => 0],
            2 =>['percent' => 0, 'number' => 0],
            3 =>['percent' => 0, 'number' => 0],
            4 =>['percent' => 0, 'number' => 0],
        ];

        foreach ($reviews as $value) {
            switch ($value->cmt_score) {
                case 5:
                    $data['reviews']['4']['percent'] = ($value->cmt_count/count($data['comment_list']))*100;
                    $data['reviews']['4']['number'] = $value->cmt_count;
                    break;
                case 4:
                    $data['reviews']['3']['percent'] = ($value->cmt_count/count($data['comment_list']))*100;
                    $data['reviews']['3']['number'] = $value->cmt_count;
                    break;
                case 3:
                    $data['reviews']['2']['percent'] = ($value->cmt_count/count($data['comment_list']))*100;
                    $data['reviews']['2']['number'] = $value->cmt_count;
                    break;
                case 2:
                    $data['reviews']['1']['percent'] = ($value->cmt_count/count($data['comment_list']))*100;
                    $data['reviews']['1']['number'] = $value->cmt_count;
                    break;
                case 1:
                    $data['reviews']['0']['percent'] = ($value->cmt_count/count($data['comment_list']))*100;
                    $data['reviews']['0']['number'] = $value->cmt_count;
                    break;
            }
        }
        
        //dd($data['reviews']);
        
        $data['average'] = DB::table('comment')
                            ->where('cmt_tour',$id)
                            ->selectRaw('avg(cmt_score) as average')
                            ->groupBy('cmt_tour')
                            ->get();

        return view('frontend.tour_detail',$data);
    }

    public function postComment(Request $req, $id)
    {
        $comment = new Comment;
        $comment->cmt_name = $req->comment_name;
        $comment->cmt_email = $req->comment_emali;
        $comment->cmt_content = $req->comment_content;
        $comment->cmt_score = $req->comment_score;
        $comment->cmt_tour = $id;
        $comment->save();
        return back();
    }

    public function postCheckOut(Request $req, $id)
    {
        $data['info'] = $req->all();
        $email = $req->email;
        //dd($data['info']);
        $ticket = new Ticket;
        $ticket->ticket_cus_name = $req->name;
        $ticket->ticket_cus_email  = $req->email;
        $ticket->ticket_cus_phone = $req->phone;
        $ticket->ticket_number_of_adults = $req->adult_number;
        $ticket->ticket_number_of_children = $req->children_number;
        $ticket->ticket_status = 0;
        $ticket->ticket_tour = $id;
        $ticket->save();

        // Mail::send('frontend.email', $data, function ($message) use($email) {
        //     $message->from('thanglong2098@gmail.com', 'Team 14');

        //     $message->to($email, $email);

        //     $message->cc('ducltauit@gmail.com', 'Anh Đức');

        //     $message->subject('Xác nhận đặt vé của công ty Team 14');
        // });

        return redirect('complete');
    }

    public function getComplete()
    {
        return view('frontend.complete');
    }

    public function getSearch(Request $req)
    {
        $data['catelist'] = Category::all();

        $query = DB::table('tour')
            ->join('category','tour.tour_cate','category.cate_id')
            ->leftJoin('comment','tour.tour_id','comment.cmt_tour')
            ->select(DB::raw('tour_id, tour_name, tour_slug, tour_price, tour_poster, cate_name, count(cmt_id) as cmt_count, avg(cmt_score) as cmt_avg_score'))
            ->groupBy('tour_id','tour_name')
            ->orderBy('tour_id','desc');

        if($req->cate != -1){
            $query->where('tour_cate',$req->cate);
        }

        if($req->time != -1){
            if($req->time == '>7'){
                $query->where('tour_number_day','>',7);
            }
            else{
                $arr = explode("-", $req->time);
                $query->whereBetween('tour_number_day',$arr);
            }
        }

        $data['time'] = $req->time;
        $data['cate'] = $req->cate;
        
        $data['tours_search'] = $query->get();

        $data['tours_new'] = DB::table('tour')
            ->where('tour_new','1')
            ->join('category','tour.tour_cate','category.cate_id')
            ->leftJoin('comment','tour.tour_id','comment.cmt_tour')
            ->select(DB::raw('tour_id, tour_name, tour_slug, tour_price, tour_poster, cate_name, count(cmt_id) as cmt_count, avg(cmt_score) as cmt_avg_score'))
            ->groupBy('tour_id','tour_name')
            ->orderBy('tour_id','desc')
            ->take(8)
            ->get();
        
        //dd($data['tours_new']);
        
        return view('frontend.search',$data);
    }
}
