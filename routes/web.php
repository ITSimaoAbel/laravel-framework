<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Simao";
    $idade = 25;

    $arr = [10,20,30,40,50];

    $nomes = ["Simao", "Mateus", "Paulo", "Maria"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});