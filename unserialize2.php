<?php


if (!isset($argv[1]) || !is_file($argv[1])) {
    echo 'Favor informar o Arquivo Serializado';
    die;
}

if (!isset($argv[2])) {
    echo 'Favor informar o Arquivo Saída';
    die;
}


$a = file_get_contents($argv[1]);
$arrayResultado = unserialize($a);
$conteudoPrint = print_r($arrayResultado,true);


file_put_contents($argv[2],$conteudoPrint);


