@extends('backendtemplate')
@section('content')
<div class="container-fluid">
 
    <!-- Page Heading -->
    <a href="{{route('donors.create')}}" class="btn btn-danger float-right">Add New</a>
    <h1 class="h3 mb-2 text-gray-800">Donors Table</h1>
    
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
                  <td>{{$row->user['name']}}</td>
                  <td>{{$row->user['email']}}</td>
                  <td>{{$row->phone}}</td>
                  @if($row->bloodtype)
                  <td>{{$row->bloodtype->name}}</td>
                  @else
                  <td>Unknow Blood Type</td>
                  @endif
                  <td>{{$row->gender}}</td>
                  <td>
                    <button class="btn btn-info detail" data-id="{{$row->id}}">
                    <i class="fas fa-info-circle"></i></button>
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

  <!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Donor Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
<<<<<<< HEAD

=======
>>>>>>> a8ff2514187f0300393226849881ce7d69d9840e
        <p class="d-inline-block mx-3">Name: </p><p class="name d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Email: </p><p class="email d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Phone: </p><p class="phone d-inline-block"></p><br>
        <p class="d-inline-block mx-3">NRC: </p><p class="nrc d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Address: </p><p class="address d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Blood Type: </p><p class="bloodtype d-inline-block"></p><br>
        <p class="d-inline-block mx-3">DOB: </p><p class="dob d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Gender: </p><p class="gender d-inline-block"></p><br>
        <p class="d-inline-block mx-3">Township: </p><p class="township d-inline-block"></p><br>
<<<<<<< HEAD

=======
>>>>>>> a8ff2514187f0300393226849881ce7d69d9840e
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('tbody').on('click','.detail',function(){
        var id=$(this).data('id');
        // alert(id);
        $.get("donors/"+id, function(res){
          console.log(res);
          $('.name').text(res.user.name);
          $('.email').text(res.user.email);
          $('.phone').text(res.phone);
          $('.nrc').text(res.nrc);
          $('.address').text(res.address);
          $('.bloodtype').text(res.bloodtype.name);
          $('.dob').text(res.dob);
          $('.gender').text(res.gender);
          $('.township').text(res.townships.name);
          $('#detailModal').modal('show');
        })
      })
    })
  </script>
@endsection