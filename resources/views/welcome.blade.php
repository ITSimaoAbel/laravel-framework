@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Hello Blade</h1>
        <h2>Renovado</h2>
        <img src="/img/imagem1.png" alt="Alguma imagem">
        @if(10 > 5)
            <p>A condicao e true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome e Pedro</p>
        @elseif($nome == "Simao")
        <p>O nome e {{ $nome }} e ele tem {{ $idade }} anos, e ele trabalha como {{ $profissao }}</p>
        @else
        <p>O nome nao e Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i e 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "Maria";
            echo $name; 
        @endphp

        <!-- Comentario html - nao aconselhado -->
         {{-- Comentario com blade --}}

@endsection