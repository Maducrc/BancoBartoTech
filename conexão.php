<?php
$servidor = 'localhost';
$bd = 'incentivams';
$user = 'root';
$senha = '';

try {
    $verify = new PDO('mysql:host=' .$servidor. ';bdname=' .$bd , $user, $senha);
}
catch (PDOException $erro) {
    echo 'Houve um erro na conexão: ' .$erro->getMessage();
}
?>
