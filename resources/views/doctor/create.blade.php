@extends('layouts.app')
@section('content')
<body>
  <div class="container">
    <div class ="row">
      <div class="col-md-8 offset-2">
        <div class="card card-body shadow">

        <form method="POST" action="{{route('doctor.save')}}">
        @csrf
        <div class = "row">
          <div class = "col-sm">
            <label for="name">Name:</label><br>
            <input type="text"  name="name" placeholder="name"><br>

            <label for="mobile_number">Mobile number:</label><br>
            <input type="text" name="mobile_number" placeholder="mobile number"><br>

            <label for="description">Description:</label><br>
            <input type="text" name="description" placeholder="description"><br><br>


            <button type="submit" class="btn btn-primary">update</button>

          </div>
        </div>
      </form>
      @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

        </div>
      </div>
    </div>
  </div>
  
     
</body>
@endsection