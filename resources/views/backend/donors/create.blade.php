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
			      <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter Name">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter Email">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="phone" id="inputPhone" placeholder="Enter Phone">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputNrc" class="col-sm-2 col-form-label">NRC</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nrc" id="inputNrc" placeholder="Enter NRC">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			    <div class="col-sm-10">
			      <textarea type="Address" class="form-control" name="" id="inputAddress" placeholder="Address...."></textarea>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputBloodType" class="col-sm-2 col-form-label">Blood Type</label>
			    <div class="col-sm-10">
			      <select class="form-control">
			      	<option>--Select One--</option>
			      	<option>...</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
			    <div class="col-sm-10">
			      <select class="form-control">
			      	<option>--Select One--</option>
			      	<option>...</option>
			      </select>
			    </div>
			  </div>

			  <div class="form-group row">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
	                <input type="radio" name="gender" id="inputGender" value="male">
	                <label for="male">Male</label>
	                <input type="radio" name="gender" id="inputGender" value="female">
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