<?php
    $mes= array();
    $mes=[
        'Janeiro', 'Fevereiro','Março',
        'Abril', 'Maio','Junho',
        'Julho', 'Agosto','Setembro',
        'Outubro','Novembro', 'Dezembro'
        ];
    //IMPRIME AS CHAVES E O VALOR
    echo 'CHAVE E VALOR <br>';
    foreach ($mes as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }
    echo '<hr>';
    echo 'VAR_DUMP';
    var_dump($mes);
    echo '<hr>';
    echo 'Posiçao 1 do array MÊS <br>';
    echo $mes[1];
    echo '<hr>';

    
