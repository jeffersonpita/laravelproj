@extends('layouts.main')

@section('title', 'TITULO')

@section('content')
      <h1>Products</h1>
      @if($search!="")
        O usuário está buscando por {{ $search }}
      @endif
@endsection
