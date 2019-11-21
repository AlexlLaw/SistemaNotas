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
                <form action="..\conexao\inserirP.php" method="POST" name="formulario">
                    <div class="card card-header">
     Cadastro de Professores
     </div>
    <div class="row">
        <div class="col col-sm-6">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <label>Idade</label>
            <input type="number" class="form-control" name="idade">

            <div class="row">
            <div class="col col-sm-6">
            <label>telefone</label>
            <input type="number" class="form-control" name="tel">
</div>
            <div class="col col-sm-6">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
            </div>
            </div>
           
            <label>Disciplina</label>
            <input type="text" class="form-control" name="disciplina">

            <label>Sexo :</label>
   <div class="container">
   <label>Masculino : </label>
   <input type="radio" name="sexo" value="masculino">
   <label>Femenino : </label>
   <input type="radio" name="sexo" value="feminino">
</div>    
</div>
        <div class="col col-sm-6">
    
            <label>CPF</label>
            <input type="number" class="form-control" name="cpf">
            <div class="row">
            <div class="col col-sm-6">
            <label>RG</label>
            <input type="number" class="form-control" name="rg">
</div>
            <div class="col col-sm-6">
            <label>CEP</label>
            <input type="number" class="form-control" name="cep">
            </div>
            </div>
            <label>Endereço</label>
            <input type="text" class="form-control" name="end">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro">
            <label>Data de nascimento : </label>
            <input type="date" class="form-control" name="dataNas">
</div>
    </div>
    <hr>
    <input type="submit" class="btn btn-primary" value="Cadastrar" onsubmit=" validar()">
</form>
           </div>
                
        </div>
    </main>
</div>
        <script src="/Js/dash.js"></script>
        <script src="/frameworks/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/5fce06b07b.js"></script>
    
        <script>
        function validar(){
            if(document.formulario.nome.value==""){
                alert("Por favor, preencha todos os campos");
      
    }

        console.log("teste")

        
        
        ?>
    </body>
</html>

