@extends('layouts.main')

@section('title', 'Editando: '. $event->title )

@section('content')


    <div class="col-md-6 offset-md-3" id="event-create-container">
      <h1>Editando: {{ $event->title }}</h1>
      <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="image">Imagem Evento:</label>
          <input type="file" class="form-control-file" id="image" name="image"/>
          <img class="image-preview" src="/img/events/{{ $event->image }}"/>
        </div>
        <div class="form-group">
          <label for="title">Evento:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}"/>
        </div>
        <div class="form-group">
          <label for="date">Data do Evento:</label>
          <input type="date" class="form-control" id="date" name="date" placeholder="Data do Evento" value="{{ $event->date->format('Y-m-d') }}"/>
        </div>
        <div class="form-group">
          <label for="city">Cidade:</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento"  value="{{ $event->city }}"/>
        </div>
        <div class="form-group">
          <label for="title">Descrição:</label>
          <textarea class="form-control" id="description" name="description" placeholder="Descrição do Evento">{{ $event->description }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="private">O evento é privado?</label>
          <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
          </select>
        </div>
        <div class="form-group">
          <label for="private">Adicione itens de infraestrutura:</label>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Cerveja"> Cerveja
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="OpenFood"> OpenFood
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes"> Brindes
          </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento"/>
      </form>
    </div>


@endsection
