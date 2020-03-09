@extends('frontendtemplate')
@section('content')

<div class="container-fluid mt-2">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('image/111.jpg')}}" style="width: 100%;height: 500px;">
      </div>
    </div>
  </div>

<div class="container-fluid my-3 mt-5">
  <div class="row ">
    <div class="col-md-4 offset-1 card shadow">
        
        <div class="row">

          <div class="col-12">
            <h2 align="center">Donor Detail</h2>
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
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Donated Date</th>
                <th>Donate Date</th>
              </tr>
            </thead>
            
            <tbody>
              @if(Auth::user()->donor->donateds)
              @php $i=1;

               @endphp

                @foreach($user->donor->donateds as $row)
                  @php
                    $now=Carbon\Carbon::now();
                    $db_date=Carbon\Carbon::parse($row->date);
                    $date1=date('d-m-Y',strtotime($db_date));
                    $date_string=date('l-M-Y',strtotime($db_date));
                    $month=$db_date->addMonths(4);
                    $month_date=date('d-m-Y',strtotime($month));
                    $date_string1=date('l-M-Y',strtotime($month));
                  @endphp
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$date1}} ( {{$date_string}} )</td>
                    <td>{{$month_date}} ( {{$date_string1}} ) </td>
                  </tr>
                @endforeach
              @php $i++; @endphp
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
  
</div>  
@endsection