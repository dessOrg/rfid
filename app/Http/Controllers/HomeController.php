<?php

namespace App\Http\Controllers;

use App\User;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $role = Auth::user()->role;

      if($role === 'Admin'){
        return view('admin.index');
      }else {
        return view('home');
      }
    }

    public function red()
    {



    }


    public function departments()
    {

        $name = Department::get();
        return view('index')->with('departments', $name);
    }

    public function update(Request $request) {
    $this->validate($request, [
        'department'=>'required|max:100'
    ]);
    $id = Auth::user()->id;

    $user = User::findOrFail($id);
    $user->department = $request->input('department');
    $user->save();

    return Redirect::to('/');

}

}
