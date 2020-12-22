@extends('public.layout.app', ["title" => "404 Not Found!!"])

@section('main')

<x-navigation current=" "></x-navigation>
<div class="container">
    <div class="404 pt-5 pb-5 text-center">
        <img src="{{asset("/image/404.png")}}" alt="" class="img-fluid">
    </div>
</div>
<x-footer></x-footer>
@endsection