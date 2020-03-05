@extends('frontendtemplate')
@section('content')
  

<div class="container-fluid my-3">
  <div class="row">
  <div class="col-md-4 offset-4 card shadow" style="background-color: #FAD7E5;">
      
      <div class="row">
        <div class="col-12 my-5">
          <h2>Donor Detail</h2>
          <h5 class="mx-4 my-3">Name:   {{$user->name}}</h5>
          <h5 class="mx-4 my-3">Email:  {{$user->email}}</h5>
          <h5 class="mx-4 my-3">Phone:  {{$user->donor->phone}}</h5>
          <h5 class="mx-4 my-3">NRC:    {{$user->donor->nrc}}</h5>
          <h5 class="mx-4 my-3">Address:    {{$user->donor->address}}</h5>
          <h5 class="mx-4 my-3">Blood Type:
            @if($user->donor->bloodtype)   
            {{$user->donor->bloodtype->name}}
          @else
                Unknow Blood Type
          @endif</h5>
          <h5 class="mx-4 my-3">Township:   {{$user->donor->townships->name}}</h5>
          <h5 class="mx-4 my-3">Gender:    {{$user->donor->gender}}</h5>
          
        </div>
      </div>
    </div>
    
  </div>
</div>





@endsection