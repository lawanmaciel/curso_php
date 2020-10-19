<div class="titulo">Operadores Relacionais</div>

<?php

// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(4 < 23);
// var_dump(1 <= 7);
// var_dump(1 == 1);
// var_dump(1 <> 1);
// var_dump(1 != 1);

var_dump(1 === '1');
var_dump('sim' === 'sim');

echo "<br>";
$idade = 60;

if($idade < 18){
    echo "Menor de idade";
} else if($idade < 65) {
    echo "Adulto";
} else {
    echo "Terceira Idade";
}

