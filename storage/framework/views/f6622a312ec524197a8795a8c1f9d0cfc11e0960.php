<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">
	<div class="container-fluid my-3">
		<div class="row">
			<div class="col-md-6 offset-2 card shadow">
				
				<div class="row">
					<div class="col-12 my-5">
						<h2 style="text-align: center;"><b>Booking Detail</b></h2>
						<h5 class="mx-4 my-3">Name:   <?php echo e($booking->donor->user->name); ?></h5>
						<h5 class="mx-4 my-3">Email:   <?php echo e($booking->donor->user->email); ?></h5>
						<h5 class="mx-4 my-3">Phone:   <?php echo e($booking->donor->phone); ?></h5>
						 <h5 class="mx-4 my-3">DOB:   <?php echo e($booking->donor->dob); ?></h5>
						<h5 class="mx-4 my-3">NRC:   <?php echo e($booking->donor->nrc); ?></h5>
						<h5 class="mx-4 my-3">Address:   <?php echo e($booking->donor->address); ?></h5>
						<h5 class="mx-4 my-3">Blood Type:
            			<?php if($booking->donor->bloodtype): ?>   
            				<?php echo e($booking->donor->bloodtype->name); ?>

          				<?php else: ?>
                			Unknow Blood Type
          				<?php endif; ?></h5>
						<h5 class="mx-4 my-3">Township:   <?php echo e($booking->donor->townships->name); ?></h5>
						<h5 class="mx-4 my-3">Gender:   <?php echo e($booking->donor->gender); ?></h5>

						<h5 class="mx-4 my-3">Date:  <?php echo e($booking->date); ?></h5>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/bookings/show.blade.php ENDPATH**/ ?>