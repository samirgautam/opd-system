@extends('layouts.app')
@section('content')
  <div class="container">

    <div class="card card-body shadow">
      @if($errors->any()) {{ $errors }} @endif
      <h5 class="card-text mb-3">Booking Form</h5>
      <form action="{{ route('updatebooking',$list->id) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ $list->name }}">
          <div class="form-text">
              @if ($errors->has('name'))
                {{ $errors->first() }}
              @endif
          </div>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" class="form-control" value="{{ $list->address }}">
          <div class="form-text">
            @if ($errors->has('address'))
              {{ $errors }}
            @endif
        </div>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" name="age" id="age" class="form-control" value="{{ $list->age }}">
          <div class="form-text">
            @if ($errors->has('name'))
              {{ $errors }}
            @endif
        </div>
        </div>
        <div class="form-group">
          <label for="sex">Gender</label>
          <select class="form-select" name="sex" >
            <option selected></option>
            <option value="male" {{ $list->sex =='male'?'selected':'' }}>Male</option>
            <option value="female" {{ $list->sex =='female'?'selected':'' }}>Female</option>
          </select>
          <div class="form-text">
            @if ($errors->has('name'))
              {{ $errors }}
            @endif
        </div>
        </div>
        <div class="form-group">
          <label for="mobile_num">Mobile Number</label>
          <input type="text" name="mobile_num" id="mobile_num" class="form-control" value="{{ $list->mobile_num }}">
          <div class="form-text">
            @if ($errors->has('name'))
              {{ $errors }}
            @endif
        </div>
        </div>
        <div class="form-group mt-3">
          <label for="is_paid">Payment Status</label>&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="checkbox" value="1" id="is_paid" name="is_paid" {{ $list->is_paid =="1"?'checked':'' }}>
            <label class="form-check-label" for="is_paid">
              Paid
            </label>
            <div class="form-text">
              @if ($errors->has('name'))
                {{ $errors }}
              @endif
          </div>
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="btn btn-primary">Edit Booking</button>
        </div>
      </form>
    </div>
  </div>
@endsection