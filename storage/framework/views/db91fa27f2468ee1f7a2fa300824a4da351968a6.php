<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">
    <div class="container-fluid my-3">
  	<div class="row">
  <div class="col-md-6 offset-2 card shadow">
      
      <div class="row">
        <div class="col-12 my-5">
          <h2>Booking Detail</h2>
          <h5 class="mx-4 my-3">Name:   <?php echo e($booking->donor->user->name); ?></h5>
          <h5 class="mx-4 my-3">Date:  <?php echo e($booking->date); ?></h5>
          
          
        </div>
      </div>
    </div>
    
  </div>
</div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/backend/bookings/show.blade.php ENDPATH**/ ?>