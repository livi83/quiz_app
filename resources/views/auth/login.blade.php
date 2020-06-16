
@extends('layouts.auth')

<nav>
    <ul class="home-nav-ul">
        <li><a class="active" href="{{ url('login') }}">Domov</a></li>
        <li><a href="#news">O súťaži</a></li>
        <li><a href="#contact">Aktuálny ročník</a></li>
        <li><a href="#about">Študijné materiiály</a></li>
        <li style="float:right"><a class="active" href="#homepage-sys-login">Prihlásiť sa do systému</a></li>
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

    <div class="row homepage-row-second-phunnel">
        
        <div class="col-md-8 col-md-offset-2">
            <h2 style="font-weight:800;text-align:center;padding-bottom:1%;">Lorem ipsum dolor sit amet</h2>
            <p style="font-size:18px; text-align:center; line-height:22px;padding-bottom:1%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue non sapien id interdum. Curabitur et metus non erat dignissim molestie non aliquet mauris. Aenean aliquam consequat mi, ut pulvinar eros luctus nec. Curabitur bibendum augue in felis ultricies viverra. Maecenas lacus massa, feugiat vel purus id, vulputate condimentum turpis. Aliquam erat volutpat. Sed sollicitudin lacus quis urna euismod lobortis.</p>
            <div class="panel panel-default">
                
                <div class="panel-heading" id="homepage-sys-login">Prihláste sa</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Problém s inputom:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Heslo</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Prihlásiť
                                </button>
                                
                                <a href="{{ route('auth.register') }}"
                                        class="btn btn-default">
                                    Vytvoriť účet
                                </a>

                                <br>
                                <a href="{{ route('auth.password.reset') }}">Zabudli ste heslo?</a>
                                <br>
                                <br>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        
    </div>
    </div>
    
    
@endsection
