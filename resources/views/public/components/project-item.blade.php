<div class="project-item">
    <div class="card">
        <div class="card-img-top">
            <img src="{{asset("image/project/$image")}}" alt="" class="img-fluid">
            <div class="overlay-2"></div>
            <div class="tag">
                <span>{{$sector}}</span>
            </div>
        </div>
        <div class="card-footer">
            <div class="project-status {{$status == 1 ? 'running-project' : 'archieved-project'}}">{{$status == 1 ? 'active' : 'archieved'}}</div>
            <div class="project-duration"><i class="fas fa-clock"></i>{{$from}} - {{$to ?? 'running'}}</div>
            <a href="">
                <h3 class="project-title">{{$title}}</h3>
            </a>
            
            <a href="/project/{{$url}}"><button class="cbtn" >More<i class="fas fa-angle-double-right"></i></button></a>
        </div>
    </div>
</div>