<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <center><img src="data:image/png;base64,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" alt="" height="200" width="200"> </center>
       <center> <h3 class="login-text" ">SELAMAT DATANG DI SCHOOL GALERY</h3>
       <center> <h3 class="login-text" ">SMKN 2 BANJARMASIN</h3>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header bg-primary text-white">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>
                                <a href="/register" class="btn btn-success">Registrasi</a>
                                @if (Route::has('password.request'))
                                    
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
