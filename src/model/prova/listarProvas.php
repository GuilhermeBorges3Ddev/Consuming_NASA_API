<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!-- CSS Proprietário -->
    <link rel="stylesheet" href="../../css/style.css">
    <title>BD2 - NASA Planets</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
          <img src="../../assets/images/nasa-logo.jpg" alt="NASA Logo" height="50" width="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Sobre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../aluno/listarDiscente.php">
              Aluno
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../professor/listarDoscente.php">
              Professor
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="./listarProvas.php">
              Prova
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../questao/listarQuestoes.php">
              Questão
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../turma/listarTurmas.php">
              Turma
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opções de Serviços
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/">Busca de Planetas</a>
            <a class="dropdown-item" href="/">Emissão de Relatórios</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/">Das especificidades da API Planets</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="/">API.Planets.NASA</a>
         </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Nome do planeta" aria-label="input-search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
    </nav>
    <div class="container mt-5">
      <h1 class="d-flex justify-content-center align-items-center text-white">
          Listagem das Provas
      </h1>
      <table class="table table-striped border-dark text-white text-center bg-primary mt-5">
        <thead>
          <th>#</th>
          <th>Turma</th>
          <th>Professor</th>
          <th>Data da prova</th>
          <th>Valor</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Sistemas de Informação</td>
            <td>Cynthia</td>
            <td>10/10/2019</td>
            <td>100</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sistemas de Informação</td>
            <td>Anderson</td>
            <td>10/05/2019</td>
            <td>60</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sistemas de Informação</td>
            <td>Paula</td>
            <td>23/11/2019</td>
            <td>60</td>
          </tr>    
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.js"></script>
  </body>
</html>