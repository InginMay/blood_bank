@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Donor Create Form</h2>
	<div class="row">
		<div class="col-12">
			<form action="{{route('donors.store')}}" method="post">
			@csrf
			  <div class="form-group row">
			    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName" value="{{old('name')}}" placeholder="Enter Name">
			      	@if ($errors->has('name'))
			      		<div class="alert alert-danger">
		                	<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
		                </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
			    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" value="{{old('email')}}" placeholder="Enter Email">
			      	@if ($errors->has('email'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
			    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="inputPhone" value="{{old('phone')}}" placeholder="Enter Phone">
			      	@if ($errors->has('phone'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword" value="{{old('password')}}" placeholder="Enter Password">
			      	@if ($errors->has('password'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('dob') ? ' has-error' : '' }}">
			    <label for="inputDob" class="col-sm-2 col-form-label">Dob</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" id="inputDob" value="{{old('dob')}}">
			      	@if ($errors->has('dob'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('dob') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('nrc') ? ' has-error' : '' }}">
			    <label for="inputNrc" class="col-sm-2 col-form-label">NRC</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" id="inputNrc" value="{{old('nrc')}}" placeholder="Enter NRC">
			      	@if ($errors->has('nrc'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('nrc') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('address') ? ' has-error' : '' }}">
			    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			    <div class="col-sm-10">
			      <textarea type="Address" class="form-control @error('address') is-invalid @enderror" name="address" id="inputAddress" value="{{old('address')}}" placeholder="Address...."></textarea>
			      	@if ($errors->has('address'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('blood_type_id') ? ' has-error' : '' }}">
			    <label for="inputBloodType" class="col-sm-2 col-form-label">Blood Type</label>
			    <div class="col-sm-10">
			      <select class="form-control @error('blood') is-invalid @enderror" name="blood_type_id">
			      	<option>--Select One--</option>
			      	@foreach ($blood_types as $row)
			      	<option value="{{$row->id}}">{{$row->name}}</option>
			      	@endforeach
			      </select>
			      	@if ($errors->has('blood_type_id'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('blood_type_id') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('township_id') ? ' has-error' : '' }}">
			    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
			    <div class="col-sm-10">
			      <select class="form-control @error('township') is-invalid @enderror" name="township_id">
			      	<option>--Select One--</option>
			      	@foreach ($townships as $row1)
			      	<option value="{{$row1->id}}">{{$row1->name}}</option>
			      	@endforeach
			      </select>
			      	@if ($errors->has('township_id'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('township_id') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>

			  <div class="form-group row {{ $errors->has('gender') ? ' has-error' : '' }}">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
	                <input type="radio" name="gender" id="inputGender" value="male {{old('gender')}}" class="@error('gender') is-invalid @enderror">
	                <label for="male">Male</label>
	                <input type="radio" name="gender" id="inputGender" value="female {{old('gender')}}" class="@error('gender') is-invalid @enderror">
	                <label for="female">Female</label>
	                @if ($errors->has('gender'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
		            </div>
		            @endif
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
@endsection