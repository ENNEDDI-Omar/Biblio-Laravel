<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, User $user)
    {
        $user = $request->validated();
       $user['password'] = bcrypt($request->input('Password'));

      User::create($user);

      return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succés!');
    }

    /**
     * Display the specified resource.
     */

     
    public function show(User $user)
    {   
        return view('admin.users.show', compact('user'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, Role $roles)
    {   
        $roles=Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {

        $userData = $request->validated();
        

        $user->update($userData);
        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succés!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
      
        return redirect()->route('users.index');
    }
}
