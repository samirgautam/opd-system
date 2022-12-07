
@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">S.NO.</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Address</th>
        <th scope="col">Contact No.</th>
        <th scope="col">Payment</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection
