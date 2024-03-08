<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request){
    $nome = $request -> input('name');
    return $nome;
    });

    Route::get('calcular/media', function(Request $request){
        
        $primeiraEntrada = $request -> input('primeiraNote');
        $segundaEntrada = $request -> input('segundaNota');
    
    
        $media = ($primeiraEntrada + $segundaEntrada)/2;
        return $media;
    });

    Route::get('nome/usuario', function(Request $request){
        $nomeUsuario = $request -> input('primeiroUsuario');
        return $nomeUsuario;
    });