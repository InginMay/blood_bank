<?php $__env->startSection('content'); ?>
<div class="container">
	<h2>Booking Create Form</h2>
	<div class="row">
		<div class="col-12">
			<form action="<?php echo e(route('bookings.store')); ?>" method="post">
				<?php echo csrf_field(); ?>
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Choose Donor</label>
				<select name="course" class="form-control">
					<?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->id); ?>"><?php echo e($row->user->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>

			  <div class="form-group row">
			    <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
			    <div class="col-sm-12">
			      <input type="date" class="form-control" name="date" id="inputDate">
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
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/backend/bookings/create.blade.php ENDPATH**/ ?>