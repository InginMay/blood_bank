<?php $__env->startSection('content'); ?>
<div class="container">
	<h2>Donor Edit Form</h2>
	<div class="row">
		<div class="col-12">
			<form action="<?php echo e(route('donors.update',$donor->id)); ?>" method="post">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			  <div class="form-group row <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
			    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="inputName" value="<?php echo e($donor->user->name); ?>" placeholder="Enter Name">
			      	<?php if($errors->has('name')): ?>
			      		<div class="alert alert-danger">
		                	<span class="help-block"><strong><?php echo e($errors->first('name')); ?></strong></span>
		                </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
			    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo e($donor->user->email); ?>" placeholder="Enter Email">
			      	<?php if($errors->has('email')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
			    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="phone" id="inputPhone" value="<?php echo e($donor->phone); ?>" placeholder="Enter Phone">
			      	<?php if($errors->has('phone')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('phone')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="password" id="inputPassword" value="<?php echo e($donor->user->password); ?>" placeholder="Enter Password">
			      	<?php if($errors->has('password')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
			    <label for="inputDob" class="col-sm-2 col-form-label">Dob</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" name="dob" id="inputDob" value="<?php echo e($donor->dob); ?>">
			      	<?php if($errors->has('dob')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('dob')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('nrc') ? ' has-error' : ''); ?>">
			    <label for="inputNrc" class="col-sm-2 col-form-label">NRC</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nrc" id="inputNrc" value="<?php echo e($donor->nrc); ?>" placeholder="Enter NRC">
			      	<?php if($errors->has('nrc')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('nrc')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
			    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			    <div class="col-sm-10">
			      <textarea type="Address" class="form-control" name="address" id="inputAddress" value="<?php echo e($donor->address); ?>" placeholder="Address...."></textarea>
			      	<?php if($errors->has('address')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('address')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('blood_type_id') ? ' has-error' : ''); ?>">
			    <label for="inputBloodType" class="col-sm-2 col-form-label">Blood Type</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="blood_type_id">
			      	<option>--Select One--</option>
			      	<?php $__currentLoopData = $blood_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			      	<option value="<?php echo e($row->id); ?>"<?php if($donor->blood_type_id == $row->id): ?> selected <?php endif; ?>><?php echo e($row->name); ?></option>
			      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			      </select>
			      	<?php if($errors->has('blood_type_id')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('blood_type_id')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>
			  <div class="form-group row <?php echo e($errors->has('township_id') ? ' has-error' : ''); ?>">
			    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
			    <div class="col-sm-10">
			      <select class="form-control <?php $__errorArgs = ['township'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="township_id">
			      	<option>--Select One--</option>
			      	<?php $__currentLoopData = $townships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			      	<option value="<?php echo e($row1->id); ?>" <?php if($donor->township_id == $row1->id): ?> selected <?php endif; ?>><?php echo e($row1->name); ?></option>
			      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			      </select>
			      	<?php if($errors->has('township_id')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('township_id')); ?></strong></span>
		            </div>
		            <?php endif; ?>
			    </div>
			  </div>

			  <div class="form-group row <?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
	                <input type="radio" name="gender" id="inputGender" value="male <?php echo e($donor->gender); ?>">
	                <label for="male">Male</label>
	                <input type="radio" name="gender" id="inputGender" value="female <?php echo e($donor->gender); ?>">
	                <label for="female">Female</label>
	                <?php if($errors->has('gender')): ?>
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong><?php echo e($errors->first('gender')); ?></strong></span>
		            </div>
		            <?php endif; ?>
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
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/backend/donors/edit.blade.php ENDPATH**/ ?>