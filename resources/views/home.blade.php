@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Vítajte!</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            Otázok v našej databáze
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            registrovaných používateľov
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            urobených kvízov
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                            priemerné skóre
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">Urobiť kvíz</a>
        </div>
    </div>
@endsection
