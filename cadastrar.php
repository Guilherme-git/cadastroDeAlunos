<?php
    require_once 'conexao.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $mensalidade = $_POST['mensalidade'];
    $periodo = $_POST['periodo'];
    $instituicao = $_POST['instituicao'];
    

    $insert = $pdo->prepare("INSERT INTO aluno(nomeAluno,telefone,mensalidade,id_periodo,instituicao) VALUES(?,?,?,?,?)");
    $insert->execute(array($nome,$telefone,$mensalidade,$periodo,$instituicao));


    if($insert == true){
        echo "Salvo com sucesso";
    }
    
?>