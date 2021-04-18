@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

      <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
          <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..." value="{{ $search }}"/>
        </form>
      </div>
        <div id="events-container" class="col-md-12">
          @if($search)
            <h2>Buscando por {{$search}}</h2>
          @else
            <h2>Próximos Eventos</h2>

          @endif
          <p class="subtitle">Veja os eventos dos próximos dias</p>
          <div id="cards-container" class="row">
            @foreach($events as $event)
              <div class="card col-md3">
                <img src="/img/events/{{ $event->image }}"/>
                <div class="card-body">
                  <div class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</div>
                  <div class="card-title">{{ $event->title }}</div>
                  <div class="card-participants">{{ count($event->users) }} participantes</div>
                  <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
              </div>
            @endforeach

          </div>
          @if(count($events)==0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}. <a href="/">Ver todos.</a></p>
          @elif(count($events)==0)
              <p>Não há eventos disponíveis</p>
          @endif
        </div>


@endsection
