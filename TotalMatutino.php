<?php
    session_start();
    require_once 'conexao.php';

     function TotalMatutino(){
        global $pdo;
        $select = $pdo->prepare("SELECT * FROM aluno WHERE id_periodo=1");
        $select->execute();
        return $resposta = count($select->fetchAll());
    }
    

    echo TotalMatutino();
?>