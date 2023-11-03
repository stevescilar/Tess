@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>We are glad you are here!!</h1>
                <h3>Please create an account to enjoy our services</h3>
                <img src="{{ asset('image/click.png')}}" alt="register">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <form action="{{ route('store.user') }}" method="post">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="Fullname">Full Name</label>
                            <input type="text" name="full_name" id="" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="Enter Your Email" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" name="password" placeholder="Enter your password" class="form-control" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
@endsection