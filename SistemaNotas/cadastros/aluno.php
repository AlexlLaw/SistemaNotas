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
                            <a href="../relatorioNotas/boletim.php">Consultas</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                                <i class="fas fa-users"></i>
                            <a href="..\relatorioNotas\listaProfessor.php">Professores</a>
                        </li>
                    </ul>
                    

       </div>

    </sidebar>
    <main>
        <header>
              <a href="Home.php"><i class="fa fa-home"></i> Dashboard</a>
              <a href="../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </header>
        <div class="main-content">
                <div class="container shadow p-3 mb-5 bg-white rounded ">
                <form method="POST" action="..\conexao\inserir.php">
                    <div class="card card-header">
     Cadastro de Alunos
     </div>
    <div class="row">
        <div class="col col-sm-6">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
            <div class="row">
            <div class="col col-sm-6">
            <label>Idade</label>
            <input type="number" class="form-control" name="idade">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
</div>
            <div class="col col-sm-6">
            <label>Data de Nascimento</label>
            <input type="date" class="form-control" name="datan">
            <label>telefone</label>
            <input type="tel" class="form-control" name="tel">
            </div>
            </div>
            <label for="Turma">Turma</label>
    <select id="turma" class="form-control">
      <option selected>Escolher...</option>
      <option name="turma">3ªano</option>

    </select>
            <label for="turno">Turno</label>
    <select id="turno" class="form-control">
      <option selected>Escolher...</option>
      <option name="manha">Manhã</option>
      <option name="tarde">Tarde</option>
      <option name="noite">Noite</option>
      <option name="integral">Integral</option>
   
    </select>
            <label>Sexo :</label>
   <div class="container">
   <label>Masculino : </label>
   <input type="radio" name="sexo" value="masculino">
   <label>Femenino : </label>
   <input type="radio" name="sexo" value="feminino">
</div>    
</div>
        <div class="col col-sm-6">
    
      
            <label>Nome do Pai : </label>
            <input type="text" class="form-control" name="pai">
            <label>Nome da Mãe : </label>
            <input type="text" class="form-control" name="mae">
            
            <div class="row">
            <div class="col col-sm-6">
            <label>CPF</label>
            <input type="number" class="form-control" name="cpf">
            <label>RG</label>
            <input type="number" class="form-control" name="rg">
</div>
            <div class="col col-sm-6">
            <label>CEP</label>
            <input type="number" class="form-control" name="cep">
            </div>
            </div>
            <div class="row">
            <div class="col col-sm-6">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade">
</div>
            <div class="col col-sm-6">
            <label>Estado</label>
            <input type="text" class="form-control" name="estado">
            </div>
            </div>
            <label>Endereço</label>
            <input type="text" class="form-control" name="end">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro">
</div>
    </div>
    <hr>
    <input type="submit" class="btn btn-primary" value="Cadastrar">
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

