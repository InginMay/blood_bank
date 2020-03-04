<!DOCTYPE html>
<html>
<head>
  <!-- <style>
  #heart  {
  background-image: url("<?php echo e(asset('blood/images/ww.gif')); ?>");
  background-color: #cccccc;
}
</style> -->
<!-- </head> -->

	<title>Blood Donate</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('blood/style.css')); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('blood/css/bootstrap.min.css')); ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('blood/fontawesome/css/all.min.css')); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/jpg" href="<?php echo e(asset('blood/images/hh.jpg')); ?>" sizes="16x16">
	
	<script type="text/javascript" src="<?php echo e(asset('blood/js/jquery.min.js')); ?>"></script>
	
	<script type="text/javascript" src="<?php echo e(asset('blood/js/bootstrap.bundle.min.js')); ?>"></script>
	 </head>
<body>
    
		<div class="blood">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white;">
      <a class="navbar-brand" href="#">
        <img src="<?php echo e(asset('blood/images/logo.gif')); ?>" style="width: 170px;height: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="<?php echo e(route('main')); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
          </li>
          <?php if(Auth::user()): ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('signin')); ?>"><?php echo e(Auth::user()->name); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('signin')); ?>">Booking</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('signin')); ?>">SignIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('signup')); ?>">SignUp</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <img src="<?php echo e(asset('blood/images/home3.jpg')); ?>" style="width: 100%;height: 500px;">
      </div>
    </div>
  </div>


  <?php echo $__env->yieldContent('content'); ?>



		
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
    <a href="<?php echo e(route('main')); ?>"> BloodDonation.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/frontendtemplate.blade.php ENDPATH**/ ?>