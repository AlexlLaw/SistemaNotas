<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/sidebar.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../frameworks/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
      
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
                    <a href="aluno.php"> Cadastro de Alunos</a>
                </li>
            </ul>
            <ul>
                    <li>
                            <i class="fas fa-book"></i>
                        <a href="professores.php">Cadastro de Professores</a>
                    </li>
                </ul>
            <ul>
                    <li>
                            <i class="fas fa-cog"></i>
                        <a href="notas.php">Notas </a>
                    </li>
                </ul>
                <ul>
                        <li>
                                <i class="far fa-comment"></i>
                            <a href="..\relatorioNotas\boletim.php">Consultas</a>
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
                <div class="container shadow p-3 mb-5 bg-white rounded ">
                <form>
                    <div class="card card-header">
     Lançamento de notas
     </div>
     <div class="row">
         <div class="col col-sm-4">
     <label for="Nome">Nome</label>
    <select id="Nome" class="form-control">
      <option selected>Escolher...</option>
      <option name="nome">Álex</option>
    </select>
    </div>
    <div class="col col-sm-4">
     <label for="disciplina">Disciplina</label>
    <select id="disciplina" class="form-control">
      <option selected>Escolher...</option>
      <option name="disciplina">Matematica</option>

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
     <input type="number" class="form-control">

    </div>

    </div>
    <hr>
    <input type="button" class="btn btn-primary" value="Lançar Notas">
</form>
           </div>
                
        </div>
    </main>
</div>
        <script src="/Js/dash.js"></script>
        <script src="/frameworks/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/5fce06b07b.js"></script>
        <script src=""></script>
    </body>
</html>

