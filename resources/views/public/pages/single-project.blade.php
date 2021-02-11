@php
    $head = [
        "page_title" => str_replace("-"," ",$project->title), 
        "description"=> $project->meta_description,
        "keyword"=>$project->meta_keyword,
        "robots"=>$project->meta_robots,
    ]    ;

@endphp

@extends("public.layout.app", $head)

@section("main")

<x-navigation current="f"></x-navigation>

<div class="container">
    <section class="single-project">
        <div class="col-lg-12 single-project-inner-container">
            <div class="single-project-title">
                <h1>{{$project->title}}</h1>
            </div>
           
            <div class="single-project-duration">
                <p><i class="fa fa-clock"></i>{{$project->from}} - {{$project->to}}</p>
            </div>
            <div class="project-status {{$project->status == 1 ? 'running-project' : 'archieved-project'}}">{{$project->status == 1 ? 'active' : 'archieved'}}</div>
            <hr>
            <div class="single-project-image">
                <div class="">
                    <img src='{{asset("image/project/$project->image")}}' alt="{{$project->image}}" class="img-fluid">
                </div>
            </div>
            <div class="single-project-sector">
                <p>{{$project->sector}}</p>
            </div>
            <div class="single-project-working-zone">
                <p>Working Zone : <b>{{$project->area}}</b></p>
            </div>
            <hr class="bellow-img">
            <article class="single-project-description">
                {!!$project->description!!}
            </article>
        </div>

        {{-- left sidevar --}}
        <div class="col-lg-3">

        </div>
        
    </section>
</div>

<x-footer></x-footer>
@endsection