<?php
    session_start();
    if(!isset($_SESSION['id_login']) || empty($_SESSION['id_login'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Transporte</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" aria-disabled="true">Inícial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar.php" aria-disabled="true">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" tabindex="-1" aria-disabled="true" id="btnCadastrar">Cadastrar</a>
                    
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4" id="totalAlunos">Número total de alunos cadastrados - </h1>
            <h5 id="alunoMatutino">Alunos Matutino - </h5>
            <h5 id="alunoVespertino">Alunos Vespertino - </h5>
            <h5 id="alunoNoturno">Alunos Notuno - </h5>
        </div>
    </div>

    <div class="container">
            <div class="alert alert-success" role="alert" id="sucessoCadastro">
                
            </div>
        <div id="cadastrar">
            <form id="formCadastrar" action="cadastrar.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="inputEmail4" id="nome" name="nome" placeholder="Digite o nome do aluno">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Telefone</label>
                        <input type="text" class="form-control" id="inputPassword4" id="telefone" name="telefone" placeholder="Digite o telefone do aluno">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Mensalidade</label>
                        <input type="text" class="form-control" id="inputPassword4" id="mensalidade" name="mensalidade" placeholder="Digite a mensalidade">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Périodo</label>
                        <select id="inputCity" class="form-control" id="periodo" name="periodo">
                            <option value="1">Matutno</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Instituição</label>
                        <select id="inputState" class="form-control" id="instituicao" name="instituicao">
                            <option value="FAI">FAI</option>
                            <option value="IF">IF</option>
                            <option value="UEG">UEG</option>
                            <option value="OSÒRIO">OSÒRIO</option>
                            <option value="MILIAR">MILIAR</option>
                            <option value="DOM BOSCO">DOM BOSCO</option>
                            <option value="SENAC">SENAC</option>
                            <option value="EXATO">EXATO</option>
                            <option value="ODILON">ODILON</option>
                            <option value="BETEL">BETEL</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/home.js"></script>
</body>
</html>