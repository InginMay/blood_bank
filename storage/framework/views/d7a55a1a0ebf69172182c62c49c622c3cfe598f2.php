<?php $__env->startSection('content'); ?>
<div class="container-fluid">
 
    <!-- Page Heading -->
    <a href="<?php echo e(route('donated.create')); ?>" class="btn btn-danger float-right">Add New</a>
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
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
       
            <tbody>
              <?php $i=1; ?>
              <?php $__currentLoopData = $donated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($i++); ?></td>
                  <td><?php echo e($row->donar->name); ?></td>
                  <td>
                    <a href="<?php echo e(route('donated.show',$row->id)); ?>" class="btn btn-info">
                    <i class="fas fa-info-circle"></i></a>
                    <a href="<?php echo e(route('donated.edit',$row->id)); ?>" class="btn btn-warning">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="POST" action="<?php echo e(route('donated.destroy',$row->id)); ?>" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                    </form>
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