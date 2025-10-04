<?php
$servidor = 'localhost';
$bd = 'incentivams';
$user = 'root';
$senha = '24036M@aria';

try {
    $verify = new PDO('mysql:host=' .$servidor. ';dbname=' . $bd, $user, $senha);
    $verify->exec("SET time_zone = '-03:00'"); //Define a data e horário corretos
}
catch (PDOException $erro) {
    echo 'Houve um erro na conexão: ' .$erro->getMessage();
}

