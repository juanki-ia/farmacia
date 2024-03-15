<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>['required'],
            'password'=>['required'],
            'name'=>['required'],
        ]);
        $controllers= new Controllers;
        $controllers->email = $request->input('email');
        $controllers->password = $request->input('password');
        $controllers->name = $request->input('name');
        $controllers->save();

        session()->flash('status','Crontroller created!');

        return to_route('controllers.index');
    }

}
