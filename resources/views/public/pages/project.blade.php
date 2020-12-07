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
                        <a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Human rights</a>
                        <a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Agriculture</a>
                        <a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Public Health</a>
                        <a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Relief Operation</a>
                       
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="project-page-heading">
                        <h2><i class="fas fa-project-diagram"></i>Project we have done</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <x-project-item></x-project-item>
                        </div>
                    </div>
                    
                    <!--
                        bootstrap pagination
                    -->
                    <div class="project-pagination">
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