<?php
//Servidor (com sua porta), nome de usuario no banco, senha, schema
$conexao = new mysqli("localhost:3306", "root", "", "sextafeira");

if($conexao->connect_errno){
    echo "tem alguma coisa errada";
}else {
    echo "tá tudo conectado redondinho";
}

?>