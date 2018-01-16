<?php

namespace App\Http\Controllers;

use App\User;
use App\Department;
use App\Card;
use App\Log;
use Auth;
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

      if($role == 'Admin'){
        return view('admin.index');
      }else {
        return view('home');
      }
    }

    public function red()
    {



    }


    public function department()
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

public function getcard($id) {

    $card = Card::find($id);
    return view('users.update', compact('card'));
}

public function updatecard(Request $request) {
    $this->validate($request, 
        ['tagno' => 'required|max:100', 'id' => 'required']);

    $id = $request->input('id');
    $card = Card::find($id);
    $card->tagno = $request->input('tagno');
    $card->save();

    return Redirect::to('card'. $id);
}

public function deactivate($id) {
    $card = Card::find($id);
    if($card->status == "Active") {
       $card->status = "Inactive";
       $card->save();
    } else{
       $card->status = "Active";
       $card->save();
    }


    return Redirect::to('/cards/'. $id);
}

public function cardinfo($id) {
   $card = Card::find($id);
   $logs = Log::where('card_id', '=', $card->id)->get();
   return view('tags.edit', compact('card', 'logs'));
}

public function logs() 
{
    $logs = Log::get();

    return view('tags.logs', compact('logs'));
}

}
