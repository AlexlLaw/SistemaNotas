<?php
include('conexao.php');


$nome = $_POST['nome'];
$idade =$_POST['idade'];
$email =$_POST['email'];
$datan =$_POST['datan'];
$tel =$_POST['tel'];
$sexo = $_POST['sexo'];
//$turno = $_POST['turno'];
//$turma = $_POST['turma'];
$pai =$_POST['pai'];
$mae =$_POST['mae'];
$cpf =$_POST['cpf'];
$rg = $_POST['rg'];
$cep =$_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$end =$_POST['end'];
$bairro = $_POST['bairro'];

$sql = "INSERT INTO aluno(nome, idade, email, dataNas,sexo, turno, turma, telefone, pai, mae, cpf, cep, rg,cidade,estado, endereco,bairro)
VALUES('$nome', '$idade', '$email', '$datan','$sexo','$turno', '$turma', '$tel','$pai', '$mae', '$cpf', '$rg', '$cep', '$cidade','$estado', '$end','$bairro')";

$confirmar = $con->query($sql) or die ($con->error);
if($confirmar){


 
  echo '
  <script>

alert("cadastrado com sucesso");

window.history.go(-1);
</script>';

}else{
    $erro[] = $confirmar;
    echo '
    <script>
  
  alert("Cadastro não realizado");
  
  window.history.go(-1);
  </script>';
}

?>