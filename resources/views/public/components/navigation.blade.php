<header id = "header">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-sm-4 logo-container">
            <a href="/">
               <div class="logo d-flex">
                  <img src="{{asset("image/logo.png")}}" alt="">
                 <div class="logo-text">MKSS</div>
               </div>
            </a>
         </div>
         <div class="col-lg-9 navigation-container">
            <div class="hamburger" toggle="close">
               <i class="fas fa-bars"></i>
            </div>
            <nav>

               <div class="nav-menu-container d-flex">
                  <a href="/" class="nav-link {{$current == 'home' ? 'active' : ''}} ">Home</a>
                  <a href="/governing-body" class="nav-link {{$current == 'governance' ? 'active' : ''}}">Governing Body</a>
                  <a href="/news" class="nav-link {{$current == 'news' ? 'active' : ''}}">News</a>
                  <a href="/about-us" class="nav-link {{$current == 'about' ? 'active' : ''}}">About Us</a>      
                  <a href="/contact" class="nav-link {{$current == 'contact' ? 'active' : ''}}">Contact</a>
                  <a href="/project" class="nav-link {{$current == 'project' ? 'active' : ''}} project-menu">Project</a>
               </div>
            </nav>
         </div>
      </div>
   </div>
</header>