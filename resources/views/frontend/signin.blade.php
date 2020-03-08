@extends('frontendtemplate')
@section('content')

<div class="container-fluid mt-4">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('image/signinme.jpg')}}" style="width: 500px;height: 450px;margin-left: 300px;">
      </div>
    </div>
  </div>

<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow">
			
			<div class="row">
				<div class="col-12">
					<form action="{{ route('login') }}" method="POST">
						@csrf
						<h1 align="center" class="my-3">SignIn</h1>
						
						<div class="form-group col-md-12">
							<label for="inputEmail">E-Mail Address</label>
							 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email..." required autocomplete="email" autofocus>
							@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group col-md-12">
							<label for="inputPassword">Password</label>
							 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password..." required autocomplete="current-password">
							 @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

						</div>
						<div class="form-group col-md-12">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-danger" type="submit">Login</button>
							<a href="{{route('signin')}}">Forgot Your Password?</a>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>
	
</div>
@endsection