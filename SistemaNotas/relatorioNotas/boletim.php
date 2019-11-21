<?php
include_once('../conexao/conexao.php');
$sql = "SELECT * FROM aluno";



$confimar = $con->query($sql) or die ($con->error);
if($confimar){
  
}else{
    echo "0 results";
    $erro[]=$confimar;

}


?>



<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/sidebar.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/boletim.css">
        <link rel="stylesheet" href="../frameworks/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      
        <title>Sistema Dashboad</title>
    </head>
    <body onload="document.querySelector('.mod').style.display='none'">
<div class="flex-dashboard">  
    <sidebar>
       <div class="sidebar-title">
           <img src="" alt="">
           
           <h2>Dashboad</h2>

       </div>
       <div class="menu">
           <ul>
               <li>
                    <i class="fa fa-home"></i>
                   <a href="../Home.php"> Home</a>
               </li>
           </ul>
           <ul>
                <li>
                        <i class="fas fa-user"></i>
                    <a href="..\cadastros\aluno.php"> Cadastro de Alunos</a>
                </li>
            </ul>
            <ul>
                    <li>
                            <i class="fas fa-book"></i>
                        <a href="cadastros\professores.php">Cadastro de Professores</a>
                    </li>
                </ul>
            <ul>
                    <li>
                            <i class="fas fa-cog"></i>
                        <a href="..\cadastros\notas.php">Notas </a>
                    </li>
                </ul>
                <ul>
                        <li>
                                <i class="far fa-comment"></i>
                            <a href="boletim.php">Consultas</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                                <i class="fa fa-users"></i>
                            <a href="..\relatorioNotas\listaProfessor.php">Professores</a>
                        </li>
                    </ul>
                    

       </div>

    </sidebar>
    <main>
        <header>
              <a href="../Home.php"><i class="fa fa-home"></i> Dashboard</a>
              <a href="../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </header>
        <div class="main-content">
                <div class="container shadow p-3 mb-5 bg-white rounded" style="width:900px">
                <form>
                    <div class="card card-header">
     Relatorio de Alunos
     </div>
     <div class="col-md-12">
     <table class="table table-hover">
  <thead>
    <tr>
      <th >CPF</th>
      <th >Aluno</th>
      <th >Turno</th>
      <th >Turma</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $confimar->fetch_assoc()) {
        ?>
   
    <tr>
      <th ><?php echo $row["cpf"];?></th>
      <td><?php echo $row["nome"];?></td>
      <td><?php echo $row["email"];?></td>
      <td>3ºA</td>
      <td><a href="#" onclick="deletar()"><i class="fas fa-trash-alt"></i></a> 
      <a href="#" data-toggle="modal"  data-target=".bd-example-modal-xl"> <i class="fas fa-edit" ></i></a>
      </td>
    </tr>
    <?php
}
?>


    
  </tbody>
</table>
    </main>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="card card-body">
    
    <form>
    <div class="col col-sm-4">

     <label for="disciplina">Disciplina</label>
    <select id="disciplina" class="form-control">
      <option selected>Escolher...</option>
      <option ></option>
      


    </select>
    </div>
    <div class="col col-sm-4">
     <label for="bimestre">Bimestre</label>
    <select id="bimestre" class="form-control">
      <option selected>Escolher...</option>
      <option name="bimestre">1º Bimestre</option>
      <option name="bimestre">2º Bimestre</option>
      <option name="bimestre">3º Bimestre</option>
      <option name="bimestre">4º Bimestre</option>
    </select>
    </div>
    <div class="col col-sm-3">
     <label for="nota1">1º Nota</label>
     <input type="number" class="form-control">

    </div>
    <div class="col col-sm-3">
     <label for="nota2">2º Nota</label>
     <input type="number" class="form-control">

    </div>
    <div class="col col-sm-3">
     <label for="nota3">3º Nota</label>
     <input type="number" class="form-control">

    </div>
    <div class="col col-sm-3">
     <label for="nota4">4º Nota</label>
     <input type="text" class="form-control">

    </div>

    </div>
    <hr>
   
    </form>
   
    <div class="container-fluid" style="overflow:scroll;">
    <table class="table table-hover">
  <thead>
    <tr>
      <th>Disciplina</th>
      <th>1º</th>
      <th>2º</th>
      <th>3º</th>
      <th>4º</th>
      <th>Media</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Portugues</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado</th>
    </tr>
    <tr>
      <th>Matematica</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado<tr>
      <th>Historia</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado<tr>
      <th>Geogradia</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado<tr>
      <th>Biologia</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado<tr>
      <th>Quimica</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovada</th>
      <tr>
      <th>Fisica</th>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
      <th>Aprovado</th>
  </tbody>
</table>
    </div>
    <div class="row">
    <div class="col">
    <input type="button" class="btn btn-success" value="Concluir" style="width:100px!important;margin:10px;">
    <input type="button" class="btn btn-primary" value="Imprimir Boletim" style="width:130px!important; margin:10px;">
    </div>
    <div class="col">
    <input type="button" class="btn btn-primary" value="Editar" style="width:100px!important; margin:10px;">
    <input type="button" class="btn btn-danger" value="Sair" style="width:100px!important; margin:10px;">
    </div>
    </div>
    </div>
  </div>
</div>






        <script src="/Js/dash.js"></script>
        <script src="/frameworks/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/5fce06b07b.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script>
        function deletar(){
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Deseja Realmente Deletar este Aluno ?',
  
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Sim',
  cancelButtonText: 'Não, Cancelar',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Aluno Deletado com sucesso',
      'nome do aluno.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelado',
      'Ação cancelada:)',
      'error'
    )
  }
})
}
        </script>
    </body>
</html>

