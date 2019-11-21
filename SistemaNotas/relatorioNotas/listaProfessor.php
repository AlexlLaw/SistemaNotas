<?php
include_once('../conexao/conexao.php');



$sql = "SELECT * FROM Professor";



$confimar = $con->query($sql) or die ($con->error);
if($confimar){
  
}else{
    echo "0 results";
    $erro[]=$confimar;

};


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
    <body>
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
                        <a href="..\cadastros\professores.php">Cadastro de Professores</a>
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
                                <i class="fas fa-users"></i>
                            <a href="listaProfessor.php">Professores</a>
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
     Relatorio de Professores
     </div>
     <div class="col-md-12">
     <table class="table table-hover">
  <thead>
    <tr>
      <th >id</th>
      <th >Professor</th>
      <th >CPF</th>
      <th >Disciplinas</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $confimar->fetch_assoc()) {
      echo"<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['nome'] . "</td>";
      echo "<td>" . $row['cpf'] . "</td>";
      echo "<td>" . $row['disciplina'] . "</td>";
      echo "<td>";
      echo "<a href=\"..\conexao\deletar.php?cpf=".$row['cpf']."\" ><i class='fas fa-trash-alt'></i></a> /";
   
      echo " <a href='#' data-toggle='modal'  data-target='.bd-example-modal-xl' javascript:alert('dletar')><i  class='fas fa-edit'></i></a>";
      echo "</td>";
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
    
    
    </div>
    </div>
  </div>
</div>






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

