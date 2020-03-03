<?php $__env->startSection('content'); ?>
<div class="container-fluid my-3">
	<div class="row ">
		<div class="col-lg-6 col-md-6 col-sm-12">
			
				
				<div class="row">
					<div class="col-12">
						<form action="" method="POST">
							<h1 align="center" class="my-3">Contact</h1>
							
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="inputName" placeholder="Enter Name">
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
							</div>
							<div class="form-group col-md-12">
								<input type="number" class="form-control" id="inputPhone" placeholder="Phone">
							</div>
							<div class="form-group col-md-12">
								
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="form-group col-md-12">
								<button class="btn btn-danger">Send</button>
								
							</div>
						</form>
						
					</div>
				</div>
			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.6685349125855!2d96.10346321414437!3d16.892283688377095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ca07fda0c5%3A0x6ee36307ad9d4804!2z4YCG4YCx4YC44YCb4YCv4YC2!5e0!3m2!1smy!2smm!4v1582890628724!5m2!1smy!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blood_bank\resources\views/frontend/contact.blade.php ENDPATH**/ ?>