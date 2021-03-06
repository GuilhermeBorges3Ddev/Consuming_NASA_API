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
            <a class="nav-link text-danger" href="./listarDoscente.php">
              Professor
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../prova/listarProvas.php">
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
      <h1 class="d-flex justify-content-center text-primary">
          Listagem de Professores
      </h1>
      <br />
      <!-- Test of pie graph -->
      <div class="row mx-2">
        <div id="chart_div" class="d-flex w-100" style="height: 500px;"></div>
      </div>
      <table class="table table-striped border-dark text-white text-center bg-primary mt-5">
        <thead>
          <th>#</th>
          <th>Nome</th>
          <th>E-mail</th>
        </thead>
        <tbody>
          <?php
            $conn= new PDO("pgsql:host=localhost;port=5432;dbname=bd_saap;user=postgres;password=root");
            $stmt = $conn->prepare("SELECT * FROM tb_professor");
            $stmt->execute();
            $tableData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($tableData as $line){
              echo'<tr>';
                echo'<td>'. $line["id_professor"] .'</td>';
                echo'<td>'. $line['nome_professor']. '</td>';
                echo'<td>'. $line['email_professor'] .'</td>';
              echo'<tr>';
            }
            $conn = null;
          ?>    
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <!-- Google Histogram -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBarColors);

      function drawBarColors() {
        var data = google.visualization.arrayToDataTable([
          ['City', 'N1', 'N2'],
          ['Prof 1', 81, 80],
          ['Prof 2', 37, 94],
          ['Prof 3', 26, 96],
          ['Prof 4', 20, 53],
          ['Prof 5', 55, 70]
        ]);

        var options = {
          title: 'Desempenhos das Turmas dos Professores',
          chartArea: {width: '50%'},
          colors: ['#b0120a', '#ffab91'],
          hAxis: {
            title: 'Notas',
            minValue: 0
          },
          vAxis: {
            title: 'Professores'
          }
        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </body>
</html>