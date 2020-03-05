 
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <h2>All Donor</h2>
  <div class="row">
    <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 mb-5">
      
            <div class="card-body">
            <h4 class="card-title"><?php echo e($row->name); ?></h4>
            
            </div>
            <div class="card-footer">
            <a href="<?php echo e(route('detaildonor',$row->id)); ?>" class="btn btn-primary">Profile</a>
            </div>
        </div>
       
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>


 <?php $__env->stopSection(); ?>


<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/frontend/alldonors.blade.php ENDPATH**/ ?>