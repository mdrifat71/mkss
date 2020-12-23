@extends("public.layout.app")

@section("main")
    
    <x-navigation :current="$current"></x-navigation>
    
    <section id="governing-body">
        <div class="container">

            @foreach ($author as $a)
                <div class="profile">
                    <div class="profile-img">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="{{asset('image/governing/'.$a->image)}}" class="img-fluid" alt="{{$a->image}}">
                            </div>
                        </div>
                    </div>
                    <p class="name">{{$a->name}}</p>
                    <p class="designation"><b>{{$a->status}}</b></p>
                    <p class="email"><i class="fa fa-envelope"></i> {{$a->email}}</p>
                    <p class="description">
                        {{$a->description}}
                    </p>
                </div>
                <hr>
            @endforeach
            

        </div>
    </section>
    <x-footer></x-footer>
@endsection