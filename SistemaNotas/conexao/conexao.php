<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistemanotas";

$con = new mysqli($servidor,$usuario,$senha,$banco);

if($con -> connect_errno){
    echo"falha na conexão : (".$con -> connect_errno.")".$con -> connect_errno;
}else{
  
}

?>