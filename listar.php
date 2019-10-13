<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['id_login']) || empty($_SESSION['id_login'])){
        header('Location: login.php');
    }
    $select = $pdo->prepare("SELECT * FROM aluno INNER JOIN periodo WHERE aluno.id_periodo = periodo.id");
    $select->execute();
    $res = $select->fetchAll();

    if(isset($_GET['pg']) == 'excluir'){
        $id = $_GET['id'];
        $delet = $pdo->prepare("DELETE FROM aluno WHERE idAluno=?");
        $delet->execute(array($id));
        header("Location: listar.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Lista de alunos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Transporte</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php" aria-disabled="true">Inícial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar.php" aria-disabled="true">Listar</a>
                </li>
            </ul>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Mensalidade</th>
            <th>Periodo</th>
            <th>Instituição</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($res as $key => $value) {
            ?>
            <tr>
                <th><?php echo $value['nomeAluno']; ?></th>
                <td><?php echo $value['telefone']; ?></td>
                <td><?php echo $value['mensalidade'] ?></td>
                <td><?php echo $value['nome'] ?></td>
                <td><?php echo $value['instituicao']; ?></td>
                <td><a class="btn btn-outline-danger" href="listar.php?pg=excluir&id=<?php echo $value['idAluno'];?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/lista.js"></script>
</body>
</html>