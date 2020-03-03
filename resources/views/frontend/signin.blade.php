@extends('frontendtemplate')
@section('content')
<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow">
			
			<div class="row">
				<div class="col-12">
					<form action="" method="POST">
						<h1 align="center" class="my-3">SignIn</h1>
						
						<div class="form-group col-md-12">
							<label for="inputEmail">E-Mail Address</label>
							<input type="email" class="form-control" id="inputEmail">
						</div>
						<div class="form-group col-md-12">
							<label for="inputPassword">Password</label>
							<input type="password" class="form-control" id="inputPassword">
						</div>
						<div class="form-group col-md-12">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-danger">Login</button>
							<a href="{{route('signin')}}">Forgot Your Password?</a>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>
	
</div>
@endsection