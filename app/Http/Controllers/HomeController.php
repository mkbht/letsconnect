<?php

namespace App\Http\Controllers;

use App\Model\Post;
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
        $data['posts'] = Post::with('user')->latest()->paginate(5);

        return view('home', $data);
    }
}
