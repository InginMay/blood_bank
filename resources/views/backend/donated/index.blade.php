@extends('backendtemplate')
@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Donated Tables</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Donated Date</th>
              <th>Donate Date</th>
              <th>Action</th>
            </tr>
          </thead>
          
          <tbody>
            @php $i=1; @endphp
            @foreach($donateds as $row)

            @php

            $now =Carbon\Carbon::now();
            $db_date=Carbon\Carbon::parse($row->date);
            $month=$db_date->addMonths(4);
            $date=date('Y-m-d',strtotime($month));
            @endphp

            <tr>
              <td>{{$i++}}</td>
              <td>{{$row->donor->user->name}}</td>
              <td>{{$row->date}}</td>
              <td>{{$date}}</td>
              <td>
                @if($row->date < $now && $now < $month)
                  <button type="submit" class="btn btn-danger">Deactive</button>
                  @else
                  <button type="submit" class="btn btn-success">Active</button> 
                    
                @endif
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