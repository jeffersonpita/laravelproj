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
      <p class="event-participants"><span><ion-icon name="people-outline">&nbsp;</ion></span>{{ count($event->users)}} Participantes</p>
      <p class="event-owner"><span><ion-icon name="star-outline">&nbsp;</ion></span>{{ $eventOwner['name']}}</p>
      @if($hasUserJoined==false)
      <form action="/events/join/{{ $event->id }}" method="POST">
        @csrf
        <a class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit()">Confirmar Presença</a>
      </form>
      @else
        <p style="margin-top: 30px; margin-bottom: 30px;">Você já está participando do evento.</p>
      @endif
      @if($event->items!=null)
      <h3>O evento conta com:</h3>
      <ul id="items-list">

        @foreach($event->items as $item)
        <li><span><ion-icon name="play-outline"></ion-icon></span>{{ $item }}</li>
        @endforeach

      </ul>
      @endif
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
