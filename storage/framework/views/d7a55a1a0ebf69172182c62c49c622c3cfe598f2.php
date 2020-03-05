<?php $__env->startSection('content'); ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Donated Tables</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Donated Date</th>
              <th>Donate Date</th>
              <th>Action</th>
            </tr>
          </thead>
          
          <tbody>
            <?php $i=1; ?>
            <?php $__currentLoopData = $donateds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php

            $now =Carbon\Carbon::now();
            $db_date=Carbon\Carbon::parse($row->date);
            $month=$db_date->addMonths(4);
            $date=date('Y-m-d',strtotime($month));
            ?>

            <tr>
              <td><?php echo e($i++); ?></td>
              <td><?php echo e($row->donor->user->name); ?></td>
              <td><?php echo e($row->date); ?></td>
              <td><?php echo e($date); ?></td>
              <td>
                <?php if($row->date < $now && $now < $month): ?>
                  <button type="submit" class="btn btn-danger">Deactive</button>
                  <?php else: ?>
                  <button type="submit" class="btn btn-success">Active</button> 
                    
                <?php endif; ?>
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
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/donated/index.blade.php ENDPATH**/ ?>