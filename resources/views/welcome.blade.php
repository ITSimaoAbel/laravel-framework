@extends('layouts.main')
@section('title', 'SIGEFA')

@section('content')

    @foreach($products as $products)
        <p>{{ $products->name }} -- {{ $products->description }}</p>
    @endforeach

        <!-- Comentario html - nao aconselhado -->
         {{-- Comentario com blade --}}

@endsection