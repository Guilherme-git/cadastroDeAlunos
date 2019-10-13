<?php
    session_start();
    require_once 'conexao.php';

     function TotalVespertino(){
        global $pdo;
        $select = $pdo->prepare("SELECT * FROM aluno WHERE id_periodo=2");
        $select->execute();
        return $resposta = count($select->fetchAll());
    }
    

    echo TotalVespertino();
?>