;
<?php $__env->startSection('content'); ?>
<h2>Booking Detail</h2>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<label>Name : <?php echo e($row->donor->user->name); ?></label>
			<br>
			Date : <?php echo e($booking->date); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/backend/bookings/show.blade.php ENDPATH**/ ?>