@extends('backendtemplate')
@section('content')
<div class="container-fluid py-5">
	<div class="container-fluid my-3">
		<div class="row">
			<div class="col-md-6 offset-2 card shadow">
				
				<div class="row">
					<div class="col-12 my-5">
						<h2>Booking Detail</h2>
						<h5 class="mx-4 my-3">Name:   {{$booking->donor->user->name}}</h5>
						<h5 class="mx-4 my-3">Email:   {{$booking->donor->user->email}}</h5>
						<h5 class="mx-4 my-3">Phone:   {{$booking->donor->phone}}</h5>
						 <h5 class="mx-4 my-3">DOB:   {{$booking->donor->dob}}</h5>
						<h5 class="mx-4 my-3">NRC:   {{$booking->donor->nrc}}</h5>
						<h5 class="mx-4 my-3">Address:   {{$booking->donor->address}}</h5>
						<h5 class="mx-4 my-3">Blood Type:
            			@if($booking->donor->bloodtype)   
            				{{$booking->donor->bloodtype->name}}
          				@else
                			Unknow Blood Type
          				@endif</h5>
						<h5 class="mx-4 my-3">Township:   {{$booking->donor->townships->name}}</h5>
						<h5 class="mx-4 my-3">Gender:   {{$booking->donor->gender}}</h5>

						<h5 class="mx-4 my-3">Date:  {{$booking->date}}</h5>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection

