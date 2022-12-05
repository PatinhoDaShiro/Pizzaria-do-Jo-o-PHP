<?php
session_start();
//inicia sessão
include('../config.php');
include('../conexao.php');


//inclui e conecta o banco de dados
if(empty($_POST['emailLogin']) || empty($_POST['senhaLogin'])){ 
    session_destroy();
    header('Location:'.URL_BASE."/login/loginPage.php?error=1");
    exit();
    //se campos vazios volta para a pagina de login
}
$userMail = mysqli_real_escape_string($conexao, $_POST['emailLogin']);
$userPass = mysqli_real_escape_string($conexao, $_POST['senhaLogin']);
//verificação para evitar mysql inject
$query = "select * from usuarios where email = '$userMail' and password = md5('$userPass')";
//envia os dados e compara no banco
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
//retorna 0 ou 1 (1 verdadeiro, 0 falso)

if($row == 1){
    $dados = mysqli_fetch_assoc($result);
   $_SESSION ['userName'] = $dados['nome'];
   $_SESSION['email'] = $dados['email'];
    header('Location:'.URL_BASE.'/');
    exit();
   

}else{
    session_destroy();
    header('Location:'.URL_BASE."/login/loginPage.php?error=1");
    exit();

    //se 0 (falso, nesse caso não se usa if)
    //ele retorna o usuario para a pagina de login
    //e não se conclui o login
}
