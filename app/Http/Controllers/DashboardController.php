<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users=User::all();
        $books=Book::all();
        $reservations=Reservation::all();
        return view('admin.adminDash',  compact('users' , 'books', 'reservations'));
    }


    

    
}
