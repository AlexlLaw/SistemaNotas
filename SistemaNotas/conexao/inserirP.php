<?php
include('conexao.php');


$nome = $_POST['nome'];
$idade =$_POST['idade'];
$email =$_POST['email'];
$datan =$_POST['datan'];
$tel =$_POST['tel'];
$sexo = $_POST['sexo'];
$disciplina = $_POST['disciplina'];
$cpf =$_POST['cpf'];
$rg = $_POST['rg'];
$cep =$_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$end =$_POST['end'];
$bairro = $_POST['bairro'];

$sql = "INSERT INTO professor(nome, idade, email, dataNas,sexo,disciplina,  telefone, cpf, cep, rg, endereco,bairro)
VALUES('$nome', '$idade', '$email', '$datan','$sexo','$disciplina', '$tel', '$cpf', '$cep','$rg','$end','$bairro')";

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