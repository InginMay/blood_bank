<?php $__env->startSection('content'); ?>
<div class="container">
	<h2>Blood Type Create Form</h2>
	<div class="row">
		<div class="col-12">
			<form method="post" action="<?php echo e(route('blood_types.store')); ?>">
				<?php echo csrf_field(); ?>
				<div class="form-group row">
					<label for="inputName" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="inputName" placeholder="Enter Name">
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
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/blood_types/create.blade.php ENDPATH**/ ?>