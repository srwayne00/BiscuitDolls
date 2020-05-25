
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset utf-8>
  <title>Index</title>
  <link rel="stylesheet" href="Estilo.css">
</head>

<body class="dev">
  <nav class="navbar navbar-expand-lg navbar-light bg-success" >
    <a class="navbar-brand" href="index.php">Biscuit Dolls</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--area do botão de 3 riscos--> 
    <span class="navbar-toggler-icon"></span> </button><!--botao com 3 riscos-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">Cadastrar-se</a>
        </li>
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projeto</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Personalizar</a>
            <a class="dropdown-item" href="#">Acompanhar Pedido</a>
            <a class="dropdown-item" href="sobre.php">Sobre</a>
          </div>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Protocolo" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div id="header">
    <h1>Seja bem vindo ao espaço "Biscuit Dolls"!! :)</h1>
    <h1>Não repare na bagunça, site esta em construção"!! :)</h1>
  </div>    <!--Até aqui tudo ok, não alterar-->

<form>

  <div class="form-group col-md-4 offset-md-6">  
    <h3>Login</h3>
  </div>

  <div class="form-group col-md-5 offset-md-4">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe seu email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group col-md-5 offset-md-4">
    <label for="exampleInputPassword1"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe a sua senha">
  </div>

  <div class="form-group  col-md-5 offset-md-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
  </div>
  
  <div class="form-group col-md-4 offset-md-6">
  <button type="submit" class="btn btn-success">Entrar</button>
</div>
</form>




 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>

</body>
</html>