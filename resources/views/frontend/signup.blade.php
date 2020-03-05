@extends('frontendtemplate')
@section('content')


 @if ($errors->any())
    				<div class="alert alert-danger">
        				<ul>
            				@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            				@endforeach
        				</ul>
    				</div>
				@endif 
<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow">
			<div class="row">
				<div class="col-12">
					@if (session('status'))
    				<div class="alert alert-success">
        				{{ session('status') }}
    				</div>
    				@endif
					<form method="POST" action="{{route('donors.store')}}">
						@csrf
						<h1 align="center" class="my-3">Donor Registration</h1>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="name">
							</div>
							<div class="form-group col-md-6">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Enter Email" name="email">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputPhone">Password</label>
								<input type="password" class="form-control" id="inputPhone" placeholder="Enter Password" name="password">
							</div>
							<div class="form-group col-md-6">
								<label for="inputNRC">Phone</label>
								<input type="text" class="form-control" id="input phone" placeholder="Enter Phone" name="phone">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputAddress">Address</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="Address...." name="address">
							</div>
							<div class="form-group col-md-6">
								<label for="inputTownship">Township</label>
								
								<select class="form-control" name="township_id">
									<option>--Select Township--</option>
									@foreach($townships as $row)
									<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputDOB">Date Of Birth</label>
								<input type="date" class="form-control" id="inputDOB" name="dob">
							</div>
							<div class="form-group col-md-6">
								<label for="inputNRC">NRC</label>
								<br>
								<input type="text" name="nrc" class="form-control" id="inputnrc" placeholder="Enter NRC">
						
							</div>
						</div>
						<div class="form-group col-md-6">
								<label for="inputGender">Gender:</label>
								<br>
								<input type="radio" name="gender" id="inputGender" value="male">
								<label for="male">Male</label>
								<input type="radio" name="gender" id="inputGender" value="female">
								<label for="female">Female</label>
							</div>
						<button type="submit" class="btn btn-danger my-3">Sign Up</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection