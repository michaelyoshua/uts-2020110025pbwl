@extends('layouts.template')

@section('title', 'Contact Us')

@section('content')

@endsection
@extends('layouts.template')

@section('title', 'Contact Us')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Contact Us</h1>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <form action="" method="POST">
                @csrf
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="full_name">
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
