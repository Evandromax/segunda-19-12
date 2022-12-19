<?php

/* 4 metodos de usos
get--->exibe dados em tela
post--->cadastro de dados
put--->altero dados
delete--->deleto dados*/

if(isset($_POST['submit'])) 
{

    include_once('config.php'); 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios_(nome,email,endereco,telefone) values ('$nome', '$email', '$endereco', '$telefone')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>

<style>
      /* body {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
       } */

       body {
        display: flex;
        margin: auto;
        align-items: center;
        justify-content: center;
        margin-top: 250px;
        background-color: #231156;
}

.imagem img{
    position: absolute;
    top: 10%;
    left: 35%;
    width: 30%;

}


            .box {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: red;
                    }

/*
                    .field{
            border: 1px solid #fff;
            padding: 30px;
            align-items: center;
            margin: 20px;
            display: inline;
            border-radius: 36px 35px 35px 10px;
            -webkit-border-radius: 36px 35px 35px 10px;
            -moz-border-radius: 36px 35px 35px 10px;
        }

*/

.field{
        border: 1px solid #fff;
        padding: 20px;
        align-items: center;
        display: inline;
        margin: auto;
        border-radius: 36px 35px 35px 10px;
        -webkit-border-radius: 36px 35px 35px 10px;
        -moz-border-radius: 36px 35px 35px 10px;
        }

.legend {
        color: #fff;
        text-align: center;
        display: flex;
        }

.cadastrar {
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 0;
        display: flex;
        color: #fff;
        font-size: 29px;
        }

.inputUser {
        border-radius: 10px;
            ;
        }

.inputtext{
        color: #fff;
        }

.submit-button {
        justify-content: center;
        border-radius: 15px;
        display: flex;
        padding: 5px;
        }

            .form { 
                    background-color: red;
                    color: #fff;
                    align-items: center;
                    width: 178px;
                    height: 250px;
                    padding: 25px;
                    border-radius: 25px;
                    }

    </style>


<!--NO BODY ORGANIZA OS ELEMENTOS E OBJETOS PARA VISUALIZAR O CONTEÚDO DA PÁGINA-->
<body>

<div class="imagem">
            <img src="img/pobreflix.png">
        </div>

    <fieldset class="field">
        <legend class="legend">Dados do Cliente</legend>
        <label class="cadastrar">Cadastre-se</label>
            <div class="form">
                <form action="index.php" method="POST">
                <div>
                <label>Nome</label>
                <br/>
            <input type="text" name="nome">
    </div>
        <br/>
      
<div id="div">
    <label>E-mail</label>
    <br/>
    <input type="email" name="email">
</div>
<br/>
<div>
    <label>Endereço</label>
    <br/>
    <input type="endereco" name="endereco">
</div>
<br/>
<div>
    <label>Telefone</label>
    <br/>
    <input type="number" name="telefone">
</div>
<br/>

<button type="submit" name="submit">Enviar</button>
</form>
</fieldset>
    </div>   
</body>
</html>