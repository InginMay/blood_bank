<?php $__env->startSection('content'); ?>
  

<div class="container-fluid my-3">
  <div class="row">
  <div class="col-md-4 offset-4 card shadow" style="background-color: #FAD7E5;">
      
      <div class="row">
        <div class="col-12 my-5">
          <h2>Donor Detail</h2>
          <h5 class="mx-4 my-3">Name:   <?php echo e($user->name); ?></h5>
          <h5 class="mx-4 my-3">Email:  <?php echo e($user->email); ?></h5>
          <h5 class="mx-4 my-3">Phone:  <?php echo e($user->donor->phone); ?></h5>
          <h5 class="mx-4 my-3">NRC:    <?php echo e($user->donor->nrc); ?></h5>
          <h5 class="mx-4 my-3">Address:    <?php echo e($user->donor->address); ?></h5>
          <h5 class="mx-4 my-3">Blood Type:
            <?php if($user->donor->bloodtype): ?>   
            <?php echo e($user->donor->bloodtype->name); ?>

          <?php else: ?>
                Unknow Blood Type
          <?php endif; ?></h5>
          <h5 class="mx-4 my-3">Township:   <?php echo e($user->donor->townships->name); ?></h5>
          <h5 class="mx-4 my-3">Gender:    <?php echo e($user->donor->gender); ?></h5>
          
        </div>
      </div>
    </div>
    
  </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/frontend/donar_detail.blade.php ENDPATH**/ ?>