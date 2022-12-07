@extends('layouts.app')
@section('content')
<body>
  <div class ="container">

  <a href="{{route('doctor.create')}}" class="btn btn-primary w-25 ms-auto mb-5">New Doctor</a>

  <div class ="card card-body shadow">
  <table class="table text-center table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile number</th>
      <th scope="col">Description</th>
      <th scole="col" class="text-center">Action</th>
    </tr>
  </thead>
  @php
  $i=0;
  @endphp
  @foreach($doctors as $doctor)
  <tbody>
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$doctor->name}}</td>
      <td>{{$doctor->mobile_number}}</td>
      <td>{{$doctor->description}}</td>
      <form action ="{{route('doctor.edit',$doctor->id)}}">
        @csrf
        <td>
          <button type="submit" class="btn btn-primary">Edit</button>
        </td>
      </form>
      <form method="post" action ="{{route('doctor.delete',$doctor->id)}}">
        @csrf
        <td>
          <button type="submit" class="btn btn-danger">Delete</button>
        </td>
      </form>
    </tr>      
  </tbody>
  @endforeach
</table>

  </div>

  </div>


      @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

</body>
@endsection
