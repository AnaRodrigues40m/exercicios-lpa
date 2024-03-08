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

    Route::get('senai', function(Request $request){
        $primeiroNombre = $request -> input('notaNome');
        $suaIdade = $request -> input('notaIdade');
        $resultado = "Meu nome é " . $primeiroNombre . ", tenho" . $suaIdade . " anos";
         return $resultado;
    });

    Route::get('nome/usuario', function(Request $request){
        $eduardo = $request -> input('nome');
        $numero = $request -> intup('idade');
        $cidade = $request -> intup('cidade');

        return 'Meu nome é ' .  $eduardo . ', nasci no ano de '. $numero. ' na cidade '. $cidade ;
    });

    Route::get(' Calculadora', function (Request $request){

        $primeiroNumero = $request->input('numeroUm');

        $segundoNumero = $request->input('numeroDois');

        $resultado = $primeiroNumero + $segundoNumero;

        return $resultado;

    });