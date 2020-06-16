@extends('layouts.auth')
<nav>
    <ul class="home-nav-ul">
        <li class="home-nav-li"><a class="active" href="{{ url('login') }}">Domov</a></li>
        <li class="home-nav-li"><a href="#news">O súťaži</a></li>
        <li class="home-nav-li"><a href="#contact">Aktuálny ročník</a></li>
        <li class="home-nav-li"><a href="#about">Študijné materiiály</a></li>
        <li class= "home-nav-li"style="float:right"><a class="active" href="#homepage-sys-login">Prihlásiť sa do systému</a></li>
      </ul>
</nav>     
<div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px; font-weight:900;">Súťaž pre stredoškolákov</h1>
      <p class= "homepage-subheadline">Otestujte svoje vedomosti <br>z informatiky</p>
      <button><a href ="#homepage-sys-login">Chcem začať</a></button>
    </div>
</div>

@section('content')
<div class="container">
    <div class="row homepage-row-second-phunnel">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Meno</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Heslo</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Potvrdiť heslo</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrovať
                                </button>
                                <a href="{{ url('login') }}">Už mám konto, prihlásiť</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
