@extends('layouts.app')
@section('content')
  <div class="container">

    <div class="card card-body shadow">
      @if($errors->any())
        @foreach ($errors->all() as $err )
          <div class="alert alert-danger">
            {{ $err }}
          </div>
        @endforeach
       @endif
      <h5 class="card-text mb-3">Booking Form</h5>
      <form action="{{ route('savebooking') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" class="form-control" value="{{ old('adddress') }}">
          
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" name="age" id="age" class="form-control" value="{{ old('name') }}">
          
        </div>
        <div class="form-group">
          <label for="sex">Gender</label>
          <select class="form-select" name="sex">
            <option value="male" selected >Male</option>
            <option value="female">Female</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="mobile_num">Mobile Number</label>
          <input type="text" name="mobile_num" id="mobile_num" class="form-control" value="{{ old('name') }}">
          
        </div>
        <div class="form-group mt-3">
          <label for="is_paid">Payment Status</label>&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="checkbox" value="1" id="is_paid" name="is_paid" value="{{ old('name') }}">
            <label class="form-check-label" for="is_paid">
              Paid
            </label>
            
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="btn btn-primary">Book Now</button>
        </div>
      </form>
    </div>
  </div>
@endsection