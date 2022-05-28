@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
   <img src="{{ asset('images') }}/logos.png" width="300px"/>
</div>
<br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><center><font style="color:#ff7a40ff"><b>{{ __('Sistem Akademik Almahiira') }}</b></font></center></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-10 offset-md-0" >

                            <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">

                            <div class="col-md-10">
                                <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }} <i class="fa fa-sign-in"></i>
                                </button>

                        </div>
                        <hr>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
