<?php
    session_start();
    require_once 'conexao.php';

     function TotalNotuno(){
        global $pdo;
        $select = $pdo->prepare("SELECT * FROM aluno WHERE id_periodo=3");
        $select->execute();
        return $resposta = count($select->fetchAll());
    }
    

    echo TotalNotuno();
?>