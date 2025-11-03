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

function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('m');
    $ano = date('Y');

    $nomeDosMeses = ['janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

    $nomeDiasDaSemana = ['domingo' , 'segunda-feira' , 'terça-feira' , 'quarta-feira' , 'quinta-feira' , 'sexta-feira' , 'sabado'];

    $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes - 1] . ' de ' . $ano;

    echo 'Dia do mês: ' . $diaMes . '<br>' . 'Dia Semana: ' . $diaSemana . '<br>' . 'Mês: ' . $mes . '<br>' . 'Ano: ' . $ano . '<br>';
    return $dataFormatada;
}
echo dataAtual();

    function media ($n1, $n2, $n3, $n4): void
    {
        echo 'A dua media é';

    }

