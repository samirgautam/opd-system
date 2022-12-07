@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-1 mt-4">
        <div class="card card-body shadow">
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
          @endif
          <h5>Booking Form</h5>
          <form action="" method="post">
            @csrf
            <div class="mb-3">
              <label for="name">Patient's Name</label>
              <input type="text" name="name" id="name" class="form-control" required value="{{ $booking->name }}">
              <small class="form-text"></small>
            </div>
            <div class="mb-3">
              <label for="address">Patient's Address</label>
              <input type="text" name="address" id="address" class="form-control" required value="{{ $booking->address }}">
              <small class="form-text"></small>
            </div>
            <div class="mb-3">
              <label for="gender">Patient's Gender</label>
              <select class="form-select" name="gender" id="gender">
                <option ></option>
                <option value="male" @if(old('sex',$booking->sex)=="male") selected @endif>Male</option>
                <option value="female"  @if(old('sex',$booking->sex)=="female") selected @endif>Female</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="age">Patient's Age</label>
              <input type="number" name="age" id="age" class="form-control" required value="{{ $booking->age }}">
              <small class="form-text"></small>
            </div>
            <div class="mb-3">
              <label for="date">Date For Appointment</label>
              <input type="date" name="date" id="date" class="form-control" required value="{{ $booking->date }}">
            </div>
            <div class="mb-3">
              <label for="mobile_num">Patient's Contact</label>
              <input type="mobile_num" name="mobile_num" id="mobile_num" class="form-control" required value="{{ $booking->mobile_num }}">
            </div>
            <div class="mb-3 ">
              <label for="paid">Payment Status</label>
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="paid" name="paid" @if(old('is_paid',$booking->is_paid)=="1") checked @else unchecked @endif>
                <label class="form-check-label" for="paid">
                  Paid
                </label>
              </div>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary rounded-pill py-2">Update Booking</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection