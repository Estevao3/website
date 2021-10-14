<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){

        $post = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('front.home');
    }

    public function course(){
        return view('front.course');
    }

    public function blog(){
        return view('front.blog');
    }

    public function article(){
        return view('front.article');
    }

    public function contact(){
        return view('front.contact');
    }
}
