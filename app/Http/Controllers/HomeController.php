<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;






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

        $user_id = auth()->user()->id;
        $user = User::find($user_id)->posts()->paginate(10);
        return view('home')->with('posts', $user);
    }
}
