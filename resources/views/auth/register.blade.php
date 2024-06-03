@extends('layouts.app')

@section('title', 'Register');

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card col-md-4">
                <div class="card-body">
                    <h1 class="text-center">Register</h1>

                    @if (session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif

                    <form action="{{ url('register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
