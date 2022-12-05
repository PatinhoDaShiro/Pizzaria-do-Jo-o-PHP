<?php
    session_start();
    include "./config.php";
    include "./conexao.php";
    $massa = $_POST['massa'];
    $borda = $_POST['borda']; //coleta os dados dos inputs e recebe em variaveis
    $sabores = $_POST['sabores']; 
    $cont=0;
   

    $sabor1="";
    $sabor2="";
    $sabor3="";

    foreach($sabores as $valor){

     
        if($cont==0){
        $sabor1=$valor;
        
        }
        else if($cont==1){
        $sabor2=$valor;
        
        }
        else if($cont==2){
            $sabor3=$valor;
          
            
        }
        $cont++;
    }
    if($borda=="" || $massa==""){ 
       
        header('Location:'.URL_BASE."/fazerPedido.php?error=1");
        exit();
        //se campos vazios volta para a pagina de login
    }
    $cliente= $_SESSION ['userName'];
    $result = mysqli_query($conexao, "INSERT INTO pedidos (nome_cliente,statusPizza, sabor1, sabor2, sabor3, massa, borda ) VALUE ('$cliente','Em produção','$sabor1','$sabor2','$sabor3','$massa','$borda')");
    header('Location:'.URL_BASE);
