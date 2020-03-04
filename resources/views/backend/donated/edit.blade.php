@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Donated Edit Form</h2>
	<div class="row">
		<div class="col-12">
			<form method="post" action="{{route('donated.update',$donated->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Choose Donor</label>
				<select name="donor" class="form-control">
					@foreach($donors as $row)
					<option value="{{$row->id}}" @if($donated->donor_id==$row->id){{'selected'}} @endif>{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			  <div class="form-group row">
			    <label for="inputName" class="col-sm-12 col-form-label">Date</label>
			    <div class="col-sm-12">
			      <input type="date" class="form-control" name="date" id="inputDate" value="{{$donated->date}}">
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