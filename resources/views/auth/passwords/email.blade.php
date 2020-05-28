@extends('layouts.app')

@section('content')
    <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                    <img src="../../../app-assets/images/pages/forgot-password.png" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2 py-1">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">{{ __('Reset Password') }}</h4>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="px-2 mb-0">Please enter your {{ __('E-Mail Address') }} and we'll send you instructions on how to reset your password.</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                                    </div>

                                    <div class="float-md-left d-block mb-1">
                                        <a href="{{Route('login')}}" class="btn btn-outline-primary btn-block px-75 waves-effect waves-light">{{ __('Login') }}</a>
                                    </div>
                                    <div class="float-md-right d-block mb-1">
                                        <button type="submit" class="btn btn-primary btn-block px-75 waves-effect waves-light">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
