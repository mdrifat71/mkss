@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="about-us-page">
        <div class="container">
            <h2>About Us</h2>
        </div>
    </div>
    <x-footer></x-footer>
@endsection