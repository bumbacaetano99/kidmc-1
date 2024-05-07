<?php 
session_start();


include('conectar_bancodedados.php');
$msg=false;
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $nome_usuario=$_POST['nome_usuario'];
    $email_usuario= $_POST['email_usuario'];
    $senha_usuario=$_POST['senha_usuario'];
    $senha_re_usuario=$_POST['senha_re_usuario']; 


    if (!empty($nome_usuario) && !empty($email_usuario) && !empty($senha_usuario) && !is_numeric($nome_usuario) ) {
        if ($senha_usuario===$senha_re_usuario){
            $query ="Insert into usuario(usuario, email, senha) VALUES('$nome_usuario', '$email_usuario', '$senha_usuario')";
            mysqli_query($conectar,$query );
            header("Location: index.php");
        }else{
            $msg="Palavra passe incorrecta";
        }
    }

    
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fazer Login</title>
  <link rel="stylesheet" href="Estilos/music.css">
  <link rel="stylesheet" href="Estilos/media.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  

</head>

<body>
 
  <header>
    
    <div class="esquerdo_bx1">
        <div class="content">
            <form method="post">
                <h3>Abrir Conta</h3>
                <div class="cartao">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome_usuario" placeholder="Insira o seu Nome..." required>

                </div>

                     <div class="cartao">
                    <label for="email">Email</label>
                    <input type="email" name="email_usuario" placeholder="Digite o email" required>
                    
                </div>
                <div class="cartao">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha_usuario" placeholder="Digite a senha..." required>
                    
                </div>
                     <div class="cartao">
                    <label for="re-senha">Confirmar Senha</label>
                    <input type="password" name="senha_re_usuario" placeholder="Confirme a senha..." required>
                    
                </div>
                <input type="submit" value="Abrir Conta" class="submit">
                <div class="check">
                    <input type="checkbox" name="" id=""><span>Lembrar-me</span>
                </div>
                <p>Fazer Login  <a href="index.php">Login</a></p>
            </form>
        </div>
    </div> 
    <div class="direto_bx1">
        <img src="Imagens/telefones/41.jpg" alt="">
       <!-- <h3>Palavra passe incorrecta</h3>-->
       <?php
        echo('<h3>' .$msg.'</h3>');



        ?>
    </div> 
    </header>






</body>

</html>