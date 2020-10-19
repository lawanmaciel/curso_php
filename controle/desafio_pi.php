<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
$b = "<br>";

if($pi === pi()){
    echo "$b Iguais!";
} else {
    echo "$b Direferentes!";
}

// Operadores Relacional

$piErrado = 2.8;


//  Resposta

echo $b . ($pi - pi());
echo $b . ($pi - $piErrado);

if($pi - pi() <= 0.01){
    echo "$b Praticamente iguais!";
}

if($pi - $piErrado <= 0.01){
    echo "$b Praticamente iguais!";
} else{
    echo "$b Valor errado!!";
}