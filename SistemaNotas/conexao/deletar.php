<?php
include('conexao.php');


$cpf=$_GET['cpf'];

$sql = "DELETE FROM professor WHERE cpf='$cpf'";

$confirmar = $con->query($sql) or die ($con->error);
if($confirmar){
    
    header('location:..\relatorioNotas\listaProfessor.php');
    echo'<script>alert("deletado com sucesso")</script>';

}else{
    $erro[] = $confirmar;
    $_SESSION['msg']='erro ao deletar';
    header('location:..\relatorioNotas\listaProfessor.php');
}

?>