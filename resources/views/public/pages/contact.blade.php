@extends('public.layout.app')

@section('main')
    <x-navigation :current="$current"></x-navigation>
    <div id="contact">
        <div class="container">
            <div class="row">

                {{-- Contact form start --}}
                <div class="col-lg-8 col">
                    
                    <div class="contact-form">
                        <form action="/contact" method="post" id="contact-form">
                            <div class="form-group">
                                <label for="#name">Name</label>
                                <input placeholder="Your Name..." type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="#email">Email</label>
                                <input placeholder="Your Email..." type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="#subject">Subject</label>
                                <input placeholder="Subject..." type="text" name="subject" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="#message">Your Message</label>
                                <textarea placeholder="Your Message..." name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-secondary">Send</button>
                        </form>
                    </div>
                </div>
                {{-- Contact form address --}}

                {{--  address start --}}
                <div class="col-lg-4">
                    <div class="contact-us-heading">
                        <h2><i class="fa fa-envelope"></i> Contact Us</h2>
                    </div>
                    <div class="contact-page-address">
                        <div class="location">
                            <p><i class="fas fa-map-marker-alt mb-3"></i> <b>Head Office</b></p>
                            <div class="contact-us-body pl-4">
                                <p class=""><b>Village</b> : Kazibari Sontola</p>
                                <p><b>Post</b>: Sadullapur</p>
                                <p><b>Upazila</b>: Sadullapur</p>
                                <p class="mb-4"><b>District</b> : Gaibandha</p>
                                <p><i class="fa fa-phone"></i>01716875283</p>
                                <p><i class="fa fa-envelope"></i>mkssgaibandha@yahoo.com</p>
                            </div>
                           
                        </div>

                    </div>
                </div>
                {{-- Address end --}}
            </div>
        </div>
    </div>
    <x-footer></x-footer>
@endsection