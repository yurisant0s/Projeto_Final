<?php 
    session_start();
   
   //Se existir a variável "$_POST[submit] e os campos e-mail e senha não estiverem vazio"
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
    //Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

  //Não existe no banco de dados, retorna ao login  
    if(mysqli_num_rows($result)<1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: signin.php');
    }
    //Existe no banco de dados, redireciona para o sistema
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php'); 
    }

   }
   else
   {
        header('Location: signin.php');
   }



?>