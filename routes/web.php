<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Simao";
    $idade = 25;

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => "Programador"]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});