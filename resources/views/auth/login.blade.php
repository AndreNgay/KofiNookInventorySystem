@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="login-page-left">
                <img src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/271940893_114450207785307_7250851304198467840_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a2f6c7&_nc_eui2=AeGp7qjvKQVWK1cy5VERvDrlSFnVme1skAJIWdWZ7WyQAoqqOgSo3GpQKcN1lAWCEncK596aR6ZXTA8L7nVjL2nv&_nc_ohc=Et7nmXKLpjwAX-TWQBo&_nc_ht=scontent.fmnl17-1.fna&oh=00_AfAoiN5bpDPfBDlDKEFjCspRGc5jmwOvCAViMdz-xhBIJA&oe=651F3DF2"
                    alt="" class="icon">
                <h1 class="semi-bold">Login to Your Account</h1>
          
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input id="username" type="text" class="regular form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                            placeholder="Username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input id="password" type="password"
                            class="regular form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <button type="submit" class="sign-in-btn regular">
                            Login
                        </button>

                        <a class="btn btn-link regular" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 gradient-background">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="container">
                <h1 class="bold">New Here?</h1>
                <p class="medium">Get in touch with the owner if you don't have an account yet.</p>
            </div>
        </div>
    </div>
</div>
</div>




@endsection
