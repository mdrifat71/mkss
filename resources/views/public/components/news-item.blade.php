<div class="news-item">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-img-wraper">
            <img src="{{asset("image/news/$image")}}" alt="" class="card-img-top img-fluid">
        </div>
        
        
        <div class="card-footer">
            <div class="news-info">
                <span class="news-category">
                   
                    {{$category}}
                    
                </span>
                <div class="date">
                    <i class="fa fa-calendar-alt"></i>
                    {{$date}}
                </div>
                <a href="/{{$url}}">
                     <h3>{{$title}}</h3>
                </a>
             </div>
        </div>
    </div>
</div>