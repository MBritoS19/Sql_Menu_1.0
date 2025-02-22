<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recebe dados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .navbar 
    {
      border-bottom: 1px solid #373737;
    }

    .home 
    {
      background-color: #4C4C4C;
      color: white;
      text-align: center;
    }
  </style>
</head>

<body style="background-color: black;">
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tarefa1\formulario.php">Ingredientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tarefa2\formulario.php">Times</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tarefa3\formulario.php">Venda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tarefa4\formulario.php">Livros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container my-5" >
    <div class=" rounded home">
      <div class="col-sm-8 py-5 mx-auto">
        <h1>Seja bem Vindo!</h1><br>
        <p>Esse é um programa onde você poderá testar a inserção, exclusão e alteração de dados com html, php e SLQ</p>
        <h2>Escolha a opção desejada:</h2>
        <a href="tarefa1\formulario.php" class="btn btn-dark">Ingredientes</a>
        <a href="tarefa2\formulario.php" class="btn btn-dark">Times</a>
        <a href="tarefa3\formulario.php" class="btn btn-dark">Venda</a>
        <a href="tarefa4\formulario.php" class="btn btn-dark">Livros</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>

</html>