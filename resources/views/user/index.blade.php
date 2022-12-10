@extends('layouts.app')
@section('content')
<div class="card card-body border-0 shadow mb-3">
  <div class="container mt-3">
      <div class="row">
        <div class="col-md-12">
          @if(Session::has("success"))
          <div class="alert alert-success">
            {{Session::get("success")}}
          </div>
        @endif

        <h5>List of Users</h5>
        
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
        
          <tbody>
            @php
                $i =0;
            @endphp
            @foreach ($users as $user)
            <tr>
              <th scope="row">{{++$i}}</th>
              <td>{{ucfirst($user->name)}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->mobile_number}}</td>
              <td>{{$user->is_admin?"admin":"user"}}</td>
              <td>
                {{-- <form method="post" action="{{route('user.confirm-delete',$user->id)}}">
                  {{-- <form action="{{route('user.delete',$user->id)}}" method="post"> --}}
                  {{-- @csrf
                  <button class="btn btn-danger" id="document" type="submit" >Delete    
                  </button>
                
                </form> --}} 
                <form method="POST" action="{{ route('user.delete', $user->id) }}">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection


