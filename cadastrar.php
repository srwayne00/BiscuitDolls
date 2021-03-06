
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset utf-8>
  <title>Cadastrar</title>
  <link rel="stylesheet" href="Estilo.css">
</head>

<body class="dev">
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="index.php">Biscuit Dolls</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--area do botão de 3 riscos--> 
    <span class="navbar-toggler-icon"></span> </button><!--botao com 3 riscos-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrar-se</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projeto</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Personalizar</a>
            <a class="dropdown-item" href="#">Acompanhar Pedido</a>
            <a class="dropdown-item" href="#">Sobre</a>
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
  <div class="form-row">
    <div class="form-group col-md-3 offset-md-3">
      <label for="name"></label>
      <input type="text" class="form-control" id="name" placeholder="Informe seu Primeiro Nome">
    </div>

    <div class="form-group col-md-3 ">
      <label for="Sobrenome"></label>
      <input type="text" class="form-control" id="Sobrenome" placeholder="Informe seu Sobrenome">
    </div>
    <div class="form-group col-md-6 offset-md-3">
      <label for="inputEmail4"></label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Informe seu Email">
    </div>
    <div class="form-group col-md-3 offset-md-3">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Informe uma Senha">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Confirme sua Senha">
    </div>
    <div class="form-group col-md-6 offset-md-3">
      <label for="inputAddress"></label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Informe seu Endereço,n°,bloco">
    </div>
  
    <div class="form-group col-md-3 offset-md-3">
      <label for="inputAddress2"></label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Informe seu Bairro">
    </div>
  
     <div class="form-group col-md-3 ">
      <label for="inputCity"></label>
      <input type="text" class="form-control" id="inputCity" placeholder="Informe sua Cidade">
    </div>
    
    <div class="form-group col-md-2 offset-md-3">
      <label for="inputState"></label>
      <select id="inputState" class="form-control">
      <option selected>Estado</option><option>...</option></select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"></label>
      <input type="text" class="form-control" id="inputZip" placeholder="Informe seu CEP">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"></label>
      <input type="text" class="form-control" id="inputZip" placeholder="Informe o seu Telefone">
    </div>
  </div>
     
<div class="form-group col-md-12 offset-md-3">
  <button type="submit" class="btn btn-success">Cadastrar</button>
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