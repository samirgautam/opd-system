@extends('layouts.app')
@section('content')
<body>
  
      <form method="POST" action="{{route('doctor.update',$doctor->id)}}">
        @csrf
        <div class = "row">
          <div class = "col-sm">
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="name" value="{{$doctor->name}}" ><br>

            <label for="mobile_number">Mobile number:</label><br>
            <input type="text" name="mobile_number" placeholder="mobile number" value="{{$doctor->mobile_number}}" ><br>

            <label for="description">description:</label><br>
            <input type="text" name="description" placeholder="description" value="{{$doctor->description}}" ><br>


            <button type="submit" class="btn-primary">update</button>

          </div>
        </div>
      </form>
      @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

</body>
@endsection

