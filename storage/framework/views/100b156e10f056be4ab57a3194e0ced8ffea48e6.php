<?php $__env->startSection('content'); ?>
<div class="container">
	<h2>Township Edit Form</h2>
	<div class="row">
		<div class="col-12">
			<form method="post" action="<?php echo e(route('townships.update',$township->id)); ?>" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
			  <div class="form-group row">
			    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter Name" value="<?php echo e($township->name); ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-danger">Save</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/townships/edit.blade.php ENDPATH**/ ?>