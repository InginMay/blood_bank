@extends('frontendtemplate')
@section('content')
<div class="container my-3">
	<div class="row ">
		<div class="col-md-8 offset-2 card shadow">
			
			<div class="row">
				<div class="col-12">
					<form action="{{ route('bookings.store') }}" method="POST">
						@csrf
						<h1 align="center" class="my-3">Booking</h1>
						
						<div class="form-group col-md-12">
							<label class=" col-form-label">Name</label>
							<select name="donor" class="form-control">
								@foreach($donors as $row)
								<option value="{{$row->id}}">{{$row->user->name}}</option>
								@endforeach
							</select>
							@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group col-md-12">
							<label for="inputDate">Date</label>
							 <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="current-date">
							 @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-danger" type="submit">Booking</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>
	
</div>
@endsection