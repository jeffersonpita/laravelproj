@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1>Eventos - Laravel Project</h1>
          @if(10>11)
            <p>true</p>
          @endif

          @if($nome=="Jefferson")
            é Jefferson
          @elseif($nome=="Pedro")
            é pedro
          @else

          @endif

          <br><br>
          @for($i=0;$i<count($arr);$i++)
            <!-- <p>{{$arr[$i]}}</p> -->
          @endfor

          <br><br>
          @php
          $j = "asd";
          #print($j);
          @endphp
      </div>
    </div>
  </div>

@endsection
