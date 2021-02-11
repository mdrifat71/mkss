@php
    $head = [
        "page_title" => str_replace("-"," ",$news->title), 
        "description"=> $news->meta_description,
        "keyword"=>$news->meta_keyword,
        "robots"=>$news->meta_robots,
    ]    ;

@endphp

@extends("public.layout.app", $head)

@section("main")

<x-navigation current="f"></x-navigation>

<div class="container">
    <div class="single-news">
        <div class="col-lg-12 single-news-inner-container">
            <div class="single-news-title">
                <h1>{{$news->title}}</h1>
            </div>

            <div class="single-news-date">
                <p><i class="fa fa-calendar-alt"></i>{{$news->created_at}}</p>
            </div>
            <div class="single-news-category mb-4">
                <p>{{$news->category}}</p>
            </div>
            <div class="single-news-image">
                <div class="">
                    <img src='{{asset("image/news/$news->image")}}' alt="{{$news->title}}" class="img-fluid">
                </div>
                <div class="image-caption">{{ $news->imagecaption ?? " " }}</div>
            </div>
           
            <hr class="bellow-img">
            <article class="single-news-description">
                {!! $news->description !!}
            </article>
        </div>

        {{-- left sidevar --}}
        <div class="col-lg-3">

        </div>
        
    </div>
</div>

<x-footer></x-footer>
@endsection