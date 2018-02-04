<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\User;
class DashboardController extends Controller
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
        /*$user=User::find(Auth()->user()->id);
        $book=Books::find(2);
        $user->books()->attach($book->id);*/
        $user=User::find(Auth()->user()->id);

        return view('dashboard')->with('user',$user);
    }
}
