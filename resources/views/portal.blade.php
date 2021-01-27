@extends('layouts.front')

@section('title', 'Portal Principal')

@section('content')

<br><br>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($eventos as $evento)
            <div class="card col-md-3">
                <img class="img-responsive" src="/img/eventos/{{ $evento->image }}" alt="{{ $evento->titulo }}">
                <div class="card-body">
                    <div class="card-date">10/09/2020</div>
                    <h5 class="card-title">{{ $evento->titulo }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

<!--// end row -->
<br><br><br>


@endsection