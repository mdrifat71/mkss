@extends("public.layout.app")

@section("main")
    
    <x-navigation :current="$current"></x-navigation>
    
    <section id="governing-body">
        <div class="container">

            <div class="profile">
                <div class="profile-img">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <img src="{{asset('image/governing/belal.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <p class="name">Md Belalur Rahman</p>
                <p class="designation"><b>Executive Director</b></p>
                <p class="email"><i class="fa fa-envelope"></i> beal@gmail.com</p>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur? Sit dignissimos aspernatur odit, quae quam unde eaque quasi sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure inventore omnis non obcaecati assumenda, hic velit? Hic voluptas quod consectetur exercitationem numquam possimus qui quibusdam porro eaque perferendis nulla, eos, iste ducimus temporibus sapiente impedit cumque obcaecati quae velit mollitia officiis enim alias. Atque ratione explicabo hic magni! Tenetur.
                </p>
            </div>
            <hr>
            <div class="profile">
                <div class="profile-img">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <img src="{{asset('image/governing/helal.webp')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <p class="name">Md Belalur Rahman</p>
                <p class="designation"><b>Executive Director</b></p>
                <p class="email"><i class="fa fa-envelope"></i> beal@gmail.com</p>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur? Sit dignissimos aspernatur odit, quae quam unde eaque quasi sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure inventore omnis non obcaecati assumenda, hic velit? Hic voluptas quod consectetur exercitationem numquam possimus qui quibusdam porro eaque perferendis nulla, eos, iste ducimus temporibus sapiente impedit cumque obcaecati quae velit mollitia officiis enim alias. Atque ratione explicabo hic magni! Tenetur.
                </p>
            </div>

            <hr>
            <div class="profile">
                <div class="profile-img">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <img src="{{asset('image/governing/helal.webp')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <p class="name">Md Belalur Rahman</p>
                <p class="designation"><b>Executive Director</b></p>
                <p class="email"><i class="fa fa-envelope"></i> beal@gmail.com</p>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur? Sit dignissimos aspernatur odit, quae quam unde eaque quasi sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure inventore omnis non obcaecati assumenda, hic velit? Hic voluptas quod consectetur exercitationem numquam possimus qui quibusdam porro eaque perferendis nulla, eos, iste ducimus temporibus sapiente impedit cumque obcaecati quae velit mollitia officiis enim alias. Atque ratione explicabo hic magni! Tenetur.
                </p>
            </div>

        </div>
    </section>
    <x-footer></x-footer>
@endsection