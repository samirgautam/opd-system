@extends('layouts.app')

@section('content')

<section class="vh-100" style="background-color: rgb(121, 174, 203);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">{{Auth::user()->name}}</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Senior Journalist</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div>
                    <p class="small text-muted mb-1">Mobile Number :</p>
                    <p class="mb-0">{{Auth::user()->mobile_number}}</p>

                    <p class="small text-muted mb-1">Email :</p>
                    <p class="mb-0">{{Auth::user()->email}}</p>
                    <p class="small text-muted mb-1">Password :</p>
                    <p class="mb-0">********</p>
                    <p class="small text-muted mb-1">Role :</p>
                    <p class="mb-0">{{Auth::user()->is_admin?"admin":"user"}}</p>


                  </div>

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection