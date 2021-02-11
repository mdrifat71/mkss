<div class="sectors-card">
    {{-- <div class="card ">
        <div class="card-header"></div>
        <div class="card-img-container">
            <img src="{{asset("image/sector/$image")}}" alt="" class="card-img-top img-fluid ">
            
        </div>
        
        <div class="card-footer">
            <h3>{{$name}}<i class="fas fa-angle-double-right"></i></h3>
        </div>
    </div> --}}
    <div class="sector-card">
        <div class="sector-card-image-container">
            <img src="{{asset("image/sector/$image")}}" alt="" class="card-img-top img-fluid ">
        </div>
        <div class="sector-card-title">
            <h3>{{$name}}</h3>
        </div>
    </div>
</div>