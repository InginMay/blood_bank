@extends('backendtemplate')
@section('content')
<div class="container-fluid">
 
    <!-- Page Heading -->
    @php

    $now =Carbon\Carbon::now();
    foreach($bookings as $row){
    $b_date=Carbon\Carbon::parse($row->date);
   

    $diff =$b_date->diffInDays($now);
      
  }
  

  @endphp
   
   
    <h1 class="h3 mb-2 text-gray-800">Booking Tables</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
       
            <tbody>
              @php $i=1; @endphp
              @foreach($bookings as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->donor_id}}</td>
                  <td>{{$row->date}}</td>
                  <td>
                    

                      @if($now < $b_date)
                        <button type='button' class='btn btn-primary'>Confirm</button>
                         
                        
                        @elseif($now > $b_date)

                         @if($diff > 3)
                         <button type='button' class='btn btn-danger' >Cancel</button>
                         @else

                          <button type='button' class='btn btn-primary' >Confirm</button>
                        @endif
                      @endif
                        

                    <a href="{{route('bookings.show',$row->id)}}" class="btn btn-info">
                    <i class="fas fa-info-circle"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection