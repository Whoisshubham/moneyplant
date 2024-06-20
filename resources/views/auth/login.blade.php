@extends('frontend.layouts.app')

@section('content')
<style>
    .headerSection {
        position: relative;
    }
</style>
    <div class="row">

        <div class="col-md-6"  style="height:60vh;background-image: url({{ asset('sign.jpg') }}); background-size: cover;">

        </div>
        <div class="col-md-6 d-flex text-align-center justify-content-center align-items-center">


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <div class="">

                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="helper-text" data-error="wrong" data-success="right">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="">

                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            name="password" required>

                        @if ($errors->has('password'))
                            <span class="helper-text" data-error="wrong" data-success="right">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <p>
                    <label>
                        <input type="checkbox" name="remember" class="filled-in " {{ old('remember') ? 'checked' : '' }} />
                        <span>{{ __('Remember Me') }}</span> <a class="indigo-text p-l-15"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </label>
                </p>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-success waves-effect waves-light btn indigo">
                            {{ __('Login') }}
                        </button>


                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
