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
        $primeiroNombre = $request -> input('primeiroNome');
        $suaIdade = $request -> input('notaIdade');
        $resultado = "Meu nome é " . $primeiroNombre . ", tenho" . $suaIdade . " anos";
         return $resultado;
    });

    Route::get('nome/usuario', function(Request $request){
        $eduardo = $request ->input('nome');
        $numero = $request ->input('idade');
        $cidade = $request ->input('cidade');

        return 'Meu nome é ' .  $eduardo . ', nasci no ano de '. $numero. ' na cidade '. $cidade ;
    });

    Route::get('Calculadora', function (Request $request){

        $primeiroNumero = $request->input('numeroUm');

        $segundoNumero = $request->input('numeroDois');

        $resultado = $primeiroNumero + $segundoNumero;

        return $resultado;

    });

    Route::get('receber/divisão', function(Request $request){
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $resultado = $primeiroNumero / $segundoNumero;
        Return $resultado;
    });

    Route::get('multiplicação', function (request $request) {
        $numeroUm = $request->input('primeiroNumero');
        $numeroDois = $request->input('segundoNumero');
        $resultado = $numeroUm * $numeroDois;
        return $resultado;
    });

    Route::get('media', function (request $request) {
        $numeroUm = $request->input('primeiroNumero');
        $numeroDois = $request->input('segundoNumero');
        $numerotres = $request->input('terceiroNumero');
        $numeroQuatro = $request->input('quartoNumero');
        $numeroCinco = $request->input('quintoNumero');
        $resultado = ($numeroUm + $numeroDois + $numerotres + $numeroQuatro + $numeroCinco) / 5;
        return $resultado;
    });

    Route::get('questão9', function (request $request) {
        $numeroUm = $request->input('primeiroNumero');
        $numeroDois = $request->input('segundoNumero');
        $resultado = $numeroDois / $numeroUm;
        return $resultado;
    });

    Route::get('dobro', function (request $request) {
        $numero = $request->input('dobro');
        $dobro = $numero * 2;
        $resultado = "O dobro do " . $numero . " é igual a: " . $dobro;
        return $resultado;
    });

    Route::get('retangulo', function (request $request) {
        $base = $request->input('base');
        $altura = $request->input('altura');
        $resultado = "A area do retangulo é " . $base * $altura;
        return $resultado;
    });

    Route::get('porcentagem', function (request $request) {
        $valorOriginal = $request->input('valor');
        $desconto = $request->input ('desconto');
        $porcentagem = $valorOriginal / 100;
        $resultado = $valorOriginal - ($porcentagem * $desconto);  
        return $resultado;
    });

    Route::get('salario13', function (request $request) {
        $salario = $request->input('valor');
        $aumento = $request->input ('aumentoPercentual');
        $porcentagem = $salario / 100;
        $resultado = $salario . " " . $aumento . "% " . $porcentagem * $aumento + $salario;  
        return $resultado;
    });
    Route::get('porcentagem14', function (request $request) {
        $valorCompra = $request->input('valor');
        $pontos = $valorCompra / 10;
        $resultado = "Quantidade de pontos recebidos é: " . $pontos;
        return $resultado;
    });

    Route::get('comissão15', function (request $request) {
        $valorTotal = $request->input('valor');
        $desconto = 5;
        $porcentagem = $valorTotal / 100;
        $resultado = $valorTotal + ($porcentagem * $desconto);  
        return $resultado;
    });

    Route::get('dias16', function (request $request) {
        $dias = $request->input('dias');
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        $resultado = "dias: " . $dias . ", horas: " . $horas . ", minutos: " . $minutos . ", segundos: " . $segundos;
        return $resultado;
    });

    Route::get('compras17', function (request $request) {
        $precoProduto = $request->input('valorProduto');
        $quantidade = $request->input('quantidadeComprada');
        $resultado = "valor total: " . $precoProduto * $quantidade;
        return $resultado;
        });