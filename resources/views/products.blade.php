@extends('layouts.main')

@section('title', 'Productos')

@section('content')

<h1>Pagina de productos</h1>
@if(%busca != '')
<p>O usuario esta buscando por: {{ $busca }}</p>
@endif


<p>Esta view foi feita para testar as rotas</p>
<a href="/">Voltar para home</a>
@endsection