<?php

namespace App\Http\Controllers;

use App\Post;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function single($uri){

        $post = Post::where('uri', $uri)->first();
        return view('front.single', ['post' => $post]);
    }

    public function contact(){
        return view('front.contact');
    }

    public function sendmail(Request $request){

        $data = [
            'reply_name' => $request->first_name ." ". $request->last_name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

            Mail::send(new Contact($data));
            return redirect()->route('contact');
            //return new Contact($data);
    }
}
