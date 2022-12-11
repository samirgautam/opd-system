
@extends('layouts.app')
@section('content')
<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">S.NO.</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact No.</th>
        <th scope="col">Payment</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i =0;
      @endphp
      @foreach ($booking_list as $list )
      <tr>
        <th scope="row">{{ $i+=1 }}</th>
        <td>{{ $list->name }}</td>
        <td>{{ $list->address }}</td>
        <td>{{ $list->sex }}</td>
        <td>{{ $list->mobile_num }}</td>
        <td>{{ $list->is_paid }}</td>
        <td class="d-flex justify-content-around">
          <a href="{{ route('editbooking',$list->id) }}" class="btn btn-primary">Update</a>
          <form action="{{ route('destroybooking',$list->id) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="#" class="btn btn-success">View</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection
