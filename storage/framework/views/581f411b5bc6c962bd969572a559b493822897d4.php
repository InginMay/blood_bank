<?php $__env->startSection('content'); ?>
<div class="container-fluid">
 
  <!-- Page Heading -->
  


<h1 class="h3 mb-2 text-gray-800">Booking Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
                  
               
          <?php $i=1; ?>
          <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $now =Carbon\Carbon::now();
          $b_date=Carbon\Carbon::parse($row->date);        
          $diff =$b_date->diffInDays($now);
          ?>
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($row->donor->user->name); ?></td>
            <td><?php echo e($row->date); ?></td>
            <td>
              
              
              <?php if($now < $b_date): ?>
                <form action="<?php echo e(route('donated.store')); ?>" method="post" class="d-inline">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="name" value="<?php echo e($row->donor->user->name); ?>">
                  <input type="hidden" name="date" value="<?php echo e($row->date); ?>">
                  <button type='submit' class='btn btn-danger'>Confirm</button>
                </form>
              
              <?php elseif($now > $b_date): ?>

              <?php if($diff > 3): ?>
                <form method="POST" action="<?php echo e(route('bookings.destroy',$row->id)); ?>" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type='submit' class='btn btn-primary' >Cancel</button>
                </form>
              <?php else: ?>
                <form action="<?php echo e(route('donated.store')); ?>" method="post" class="d-inline">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="name" value="<?php echo e($row->donor->user->name); ?>">
                  <input type="hidden" name="date" value="<?php echo e($row->date); ?>">
                  <button type='submit' class='btn btn-danger' >Confirm</button>
                </form>
              <?php endif; ?>
              <?php endif; ?>
              

              <a href="<?php echo e(route('bookings.show',$row->id)); ?>" class="btn btn-info">
                <i class="fas fa-info-circle"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/bookings/index.blade.php ENDPATH**/ ?>