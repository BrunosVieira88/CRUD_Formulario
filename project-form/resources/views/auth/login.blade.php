@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between  organiza" style="background-color: rgb(207, 207, 207);border: 1px solid black;">
    <div class="row me-5">
        <a href="{{ route('register') }}" class="nav-link">Cadastre-se</a>
    </div>    
</div>
<section class="container mt-5">
    <div class="row ">
        <div class="card">

            <h2 class="text-center">Login</h2>
            <form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <label for="E-mail"  style="margin-left:25%;">Email:</label>
                <input id="email" type="email" class="form-control " style="width: 50%;margin-left:25%;" name="email" value="{{ old('email') }}" required autofocus>
                <span>
                    <label for="password"  style="margin-left:25%;">password:</label>
                    <input id="password" type="password" class="form-control " style="width: 50%;margin-left:25%;" name="password" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block" style="width: 50%;margin-left:25%;color:red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </span>
                <div class="checkbox" style="width: 50%;margin-left:25%;">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 50%;margin-left:25%;">
                    Login
                </button>
                <br>
                <a class="btn btn-link" style="width: 50%;margin-left:25%;" href="{{ route('password.request') }}">
                    Esqueceu sua Senha?
                </a>
            </form>
        </div>
    </div>
</section>

@endsection
