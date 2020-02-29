@extends('backendtemplate')
@section('content')
<div class="container-fluid">
 
    <!-- Page Heading -->
    <a href="{{route('donors.create')}}" class="btn btn-danger float-right">Add New</a>
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Type</th>
                <th>Gender</th>
                <th>Action</th>
              </tr>
            </thead>
       
            <tbody>
              @php $i=1; @endphp
              @foreach($donors as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->blood_type->id}}</td>
                  <td>{{$row->gender}}</td>
                  <td>
                    <a href="{{route('donors.show',$row->id)}}" class="btn btn-info">
                    <i class="fas fa-info-circle"></i></a>
                    <a href="{{route('donors.edit',$row->id)}}" class="btn btn-warning">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="POST" action="{{route('donors.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                    </form>
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