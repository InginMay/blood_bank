@extends('backendtemplate')
@section('content')
<div class="container-fluid">
 
  <!-- Page Heading -->
  


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
          @php
          $now =Carbon\Carbon::now();
          $b_date=Carbon\Carbon::parse($row->date);        
          $diff =$b_date->diffInDays($now);
          @endphp
          <tr>
            <td>{{$i++}}</td>
            <td>{{$row->donor->user->name}}</td>
            <td>{{$row->date}}</td>
            <td>
              
              
              @if($now < $b_date)
                <form action="{{route('donated.store')}}" method="post" class="d-inline">
                  @csrf
                  <input type="hidden" name="id" value="{{$row->donor->id}}">
                  <input type="hidden" name="date" value="{{$row->date}}">
                  <button type='submit' class='btn btn-primary'>Confirm</button>
                </form>
              
              @elseif($now > $b_date)

              @if($diff > 3)
                <form method="POST" action="{{route('bookings.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type='submit' class='btn btn-danger' >Cancel</button>
                </form>
              @else
                <form action="{{route('donated.store')}}" method="post" class="d-inline">
                  @csrf
                  <input type="hidden" name="id" value="{{$row->donor->id}}">
                  <input type="hidden" name="date" value="{{$row->date}}">
                  <button type='submit' class='btn btn-primary' >Confirm</button>
                </form>
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