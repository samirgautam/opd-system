@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create User Profile') }}</div>

                    <form action="{{ route('user.save') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="name" class="name">Name</label>
                                <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="password">
                              
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                <input name="mobile_number" type="mobile_number" class="form-control @error('mobile number') is-invalid @enderror" id="mobile_number"
                                    placeholder="Mobile Number">
                                @error('mobile_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
