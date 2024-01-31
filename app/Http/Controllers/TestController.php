<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      $tests = Test::all();

      return view('test.index');
    }
   

    public function show(Test $test){
  
        return view('test.show', compact('test'));
    }
     
    public function create(){
  
        return view('test.create');
    }

    public function store(Request $request){
  
        $test = Test::create($request->all());

        return view('test.index');
    }

    public function edit(Test $test){
  
        return view('test.edit', compact('test'));
    }

    public function update(Request $request, Test $test){
  
        $test->update($request->all());

        return view('test.index');
    }
     
    public function destroy( Test $test){
  
        $test->delete();

        return view('test.index');
    }
}
