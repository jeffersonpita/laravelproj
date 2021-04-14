@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


    <div class="col-md-6 offset-md-3" id="event-create-container">
      <h1>Crie o seu Evento</h1>
      <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="image">Imagem Evento:</label>
          <input type="file" class="form-control-file" id="image" name="image"/>
        </div>
        <div class="form-group">
          <label for="title">Evento:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento"/>
        </div>
        <div class="form-group">
          <label for="city">Cidade:</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento"/>
        </div>
        <div class="form-group">
          <label for="title">Descrição:</label>
          <textarea class="form-control" id="description" name="description" placeholder="Descrição do Evento">
          </textarea>
        </div>
        <div class="form-group">
          <label for="private">O evento é privado?</label>
          <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento"/>
      </form>
    </div>


@endsection
