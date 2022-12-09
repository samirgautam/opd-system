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
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
  </div>
</div>
@endsection


