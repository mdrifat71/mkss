@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="news-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-5">
                    <div class="news-page-sidebar-heading">
                        <h2>
                            Categories
                        </h2>
                    </div>
                    <div class="news-page-side-bar">  
                        <a href="/news?ni=all"><i class="fa fa-tag" aria-hidden="true"></i>All</a>
                        @foreach($category as $c)
                            <a href="/news?ni={{$c->id}}"><i class="fa fa-tag" aria-hidden="true"></i>{{$c->name}}</a>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="news-page-heading">
                        <h2><i class="fas fa-project-diagram"></i>Project we have done</h2>
                    </div>
                    <div class="row">
                        @foreach($news as $n)
                            @php
                                $title = $n->title;
                                $description = $n->description;
                                $category = $n->category;
                                $image = $n->image;   
                            @endphp
                            <div class="col-lg-4 col-md-6">
                                <x-news-item :title="$title" :description="$description" :category="$category" :image="$image"></x-news-item>
                            </div>
                       @endforeach
                    </div>
                    
                    <!--
                        bootstrap pagination
                    -->
                    <div class="news-pagination">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

@endsection