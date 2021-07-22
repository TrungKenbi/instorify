<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        // dd(auth()->user()->conversations->first()->messages);

        $posts = Post::orderByRaw('RAND()')->limit(10)->get();
        $recommendFriends = auth()->user()->getFriendsOfFriends(10);
        if (count($recommendFriends) == 0)
            $recommendFriends = User::where('id', '!=', auth()->id())->orderByRaw('RAND()')->limit(5)->get();
        return view('home', compact('posts', 'recommendFriends'));
    }
}
