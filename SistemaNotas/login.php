<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="frameworks/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>
<body  onload="document.querySelector('form').style.display='none'" class="bg-ligth">
    <div class="container " style="width: 30%;display: flex;flex-direction: row; justify-content: center; align-items: center; top:100px;">
        <div class="en card card-body shadow p-3 mb-5 bg-white rounded" style="width: 30%;display: flex;flex-direction: row; justify-content: center;align-items: center; top:300px;">
    <button class="btn btn-primary" onclick="document.querySelector('form').style.display='block' ">entrar</button>
    </div>
    </div>
<div id="d2" class="d2 card card-body shadow p-3 mb-5 bg-white rounded" style="background-image: url('imagens/log.jpg');bottom:20px;height:500px;width:10px;position:absolute;">

</div>
<div id="d1" class="d1 card card-body shadow p-3 mb-5 bg-white rounded" style="bottom:20px;height:500px;width:10px!important;position:absolute;opacity: '0.5'; left:98%;">
<div class="container-fluid ">
<span onclick="document.querySelector('.d1').style.display='none';document.querySelector('.d2').style.display='none'" >X</span>
  <hr>
<form  >
<div class="card card-header" style="justify-content:center; text-align:center;">
    the Notes
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">lembrar senha</label>

  </div>
 <div class="container" style="justify-content:center; text-align:center; top:80px;">
 <a class="btn btn-primary" href="Home.php">Entrar</a>
 </div>
</form>
<hr>
<a href="" style="left:20px;"> Esqueci minha senha</a>
</div>
</div>

    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $(".d2").animate({
      left: '200px',
      
      height: '500px',
      width: '400px'
    });
  });
});
$(document).ready(function(){
  $("button").click(function(){
    $(".d1").animate({
      left: '600px',
      height: '500px',
      width: '400px'
    });
  });
});
</script> 
</html>