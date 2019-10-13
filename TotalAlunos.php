<?php
    session_start();
    require_once 'conexao.php';

     function TotalAlunos(){
        global $pdo;
        $select = $pdo->prepare("SELECT * FROM aluno");
        $select->execute();
        return $resposta = count($select->fetchAll());
    }
    

    echo TotalAlunos();
?>