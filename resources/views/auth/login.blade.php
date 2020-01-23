@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container mx-auto items-center pt-24 pb-20">
    <div class="flex justify-center flex-wrap">
      <h2 class="font-bold text-center font-mono pt-20 text-3xl absolute sm:text-l">Login</h2>
    </div>
  </div>
  <div class="container flex justify-center mx-auto mt-16">
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
      @csrf
        <div class="mb-4">
          <label class="block font-mono text-gray-700 text-sm font-bold mb-2" for="email">
            {{ __('E-Mail Address') }}
          </label>
          <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email">
          @error('email')
            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
              <span class="block sm:inline">{{ $message }}</span><br>  
            </div>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block font-mono text-gray-700 text-sm font-bold mb-2" for="password">
            {{ __('Password') }}
          </label>
          <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">
          @error('password')
            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
              <span class="block sm:inline">{{ $message }}</span><br>  
            </div>
          @enderror
        </div>
        <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-3 px-4 rounded shadow outline-none" type="submit">
          {{ __('Login') }}
        </button>
      </form>
      <p class="text-center text-gray-500 text-xs">
        &copy;2020 KKM UIN Malang 49
      </p>
    </div>
  </div>

@endsection
