<?php

namespace App\Http\Controllers;

use App\Cour;
use App\Formation;
use App\User;
use Illuminate\Http\Request;

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
        $court = Cour::orderBy('id', 'DESC')->paginate(5);
        $formations = Formation::orderBy('id', 'DESC')->paginate(5);
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('home', compact('court','formations','users'));

    }
}
