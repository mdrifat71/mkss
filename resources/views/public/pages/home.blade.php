@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <x-hero></x-hero>
    <section id="sectors">
        <div class="container">
            <div class="sectors-title t-center capitalize heading">
                
                <h2>
                    working sectors
                    <span class="circle-left"></span>
                    <span class="circle-right"></span>
                </h2>
            </div>
            <div class="sectors-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 sectors-container">
                        <x-sectors></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection