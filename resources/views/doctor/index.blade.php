@extends('layouts.app')
@section('content')
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Doctor List') }}</div>
                    <table class="table">
                      <thead class="table-dark">
                      <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>

                      </tr>
                      </thead>
                      @php
                      $i=0;
                      @endphp
                      @foreach($doctors as $doctor)
                      <tbody>
                      
                        <th scope="row">{{++$i}}</th>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->mobile_number}}</td>
                        <td>{{$doctor->description}}</td>
                        <form action ="{{route('doctor.edit',$doctor->id)}}">
                          @csrf
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                          </td>
                          
                        </form>
                        
                         <form method="post" action ="{{route('doctor.delete',$doctor->id)}}">
                          @csrf
                          <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </form> 
                         
                        
                      </tr>
                      </tbody>
                      @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>
@endsection
