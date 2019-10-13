<?php
    session_start();
    if(isset( $_SESSION['id_login']) || !empty( $_SESSION['id_login'])){
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form id="formLogin" style="width: 40%; margin-left: 30%;margin-top:15%;"> 
            <div class="form-group">

            <div id="resultadoLogin" class="alert alert-danger" role="alert"></div>

                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" id="senha" name="senha" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>