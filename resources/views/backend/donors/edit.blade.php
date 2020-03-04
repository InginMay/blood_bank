@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Donor Edit Form</h2>
	<div class="row">
		<div class="col-12">
			<form action="{{route('donors.update',$donor->user->id)}}" method="post">
			@csrf
			@method('PUT')
			  <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
			    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="inputName" value="{{$donor->user->name}}" placeholder="Enter Name">
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
			      <input type="email" class="form-control" name="email" id="inputEmail" value="{{$donor->user->email}}" placeholder="Enter Email">
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
			      <input type="number" class="form-control" name="phone" id="inputPhone" value="{{$donor->phone}}" placeholder="Enter Phone">
			      	@if ($errors->has('phone'))
			      	<div class="alert alert-danger">
		                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
		            </div>
		            @endif
			    </div>
			  </div>
			  <div class="form-group row {{ $errors->has('dob') ? ' has-error' : '' }}">
			    <label for="inputDob" class="col-sm-2 col-form-label">Dob</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" name="dob" id="inputDob" value="{{$donor->dob}}">
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
			      <input type="text" class="form-control" name="nrc" id="inputNrc" value="{{$donor->nrc}}" placeholder="Enter NRC">
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
			      <textarea type="Address" class="form-control" name="address" id="inputAddress" placeholder="Address....">
			      	{{$donor->address}}
			      </textarea>
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
			      <select class="form-control" name="blood_type_id">
			      	<option>--Select One--</option>
			      	@foreach ($blood_types as $row)
			      	<option value="{{$row->id}}"@if($donor->blood_type_id == $row->id) selected @endif>{{$row->name}}</option>
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
			      	<option value="{{$row1->id}}" @if($donor->township_id == $row1->id) selected @endif>{{$row1->name}}</option>
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

	                <input type="radio" name="gender" id="inputGender" value="male" {{ old('type', $donor->gender) === 'male' ? 'checked' : '' }}>
	                <label for="male">Male</label>

	                <input type="radio" name="gender" id="inputGender" value="female"  {{ old('type', $donor->gender) === 'female' ? 'checked' : '' }}>

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
			      <button type="submit" class="btn btn-danger">Update</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
@endsection