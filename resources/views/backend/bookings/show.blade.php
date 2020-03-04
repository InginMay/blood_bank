@extends('backendtemplate');
@section('content')
<h2>Booking Detail</h2>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			@foreach($bookings as $row)
			<label>Name : {{$row->donor->user->name}}</label>
			<br>
			Date : {{$booking->date}}
		</div>
	</div>
</div>
@endsection