@extends('backendtemplate');
@section('content')
<h2>Booking Detail</h2>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			Date : {{$booking->date}}
		</div>
	</div>
</div>
@endsection