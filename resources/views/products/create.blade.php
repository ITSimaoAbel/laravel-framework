@extends('layouts.main')

@section('title', 'Cadastrar Medicamento')

@section('content')

<div id="producto-create-container" class="col-md-4 offset-md-4">
    <h2>Cadastrar Medicamento</h2>
    <form action="/products" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome do Medicamento</label>
            <input type="text" class="form-control" name="name" id="name"> 
        </div>
        <div class="form-group">
            <label for="">Descricao</label>
            <textarea type="text" class="form-control" name="description" id="Descricao"></textarea> 
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" class="form-control" name="category" id="Categoria"> 
        </div>
        <div class="form-group">
            <label for="">Preco</label>
            <input type="text" class="form-control" name="price" id="Preco"> 
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" name="quantity" id="Quantidade" > 
        </div>
        <div class="form-group">
            <label for="">Data de expiracao</label>
            <input type="date" class="form-control" name="expiration_date" id="nome" > 
        </div>
        <input type="submit" class="btn btn-primary m-2" value="Cadastrar">
    </form>
</div>

@endsection