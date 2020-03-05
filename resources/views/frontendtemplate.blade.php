<!DOCTYPE html>
<html>
<head>
  <!-- <style>
  #heart  {
  background-image: url("{{asset('blood/images/ww.gif')}}");
  background-color: #cccccc;
}
</style> -->
<!-- </head> -->

	<title>Blood Donate</title>
	<link rel="stylesheet" type="text/css" href="{{asset('blood/style.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('blood/css/bootstrap.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('blood/fontawesome/css/all.min.css')}}">

  <!-- Favicon -->
  <link rel="icon" type="image/jpg" href="{{asset('blood/images/hh.jpg')}}" sizes="16x16">
	
	<script type="text/javascript" src="{{asset('blood/js/jquery.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('blood/js/bootstrap.bundle.min.js')}}"></script>
	 </head>
<body>
    
		<div class="blood">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white;">
      <a class="navbar-brand" href="#">
        <img src="{{asset('blood/images/logo.gif')}}" style="width: 170px;height: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
          @if(Auth::user())

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          
            <li class="nav-item">
              <button class="btn btn-danger" data-target="#bookingModal" data-toggle="modal">Booking</button>
            </li>
          
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('signin')}}">SignIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('signup')}}">SignUp</a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('blood/images/home3.jpg')}}" style="width: 100%;height: 500px;">
      </div>
    </div>
  </div>


  @yield('content')



		
	<!-- Footer -->
<footer class="page-footer font-small cyan darken-3 mt-3 bg-danger">

  <!-- Footer Elements -->
  <div class="container-fluid">

    <!-- Grid row-->
    <div class="row" align="center">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-2 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x" style="color:white"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="{{route('main')}}"> BloodDonation.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>

<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModal">Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('bookings.store')}}" method="POST">
        @csrf
        <div class="modal-body">
            <label class="form-control-label">Date</label>
            <input type="date" name="booking" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Book</button>
        </div>
      </form> 
    </div>
  </div>
</div>

