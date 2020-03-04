@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Booking Create Form</h2>
	<div class="row">
		<div class="col-12">
			<form action="{{route('bookings.store')}}" method="post">
				@csrf
			  <div class="form-group row">
				<label class="col-form-label">Choose Donor</label>
				<select name="donor" class="form-control">
					@foreach($donors as $row)
					<option value="{{$row->id}}">{{$row->user->name}}</option>
					@endforeach
				</select>
			</div>

			  <div class="form-group row">
			    <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
			    <div class="col-sm-12">
			      <input type="date" class="form-control" name="date" id="inputDate">
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