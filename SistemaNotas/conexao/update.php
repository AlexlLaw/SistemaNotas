<?php
include_once('conexao.php');
$id = $_GET['id'];

$nome = $_GET['nome'];

$sql = "UPDATE `aluno` SET `nome` = '$nome',  `senha` = '$senha' WHERE id= '$id'";


$confimar = $con->query($sql) or die ($con->error);
    if($confimar){
        echo"editado com sucesso";

    }else{
        $erro[]=$confirmar;
   
    }


?>