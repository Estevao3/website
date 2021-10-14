<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){

        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.home', ['posts' => $posts]);

    }

    public function course(){
        return view('front.course');
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('front.blog', ['posts' => $posts]);
    }

    public function article(){
        return view('front.article');
    }

    public function contact(){
        return view('front.contact');
    }
}
