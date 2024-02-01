<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('admin.users.index', compact('users'));
    } 

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {  $user = $request->validated();
       $user['password'] = bcrypt($request->input('Password'));

      User::create($user);

      return redirect()->route('admin.users.index')->with('success', 'Utilisateur créé avec succés!');
    }

    public function edit(User $user)
    {
     return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $userData = $request->validated();
        $userData['password'] = bcrypt($request->input('Password'));

        $user->update($userData);
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour avec succés!');
    }

    public function destroy(User $user)
    {
      $user->delete();
      return view('admin.users.index');
    }
}
