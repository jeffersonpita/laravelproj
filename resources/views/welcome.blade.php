@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1>Eventos - Laravel Project</h1>
          @foreach($events as $event)
            <p>{{ $event->title }}</p>
          @endforeach
      </div>
    </div>
  </div>

@endsection
