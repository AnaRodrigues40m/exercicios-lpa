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

        Route::get('verificar/idade', function (Request $request){
            $idade = $request->input('idade');
            if($idade >= 18){
                return "maior de idade";
            } else {
                return "menor de idade";
            }
        });

        Route::get('verificar/par', function(Request $request){
            $numero = $request->input('numero');
            if($numero % 2 == 0){
                return 'par';
            } else {
                return 'impar';
            }

        });

        Route::get('exemplo/condição1', function (Request $request) {
            $idade = $request->input('idade');
            $retorno = "";
            if($idade >=18){
                $retorno = "Maior de idade";
            }
            else{
               $retorno = "Menor de idade";
            }
            return $retorno;
           });

           Route::get('verificar/idade2', function(Request $request){
                  $idade = $request->input('idade');

                  if($idade >= 18){
                   return "maior de idade";
                  } else {
                   return "menor de idade";
                  }
           });

           Route::get('verificar/par3', function(Request $request){
             $numero = $request->input('numero');

             if($numero % 2 == 0){
               return 'par';
             } else {
               return 'impar';
             }
           });

           Route::get('enviar/numero4', function(Request $request){
               $numero = $request->input('numero');
               
               if($numero > 10){
                   return "maior que 10";
               } else {
                   return "menor que 10";
               }
           });

           Route::get('verificar/calor5', function(Request $request){
                  $calor = $request->input('calor');

                  if($calor > 30){
                   return "Está quente";
                  } else {
                    return "Não está quente";
                  }
           });

           Route::get('verificar/maior6', function(Request $request){
               $numeroUm = $request->input('numeroUm');
               $numeroDois = $request->input('numeroDois');

               if($numeroUm > $numeroDois){
                   return "maior";
               } else { 
                  return "menor";
               }
           });

           Route::get('informar/divisao7', function(Request $request){
               $numero = $request->input('numero');

               if($numero % 3 == 0){
                   return "divisivel por 3";
               } else {
                   return "não divisivel por 3";
               }
           });

           Route::get("determine/numero8" , function(Request $request){
               $numero = $request-> input ('numero');
              
               if($numero > 0){
               return "é positivo";
               }
               if($numero < 0){
               return "é negativo";
               } else {
           return "é zero";
               }
           });
               
           
           Route::get('determinar/divisão9', function(Request $request){
               $numero = $request->input ('numero');

               if($numero % 9 == 0){
                   return "é divisivel por 9";
               } else {
                   return "não é divisivel por 9";
               }
           });

           Route::get('determinar/multiplo10', function(Request $request){
               $numero = $request->input ('numero');

               if($numero % 7 == 0){
                   return "é multiplo de 7";
               } else {
                    return "não é multiplo de 7";
               }
           });

           Route::get('determinar/idade11', function(Request $request){
               $numero = $request->input ('numero');

               if($numero >= 12){
                   return "Você é um Adolecente";
               } else {
                   return "Você é uma criança";
               }
           });

           Route::get('determinar/par12', function(Request $request){
               $numero = $request->input('numero');

                if($numero % 2 == 0){
                   return "Este numero é par";
                } else {
                   return "Este numero é impar";
                }
           });

           Route::get('determinar/positivo13', function(Request $request){
                 $numero = $request->input('numero');

                 if($numero % 2 != 0){
                   if($numero > 0){
                       return "e positivo e impar";
                     }
                 }

               });

               Route::get('detremine/maior14', function(Request $request){
                   $numero = $request->input('numero');

                   if($numero >= 100){
                       return "maior que 100";
                   } else {
                       return "menor que 100";
                   }
               });

               Route::get('determine/divisor15', function(Request $request){
                   $numero = $request->input('numero');

                   if($numero % 7 == 0){
                       return "é divisivel por 7";
                   } else {
                       return "não é divisivel por 7";
                   }
               });

               Route::get('determinar/usuario16', function(Request $request){
                   $usuario = $request->input('usuario');

                   if($usuario == "alice"){
                         return "Olá Alice";
                   }
               });

               Route::get('verificar/carteira17', function(Request $request){
                   $carteira =$request->input('carteira');
                   $idade =$request->input('idade');

                   if($idade >= 18){
                       if($carteira == "tem carteira"){
                           return "pode dirigir";
                       } else{
                           return "não pode dirigir";
                       }                             
                   }
                   
               });

               Route::get('verificar/numero', function(Request $request){
                   $numeroUm =$request->input('numeroUm');
                   $numeroDois =$request->input('numeroDois');
                      
                   if ($numeroUm > $numeroDois ){
                        return "O primeiro numero é maior";
                   } else {
                       return "O segundo numero é maior";
                   }
               });

               Route::get("verificar/nome", function(Request $request){
                   $nome =$request->input('nome');
                   $idade = $request->input('idade');

               
                       if ($idade >= 18){
                       return "Você é maior de idade " . $nome;
               }else{
               return "Você não é maior de idade " . $nome;
               }
       
               });

               Route::get('verificar/zero', function(Request $request){
                     $numeroUm =$request->input('numeroUm');
                     $numeroDois =$request->input('numeroDois');

                     if ($numeroUm == 0){
                       return "não é possível efetuar a divisão pois o primeiro número é zero";
                     }
                     if ($numeroDois == 0){
                       return "não é possível efetuar a divisão pois o segundo número é zero";
                     }
                    return $resultado =$numeroUm / $numeroDois;
               });

               Route::get('verificar/divisao', function(Request $request){
                      $numeroUm =$request->input('numeroUm');
                      $numeroDois =$request->input('numeroDois');
                     $resultado= $numeroUm * $numeroDois;

                     if($resultado > 100){
                       return "O resultado é maior que 100";
                     } else {
                       return "O resultado é menor que 100";
                     }
               });

               Route::get('verificar/soma', function(Request $request){
                   $numeroUm =$request->input('numeroUm');
                   $numeroDois =$request->input('numeroDois');
                   $resultado= $numeroUm + $numeroDois;
                   

                   if($resultado % 2==0){
                       return $numeroUm * $numeroDois;
                   } else {
                       return $numeroUm / $numeroDois;
                   }
               });

       

        




