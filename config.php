<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword - 'Px14lhpn@';
$dbName ='form';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

if($conexao->coonect_errno)
{
    echo"Erro";
}

else "Conexão efetuada com sucesso"


?>