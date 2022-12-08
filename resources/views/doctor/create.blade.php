@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Doctor Profile') }}</div>

                    <form action="{{ route('doctor.save') }}" method="POST">
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
                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                <input name="mobile_number" type="mobile_number" class="form-control @error('mobile number') is-invalid @enderror" id="mobile_number"
                                    placeholder="Mobile Number">
                                @error('mobile_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input name="description" type="description" class="form-control" id="description"
                                    placeholder="Description">
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
