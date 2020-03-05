<?php $__env->startSection('content'); ?>
  <h2>Detail Donor</h2>

<div class="container-fluid">
  <div class="row">
    <div class="card mb-3" style="max-width: 540px;">
  		<div class="row no-gutters">
    				<div class="col-md-6">
      					<div class="card-body">
        					<h5 class="card-title"><?php echo e($donor->user_id); ?></h5>
        					<h5><?php echo e($donor->phone); ?></h5>
        					<h5><?php echo e($donor->dob); ?></h5>
        					<h5><?php echo e($donor->nrc); ?></h5>
        					<h5><?php echo e($donor->address); ?></h5>
                  <h5><?php echo e($donor->blood_type_id); ?></h5>
                  <h5><?php echo e($donor->township_id); ?></h5>
                  <h5><?php echo e($donor->gender); ?></h5>
      					</div>
    				</div>
  		</div>
	</div>
    
  </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/frontend/detaildonor.blade.php ENDPATH**/ ?>