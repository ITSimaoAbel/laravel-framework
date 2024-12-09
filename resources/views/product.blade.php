@extends('layouts.main')

@section('title', 'Product')

@section('content')

    @if($id != null)
        <p>Exibindo producto id: {{ $id }}</p>
    @endif
@endsection