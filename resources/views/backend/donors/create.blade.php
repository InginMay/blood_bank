@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Donor Create Form</h2>
	<div class="row">
		<div class="col-12">
			<form>
			  <div class="form-group row">
			    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName" value="{{old('name')}}" placeholder="Enter Name">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" value="{{old('email')}}" placeholder="Enter Email">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="inputPhone" value="{{old('phone')}}" placeholder="Enter Phone">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputNrc" class="col-sm-2 col-form-label">NRC</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" id="inputNrc" value="{{old('nrc')}}" placeholder="Enter NRC">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			    <div class="col-sm-10">
			      <textarea type="Address" class="form-control @error('address') is-invalid @enderror" name="address" id="inputAddress" value="{{old('address')}}" placeholder="Address...."></textarea>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputBloodType" class="col-sm-2 col-form-label">Blood Type</label>
			    <div class="col-sm-10">
			      <select class="form-control @error('blood') is-invalid @enderror" name="blood">
			      	<option>--Select One--</option>
			      	@foreach ($blood_types as $row)
			      	<option value="{{old('blood')}}">{{$row->name}}</option>
			      	@endforeach
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
			    <div class="col-sm-10">
			      <select class="form-control @error('township') is-invalid @enderror" name="township">
			      	<option>--Select One--</option>
			      	@foreach ($townships as $row1)
			      	<option value="{{old('township')}}">{{$row1->name}}</option>
			      	@endforeach
			      </select>
			    </div>
			  </div>

			  <div class="form-group row">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
	                <input type="radio" name="gender" id="inputGender" value="male {{old('gender')}}" class="@error('gender') is-invalid @enderror">
	                <label for="male">Male</label>
	                <input type="radio" name="gender" id="inputGender" value="female {{old('gender')}}" class="@error('gender') is-invalid @enderror">
	                <label for="female">Female</label>
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