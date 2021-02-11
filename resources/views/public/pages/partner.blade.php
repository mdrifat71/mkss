@extends('public.layout.app', ["page_title"=> "Development Partner | MKSS", "robots" => "index"])

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="development-partner-page" style="min-height : 100vh; margin : 2rem 0">
        <div class="container">
            <main id="partner">
                <article>
                     {!!$content!!}
                </article>
            </main>
        </div>
    </div>

    <x-footer></x-footer>
@endsection