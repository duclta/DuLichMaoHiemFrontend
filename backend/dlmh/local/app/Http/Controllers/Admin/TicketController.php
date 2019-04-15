<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function getTicket()
    {
        $data['catelist'] = Category::all();
        return view('admin.list_ticket',$data);
    }
}
