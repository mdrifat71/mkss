<header id = "header">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="logo d-flex">
               <img src="{{asset("image/logo.png")}}" alt="">
               <div class="logo-text">MKSS</div>
            </div>
         </div>
         <div class="col-md-9">
            <nav>
               <div class="nav-menu-container d-flex">
                  <a href="/" class="nav-link {{$current == 'home' ? 'active' : ''}} ">Home</a>
                  <a href="/governing-body" class="nav-link">Governing Body</a>
                  <a href="/about-us" class="nav-link">About Us</a>
                  <a href="/contact" class="nav-link">Contact</a>
                  <a href="/project" class="nav-link {{$current == 'project' ? 'active' : ''}} project-menu">Project</a>
               </div>
            </nav>
         </div>
      </div>
   </div>
</header>