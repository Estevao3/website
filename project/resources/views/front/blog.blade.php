@extends('front.master.master')

@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(front/assets/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Blog</h1>
                            <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @isset($posts)
    <div id="fh5co-blog">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)

                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 800, 450)) }}" alt=""></a>
                            <div class="blog-text">
                                <h3><a href=""#>{{ $post->title }}</a></h3>
                                <span class="posted_on">{{ date('d/m/Y H:i', strtotime($post->created_at)) }}</span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>{{ $post->subtitle }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    @if(($loop->index + 1) % 3 === 0)
                        <div style="width: 100%; float: left; height: 1px;"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    @endisset
    @include('front.includes.optin')
@endsection
