<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-2">
    <div class="row">
      <div class="col-12">
        <img src="<?php echo e(asset('image/111.jpg')); ?>" style="width: 100%;height: 500px;">
      </div>
    </div>
  </div>

<div class="container-fluid my-3 mt-5">
  <div class="row ">
    <div class="col-md-4 offset-1 card shadow">
        
        <div class="row">

          <div class="col-12">
            <h2 align="center">Donor Detail</h2>
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
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Donated Date</th>
                <th>Donate Date</th>
              </tr>
            </thead>
            
            <tbody>
              <?php if(Auth::user()->donor->donateds): ?>
              <?php $i=1;

               ?>

                <?php $__currentLoopData = $user->donor->donateds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $now=Carbon\Carbon::now();
                    $db_date=Carbon\Carbon::parse($row->date);
                    $date1=date('d-m-Y',strtotime($db_date));
                    $date_string=date('l-M-Y',strtotime($db_date));
                    $month=$db_date->addMonths(4);
                    $month_date=date('d-m-Y',strtotime($month));
                    $date_string1=date('l-M-Y',strtotime($month));
                  ?>
                  <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($date1); ?> ( <?php echo e($date_string); ?> )</td>
                    <td><?php echo e($month_date); ?> ( <?php echo e($date_string1); ?> ) </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php $i++; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
  
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/frontend/donar_detail.blade.php ENDPATH**/ ?>