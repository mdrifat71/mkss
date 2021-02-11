@extends('public.layout.app', ["page_title"=> "About us | MKSS", "description" => $description])

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <main id="about-us-page">
        <div class="container ">
           <article>
                {!!$content!!}
           </article>
        </div>      
    </main>
    <x-footer></x-footer>
@endsection