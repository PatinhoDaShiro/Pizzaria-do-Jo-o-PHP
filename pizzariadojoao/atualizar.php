<?php
    session_start();
    include "./config.php";
    include "./conexao.php";
    $id = $_POST['idpedido'];
    $status = $_POST['statuspedido'];
    $massa = $_POST['massapedido'];
    $borda = $_POST['bordapedido']; //coleta os dados dos inputs e recebe em variaveis
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
    $query=  "UPDATE pedidos SET";
    if($status!=""){
      $query=$query." statusPizza = '$status',";
        
    }
    if($massa!=""){
        $query=$query." massa='$massa',";
          
      }
      if($sabor1!=""){
        $query=$query." sabor1='$sabor1',";
          
      }
      if($sabor2!=""){
        $query=$query." sabor2='$sabor2',";
          
      }
      if($sabor3!=""){
        $query=$query." sabor3='$sabor3',";
          
      }
      if($borda!=""){
        $query=$query." borda='$borda',";
          
      }
   
$query=rtrim($query,',')." WHERE pedidos_id=$id;";
echo $query;

    $result = mysqli_query($conexao, $query);
    header('Location:'.URL_BASE.'/carrinho.php');