<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Management</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-switch@3.3.4/dist/js/bootstrap-switch.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="path/to/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">                           
        <script src="path/to/jquery.min.js"></script>
        <script src="path/to/popper.min.js"></script>
        <script src="path/to/bootstrap.min.js"></script>
        
        
      </head>
      <br><br>
      <style>
        
.navbar-brand {
  display: flex; 
  justify-content: center; 
  align-items: center; 
  height: 60px; 
  
}
.navbar-nav i {
  margin-right: 6px; 
} 

.navbar-nav .nav-link:hover {
  color: #2487c0; 
   transform: translateY(-6px); 

}

.navbar {
  opacity: 0.8;
 
}
 

</style>

      <body>
      
          <nav class="navbar navbar-expand-lg  navbar-dark bg-black fixed-top">

            <div class="container">
                <a class="navbar-brand" href="#" style="color: #2487c0"> <img src="{{ asset('asssets/img/clogo.png') }}" alt="Logo" height="150%" width="100" >ContactManagement</a>
                </a>
              &nbsp;&nbsp; 
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item ">
                    <a class="nav-link text-white " href="/">
                      <i  class="fa fa-home text-white"></i>
                      Home
                      </a></li>
              &nbsp;&nbsp; 
                <li class="nav-item">
                  <a class="nav-link text-white" href="/create1">
                    <i class="fa fa-bars text-white"></i>
                    Forms</a>
                </li>
                &nbsp;&nbsp; 



                @guest
                @if (Route::has('login'))
                <li class="nav-item {{ Request::is('login') ? 'fw-bold ' : '' }}">
                    <a class="nav-link text-white {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"  ><i
                            class="fa fa-user icon text-white"></i> Login</a>
                </li>
                @endif
                &nbsp;&nbsp; 

                @if (Route::has('register'))
                <li class="nav-item {{ Request::is('register') ? 'fw-bold' : '' }}">
                    <a class="nav-link text-white {{ Request::is('register') ? 'active' : '' }}"
                        href="{{ route('register') }}" ><i class="fa fa-registered text-white"></i> Register</a>
                </li>
                @endif
              &nbsp;&nbsp; 

                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        {{ ucfirst(Auth::user()->name)  }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end"  aria-labelledby="navbarDropdown">
                
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" >
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
              </div>
            </div>
          </nav>
          
  
  
      @yield('content')



      
        <footer class="bg-dark text-light">
          <div class="container-fluid"><br>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <h5 class="text-center" style="color: #2487c0">Contact Management</h5>
              </div>

              <div class="col-sm-1"></div>
                
              <div class="col-sm-2">
                <h5 class="text-center" style="color: #2487c0">About Us</h5>
              </div>

              <div class="col-sm-1"></div>

              <div class="col-sm-2">
                <h5 class="text-center" style="color: #2487c0">Contact Us</h5>
              <p class="text-center" > <i  class="fa fa-home text-white"></i>&nbsp;&nbsp; Satlite Town,Gujranwala</p>
              <p class="text-center"><i  class="fa fa-phone text-white"></i>&nbsp;&nbsp; &nbsp; &nbsp; 0300-6789098</p>
              <p class="text-center"><i  class="fa fa-envelope text-white"></i>&nbsp;&nbsp; Email: EventEase123@gmail.com</p>
              </div> 
              <div class="col-sm-2"></div>

              </div> <br>
            </div>
          </div>
        </footer>
      

      <hr>
      <p class="text-center">© Copyright {{ date('Y') }} | All Rights Reserved | <a
        href="">ContactManagement</a></p>

  
    
</body>
</html>