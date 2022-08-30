<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="js/script.js"></script>

    

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Algum titulo</h1>
        <img src="/img/banner.jpeg" alt="Banner">

        @if(10 > 15)
        <p> A Condicao e true</p>
        @endif
        <p>{{ $nome}}</p>

        @if($nome == "Pedro")
        <p>O nome e Edson</p>
        @elseif($nome == "Edson")
        <p>O Nome e {{$nome}} e ele tem {{ $idade}} anos e trabalha como {{$profissao}}</p>

        @else
        <p>O Nome nao e  Edson</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i]}} - {{$i}}</p>
            @if($i == 2)
            <p>o i e 2 </p>
            @endif
        @endfor

        @foreach($nomes as $nome)
          <p>{{$loop-> index}} - {{ $nome }}</p>
         

          @endforeach

        @php
            $name = "Joao";
            echo $name;
        @endphp
        {{-- Este e o comentario do blade --}}
    </body>
</html>
