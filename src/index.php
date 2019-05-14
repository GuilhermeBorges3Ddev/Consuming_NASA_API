<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CSS Proprietário -->
    <link rel="stylesheet" href="css/style.css">
    <title>BD2 - NASA Planets</title>
  </head>

  <body>
    <nav className="navbar navbar-expand-lg navbar-light bg-light">
        <a className="navbar-brand" href="/">Navbar</a>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul className="navbar-nav mr-auto">
            <li className="nav-item active">
              <a className="nav-link" href="/">Home <span className="sr-only">(página atual)</span></a>
        </li>
        <li className="nav-item">
            <a className="nav-link" href="/">Sobre</a>
        </li>
        <li className="nav-item dropdown">
            <a className="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opções de Serviços
            </a>
            <div className="dropdown-menu" aria-labelledby="navbarDropdown">
            <a className="dropdown-item" href="/">Busca de Planetas</a>
            <a className="dropdown-item" href="/">Emissão de Relatórios</a>
            <div className="dropdown-divider"></div>
            <a className="dropdown-item" href="/">Das especificidades da API Planets</a>
            </div>
        </li>
        <li className="nav-item">
            <a className="nav-link disabled" href="/">API.Planets.NASA</a>
         </li>
        </ul>
        <form className="form-inline my-2 my-lg-0">
        <input className="form-control mr-sm-2" type="search" placeholder="Nome do planeta" aria-label="input-search" />
        <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
    </nav>
    <h1 className="d-flex justify-content-center align-items-center mt-5">
        NASA Consumer Applicattion has his 'Home'... Welcome!
    </h1>

    echo("Test php!!");

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>