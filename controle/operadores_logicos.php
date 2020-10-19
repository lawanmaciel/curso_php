<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p><hr>";
$b = "<br>";
var_dump(true);
echo $b;
var_dump(!true); // Not

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p>Exemplo</p><hr>";

$idade = 62;
$sexo = 'F';
$b = '<br>';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $idade";
} else {
    echo 'Vai ter que trabaia caraio';
}