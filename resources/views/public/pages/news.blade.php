@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="news-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-5 news-page-sidebar-container">
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
                                $date = $n->created_at;
                                $date = substr($date, 0, 10);
                            @endphp
                            <div class="col-lg-4 col-md-6">
                                <x-news-item :title="$title" :description="$description" :category="$category" :image="$image" :date="$date"></x-news-item>
                            </div>
                       @endforeach
                    </div>
                    
                    <!--
                        bootstrap pagination
                    -->
                    @php
                        $next = $page+1;
                        $prev = $page-1;  
                    @endphp
                    <div class="news-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item {{$prev == 0 ? "disabled" : ""}}">
                                <a class="page-link" href="{{"?p=$prev&ni=$news_id"}}" tabindex="-1">Previous</a>
                              </li>
                              
                              @for ($i = 1; $i <= $total_page; $i++)
                                <li class="page-item"><a class="page-link {{$page == $i ? "active" : ""}}" href="{{"?p=$i&ni=$news_id"}}">{{$i}}</a></li>
                              @endfor
                              <li class="page-item {{$next > $total_page ? "disabled" : ""}}">
                                <a class="page-link" href="{{"?p=$next&ni=$news_id"}}">Next</a>
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