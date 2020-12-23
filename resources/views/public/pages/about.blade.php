@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="about-us-page">
        <div class="container ">
            @foreach ($info as $i)
                <div class="{{$i->heading}} x block">
                    <h2><i class="fad fa-share"></i>{{$i->heading}}</h2>
                    <p class="description">
                        {!! $i->content !!}
                    </p>
                </div>
            @endforeach
        </div>      
    </div>
    <x-footer></x-footer>
@endsection