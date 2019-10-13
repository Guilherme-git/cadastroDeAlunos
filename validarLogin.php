<?php
    session_start();
    require_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $select = $pdo->prepare("SELECT * FROM admin WHERE email=? AND senha=?");
    $select->execute(array($email,$senha));
    $resultado = $select->fetchAll();

    if(count($resultado) == 0){
        echo "Email ou Senha incorretos";
    }else{
        foreach ($resultado as $key => $value) {
            $_SESSION['id_login'] = $value['id'];
        }
        echo './home.php';
    }


?>