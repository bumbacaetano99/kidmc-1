<?php
session_start();
include('conectar_bancodedados.php');
$msg=false;
if (isset($_POST['nome_usuario'])) {
    $nome_usuario=$_POST['nome_usuario'];
    $senha_usuario =$_POST['senha_usuario'];


    $query ="select * from usuario where usuario= '".$nome_usuario."' AND senha= '".$senha_usuario."' limit 1";
    $resultado=mysqli_query($conectar, $query);
    if (mysqli_num_rows($resultado) ==1) {
        header('Location: welcome.php');
        # code...
    } else {
        $msg="Palavra passe errada";
    }
    
}



?>


















<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="Estilos/music.css">
  <link rel="stylesheet" href="Estilos/music.css">
  <link rel="stylesheet" href="Estilos/media.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  

</head>

<body>
 
  <header>
    
    <div class="esquerdo_bx1">
        <div class="content">
            <form method="post">
                <h3>Login</h3>
                <div class="cartao">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome_usuario" placeholder="Insira o seu Nome..." required>

                </div>
                <div class="cartao">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha_usuario" placeholder="Digite a senha..." required>
                    
                </div>
               
                <input type="submit" value="Login" class="submit">
                <div class="check">
                    <input type="checkbox" name="" id=""><span>Lembrar-me</span>
                </div>
                <p>Ainda Não tens Conta? <a href="abrirconta.php">Abrir Conta</a></p>
            </form>
        </div>
    </div> 
    <div class="direto_bx1">
        <img src="Imagens/telefones/41.jpg" alt="">
        <!--<h3>Palavra passe incorrecta</h3>-->
        <?php
         echo('<h3>' .$msg.'</h3>');
        ?> 

    </div> 
    </header>






</body>

</html>