<?php $__env->startSection('content'); ?>
<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow">
			
			<div class="row">
				<div class="col-12">
					<form action="<?php echo e(route('bookings.store')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<h1 align="center" class="my-3">Booking</h1>
						
						<div class="form-group col-md-12">
							<label class=" col-form-label">Name</label>
							<select name="donor" class="form-control">
								<?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($row->id); ?>"><?php echo e($row->user->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group col-md-12">
							<label for="inputDate">Date</label>
							 <input id="date" type="date" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="date" required autocomplete="current-date">
							 <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-danger" type="submit">Booking</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>
	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/frontend/booking.blade.php ENDPATH**/ ?>