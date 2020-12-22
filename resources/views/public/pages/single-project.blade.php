@extends("public.layout.app", ["page_title" => str_replace("-", " ", $project->title)])

@section("main")

<x-navigation current="f"></x-navigation>

<div class="container">
    <div class="single-project">
        <div class="col-lg-9 single-project-inner-container">
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
            <div class="single-project-description">
                {{$project->description}}
            </div>
        </div>

        {{-- left sidevar --}}
        <div class="col-lg-3">

        </div>
        
    </div>
</div>

<x-footer></x-footer>
@endsection