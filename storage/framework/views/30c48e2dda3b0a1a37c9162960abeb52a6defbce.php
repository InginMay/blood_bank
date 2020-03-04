<?php $__env->startSection('content'); ?>
<div class="container-fluid">
 
    <!-- Page Heading -->
    <a href="<?php echo e(route('donors.create')); ?>" class="btn btn-danger float-right">Add New</a>
    <h1 class="h3 mb-2 text-gray-800">Donors Table</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Type</th>
                <th>Gender</th>
                <th>Action</th>
              </tr>
            </thead>
       
            <tbody>
              <?php $i=1; ?>
              <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($i++); ?></td>
                  <td><?php echo e($row->user['name']); ?></td>
                  <td><?php echo e($row->user['email']); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <?php if($row->bloodtype): ?>
                  <td><?php echo e($row->bloodtype->name); ?></td>
                  <?php else: ?>
                  <td>Unknow Blood Type</td>
                  <?php endif; ?>
                  <td><?php echo e($row->gender); ?></td>
                  <td>
                    <button class="btn btn-info detail" data-id="<?php echo e($row->id); ?>">
                    <i class="fas fa-info-circle"></i></button>
                    <a href="<?php echo e(route('donors.edit',$row->id)); ?>" class="btn btn-warning">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="POST" action="<?php echo e(route('donors.destroy',$row->id)); ?>" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
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

  <!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Donor Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
        <p class="name"></p>
        <p class="email"></p>
        <p class="phone"></p>
        <p class="nrc"></p>
        <p class="address"></p>
        <p class="bloodtype"></p>
        <p class="dob"></p>
        <p class="gender"></p>
        <p class="township"></p>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('tbody').on('click','.detail',function(){
        var id=$(this).data('id');
        // alert(id);
        $.get("donors/"+id, function(res){
          console.log(res);
          $('.name').text(res.user.name);
          $('.email').text(res.user.email);
          $('.phone').text(res.phone);
          $('.nrc').text(res.nrc);
          $('.address').text(res.address);
          $('.bloodtype').text(res.bloodtype.name);
          $('.dob').text(res.dob);
          $('.gender').text(res.gender);
          $('.township').text(res.townships.name);
          $('#detailModal').modal('show');
        })
      })
    })
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/backend/donors/index.blade.php ENDPATH**/ ?>