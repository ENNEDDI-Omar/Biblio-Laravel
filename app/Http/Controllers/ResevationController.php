<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResevationController extends Controller
{
    public function index()
    {   $reservations = Reservation::all();
        return view('user.home', compact('reservations'));
    }
    
    public function show(Reservation $reservId)
    {
      return view('admin.reservations.index', compact('reservId'));
    }

    public function create($bookId)
    {
      $book = Book::findOrFail($bookId);
      return view('admin.reservations.create', compact('book'));

    }

    public function store(ReservationRequest $request)
    {
    
        $book=Book::findOrFail($request['book_id']);
        if ($book && $book['copies_dispo']) {
            $book->decrement('copies_dispo');

            Reservation::creat(array_merge($request->all(),['user_id'=>Auth::id()]));

        }
    
      return redirect()->route('admin.reservations.index')->with('success', 'Reservation Réussi');
    }

    

    public function destroy(Reservation $reserv)
    {
      $reserv->delete();
      return redirect()->route('admin.reservations.index')->with('success', 'Reservation Supprimé avec Succés');
    }
}
