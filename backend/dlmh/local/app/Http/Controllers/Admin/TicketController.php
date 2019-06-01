<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Ticket;
use DB;

class TicketController extends Controller
{
    public function getTicket()
    {
        $data['ticketlist'] = DB::table('ticket')->join('tour',
            'ticket.ticket_tour','tour.tour_id')->orderBy('ticket_id','desc')->get();
        return view('admin.list_ticket',$data);
    }

    public function getEditTicket($id)
    {
        $data['ticket'] = Ticket::find($id);
        return view('admin.edit_ticket',$data);
    }

    public function postEditTicket($id)
    {
        # code...
    }

    public function getDeleteDelete($id)
    {
        Ticket::destroy($id);
        return back();
    }
}
