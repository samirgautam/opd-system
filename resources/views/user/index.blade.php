@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        @if(Session::has("success"))
          <div class="alert alert-success">
            {{Session::get("success")}}
          </div>
        @endif
        
        {{-- <div class="card card-body border-0 shadow mb-3"> --}}
        
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
        
        {{-- </div> --}}
        </div>
</body>
@endsection


