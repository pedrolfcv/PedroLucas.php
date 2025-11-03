<?php
echo 'Ooooooou <br>';
echo '<hr>';
echo 'Aloooo <br>';
echo '<hr>';
echo '<p style="font-family: Arial,sans-serif">qualquer coisa</p>';

$nome = "Danei";
$sobrenome = "Silva";
$nomeCompleto = $nome . "  " . $sobrenome;
echo '<hr>';
echo ($nomeCompleto);
var_dump($nomeCompleto);
$cpf = "111.111.111-11";
var_dump($cpf);
echo '<hr>';

if ($cpf == "111.111.111-11" or $cpf == "111.111.111-10") {
    echo 'Esse cpf ta esquisito ';
}else{
    echo 'com esse cpf mais R$14 você entra no cinema na sexta  ';
}
echo '<hr>';
function soma($a, $b)
{
    return $a + $b;
}


echo soma(1,2);
