@extends('login.layouts.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Registration Form</h3></div>
                        <div class="card-body">
                            <form action="/register" method="post">
                            @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('name')
                                        is-invalid
                                    @enderror" name="name" id="name" type="text" placeholder="Name" autofocus required value="{{ old('name') }}" />
                                    <label for="name">Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('username')
                                        is-invalid
                                    @enderror"  name="username" id="username" type="text" placeholder="Username" required value="{{ old('username') }}" />
                                    <label for="username">Username</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password" id="password" type="password" placeholder="Create a password" required value="{{ old('password') }}" />
                                            <label for="password">Password</label>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control @error('password_confirmation')
                                                is-invalid
                                            @enderror" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password" required value="{{ old('password_confirmation') }}" />
                                            <label for="password_confirmation">Confirm Password</label>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Register</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small">Already registered?<a class="text-decoration-none" href="/login"> Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection