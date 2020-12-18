@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="project-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-5">
                    <div class="project-page-sidebar-heading">
                        <h2>
                            Sector
                        </h2>
                    </div>
                    <div class="project-page-side-bar"> 
                        <a href="/project?si=all"><i class="fa fa-plus-square" aria-hidden="true"></i>All</a> 
                        @foreach ($sectors as $sector)
                        <a href="/project?si={{$sector->id}}"><i class="fa fa-plus-square" aria-hidden="true"></i>{{$sector->name}} <span class="badge badge-dark">{{$sector->totalproject}}</span></a>

                        @endforeach
                        
                       
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="project-page-heading">
                        <h2><i class="fas fa-project-diagram"></i>Project we have done</h2>
                    </div>
                    <div class="row">
                        @if (count($projects) == 0)
                            <div class="alert alert-danger no-project-alert">
                                Sorry No Projects Found
                            </div>
                        @else
                            @foreach ($projects as $project)
                                @php
                                    
                                    $url = str_replace(" ", "-", $project->title); // create  url from $title
                                    $sector = $project->name;
                                    $title  = $project->title;
                                    $description = $project->description;
                                    $from = $project->from;
                                    $to = $project->to;
                                    $image = $project->image;
                                    $status = $project->status;
                                @endphp
                                <div class="col-lg-4 col-md-6">
                                    <x-project-item :title="$title" :description="$description" :sector="$sector" :from="$from" :to="$to" :status="$status" :image="$image" :url="$url"></x-project-item>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    
                    <!--
                        bootstrap pagination
                    -->
                    {{-- <div class="project-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link active" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
@endsection