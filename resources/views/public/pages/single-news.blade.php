@extends("public.layout.app", ["page_title" => str_replace("-"," ",$news->title)])

@section("main")

<x-navigation current="f"></x-navigation>

<div class="container">
    <div class="single-news">
        <div class="col-lg-9 single-news-inner-container">
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
                    <img src='{{asset("image/news/$news->image")}}' alt="{{$news->image}}" class="img-fluid">
                </div>
                <div class="image-caption">{{ $news->imagecaption ?? " " }}</div>
            </div>
           
            <hr class="bellow-img">
            <div class="single-news-description">
                {!! $news->description !!}
            </div>
        </div>

        {{-- left sidevar --}}
        <div class="col-lg-3">

        </div>
        
    </div>
</div>

<x-footer></x-footer>
@endsection