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
          <h5 class="mx-4 my-3">Date:  {{$booking->date}}</h5>
          
          
        </div>
      </div>
    </div>
    
  </div>
</div>
  </div>
@endsection

