<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <img src="<?php echo e(asset('image/signinme.jpg')); ?>" style="width: 400px;height: 400px;">
      </div>
    </div>
  </div>

<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow mr-5">
			
			<div class="row">
				<div class="col-12">
					<form action="<?php echo e(route('login')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<h1 align="center" class="my-3">SignIn</h1>
						
						<div class="form-group col-md-12">
							<label for="inputEmail">E-Mail Address</label>
							 <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email..." required autocomplete="email" autofocus>
							<?php $__errorArgs = ['email'];
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
							<label for="inputPassword">Password</label>
							 <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Enter Password..." required autocomplete="current-password">
							 <?php $__errorArgs = ['password'];
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
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-danger" type="submit">Login</button>
							<a href="<?php echo e(route('signin')); ?>">Forgot Your Password?</a>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>
	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blood_donation/resources/views/frontend/signin.blade.php ENDPATH**/ ?>