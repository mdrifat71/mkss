@extends('public.layout.app')

@section('main')
    @php
       
    @endphp
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
                        <x-sectors img="agriculture.jpg" title="Agriculture"></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors img="human.jpg" title="Human rights"></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors img="health.jpg" title="Public Health"></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors img="education.jpg" title="Education"></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12  sectors-container">
                        <x-sectors img="relief.jpg" title="Relief Operation"></x-sectors>
                        <a href="#" class="sectors-link"></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="">
        <x-about></x-about>
    </section>

    <section id="project">
        <div class="container">
            <div class="project-header heading">
                <h2>
                    project
                    <span class="circle-left"></span>
                    <span class="circle-right"></span>

                </h2>
            </div>
            <div class="project-container">
                <div class="row">
                    
                    @foreach ($projects as $project)
                        @php
                             
                            $url = str_replace(" ", "-", $project->title); // create  url from $title
                            $sector = $project->sector;
                            $title  = $project->title;
                            $description = $project->description;
                            $from = $project->from;
                            $to = $project->to;
                            $image = $project->image;
                            $status = $project->status;
                        @endphp
                        <div class="col-lg-4 col-md-6 col-sm-12 p project-item-container">
                            <x-project-item :title="$title" :description="$description" :sector="$sector" :from="$from" :to="$to" :status="$status" :image="$image" :url="$url"></x-project-item>
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="more">
                <a href="">
                    <button class="cbtn" title ="view more project"><i class="fas fa-angle-double-right"></i></button>
                </a>
            </div>
        </div>
    </section>


    <section id="video">
        <div class="container">
            <div class="video-title ">
                <h2>Recent Videos</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-video-item></x-video-item>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-video-item></x-video-item>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-video-item></x-video-item>
                </div>
            </div>
        </div>
    </section>


{{-- News section start --}}
    <section id="news">
        <div class="heading news-heading">
            <h2>
                news
                <span class="circle-left"></span>
                <span class="circle-right"></span>
            </h2>
        </div>

        <div class="container">
            <div class="row">
                @foreach($news as $n)
                    @php
                        $title = $n->title;
                        $description = $n->description;
                        $image = $n->image;
                        $category = $n->category;
                    @endphp
                   <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-item-container">
                        <x-news-item :title="$title" :description="$description" :image="$image" :category="$category"></x-news-item>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- link to go to news page --}}
            <div class="more">
                <a href="/news">
                    <button class="cbtn" title ="view more news"><i class="fas fa-angle-double-right"></i></button>
                </a>
            </div>
        </div>
    </section>
{{-- news section end --}}

   <x-footer>
       
   </x-footer>
@endsection