
@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div class="container">
  <form action="{{route('booking')}}"   method="POST">
    @csrf
      <div class="mb-3">
        <label for="name"  class="form-label">Patient Name</label>
        <input type="text" class="form-control" name="name" id="name" required>


      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control"  name="quantity" id="address" required>
      </div>
      <label for="">Please select your gender</label>
      <div class="form-check">

        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Female
        </label>


</div>



     <div class="mb-3">
          <label for="mobile_number"  class="form-label">Mobile Number</label>
          <input type="text" class="form-control" name="discount" id="discount">
        </div>
        <div class="mb-3">
            <label for="date"  class="form-label">Select your date</label>
            <input type="date" class="form-control" name="date" id="date">
          </div>



          <form method="POST" action="{{route('confirm')}}">
            @csrf
            <td><button type="Submit" class="btn btn-danger">Submit</button></td>
          </form>
    </form>
</div>

@endsection
