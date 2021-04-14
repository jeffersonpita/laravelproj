@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
  <div class="row">
    <div id="image-container" class="col-md-6">
      <img src="/img/events/{{ $event->image }}" class="img-fluid"/>
    </div>
    <div id="info-container" class="col-md-6">
      <h1>{{ $event->title }}</h1>
      <p class="event-city"><span><ion-icon name="location-outline">&nbsp;</ion></span>{{ $event->city }}</p>
      <p class="event-participants"><span><ion-icon name="people-outline">&nbsp;</ion></span>X Participants</p>
      <p class="event-owner"><span><ion-icon name="star-outline">&nbsp;</ion></span>Dono do Evento</p>
      <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
      <h3>O evento conta com:</h3>
      <ul id="items-list">
        @foreach($event->items as $item)
        <li><span><ion-icon name="play-outline"></ion-icon></span>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
    <div id="description-container" class="col-md-12">
      <h3>Sobre o evento:</h3>
      <p class="event-description">
        {{ $event->description }}
      </p>
    </div>
  </div>
</div>

@endsection
