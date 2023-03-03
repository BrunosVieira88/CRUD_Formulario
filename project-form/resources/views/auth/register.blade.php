@extends('layouts.app')

@section('content')

<section class="container mt-5">
    <div class="row ">
        <div class="card">

            <h2 class="text-center">Cadastro</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label" style="margin-left:25%;">Nome</label>
                        <input id="name" type="text" class="form-control" style="width: 50%;margin-left:25%;" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
               
           

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" style="margin-left:25%;" class="col-md-4 control-label">E-Mail </label>

                   
                        <input id="email" type="email" style="width: 50%;margin-left:25%;" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
             
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" style="margin-left:25%;" class="col-md-4 control-label">Senha</label>

                 
                        <input id="password" type="password" style="width: 50%;margin-left:25%;" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block" style="margin-left:25%;color:red;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                   
                </div>

                <div class="form-group">
                    <label for="password-confirm" style="margin-left:25%;" class="col-md-4 control-label">Confirmar senha </label>

                 
                        <input id="password-confirm"  type="password" style="margin-left:25%;width: 50%;" style="width: 50%;margin-left:25%;" class="form-control" name="password_confirmation" required>
              
                </div>

                <div class="form-group mt-3">
              
                        <button type="submit" style="width: 50%;margin-left:25%;" class="btn btn-primary">
                            Register
                        </button>
                 
                </div>
            </form>
        </div>
    </div>
    <a href="{{ url('/home') }}" style="color:white;text-decoration:none;"><button class="btn btn-primary mt-2"  style="width: 25%" >Home</button></a>
</section>
@endsection
