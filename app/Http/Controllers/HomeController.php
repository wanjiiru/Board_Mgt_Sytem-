<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function allUsers()
    {
        $users = User::all();
        return view('users.users',['users'=>$users]);
        dd ('Access All users');
    }


    public function adminSuperAdmin()
    {
        dd ('Acess Admin and SuperAdmin');
    }


    public function superAdmin()
    {
        dd('Access SuperAdmin');
    }
}
