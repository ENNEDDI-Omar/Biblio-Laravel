<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {   
        $books=Book::all();
        return view('admin.books.index');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(BookRequest $request)
    {
            if ($request->hasFile('couverture')) {
                $imagePath = $request->file('couverture')->store('couverture', 'public');
                $request['couverture']=$imagePath;

                Book::create($request->all());
                return redirect()->route('admin.books.index')->with('success', 'Livre créé avec succés!');
            }
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        if ($request->hasFile('couverture')) {
            if ($book->Couverture) {
                Storage::disk('public')->delete($book->couverture);
            }

            $imagePath = $request->file('couverture')->store('couverture', 'public');
            $request['couverture'] = $imagePath;
        }
         $book->update($request->all());
         return redirect()->route('admin.books.index')->with('success', 'Livre mis à jour avec succés!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return view('admin.books.index');
    }


}
