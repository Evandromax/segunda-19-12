<?php

//abaixo servidor, com PORTA (local de hospedagem), USUÁRIO, SENHA, SCHEMA

$conexao = new mysqli("localhost:3306", "root", "", "pobreflix");

if($conexao->connect_errno){
    echo "Tem alguma coisa errada";
}
else {
    echo " ";
}

?>