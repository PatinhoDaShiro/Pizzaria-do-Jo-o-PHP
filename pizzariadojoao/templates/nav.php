
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo URL_BASE?>/templates/css/style.css" alt="">

<nav>
  
    <div class="nav-wrapper red lighten-1">
      <a  class="brand-logo" style="font-size:2rem; display:flex; margin-left:3vw;"  href="<?php echo URL_BASE;?>"><img  style="margin-top:2px; max-width:50px;" 
      href="<?php echo URL_BASE?>" src="<?php echo URL_BASE?>/img/logo.png" alt=""  ><p class="hide-on-med-and-down" style="margin:0;">Pizzaria do João</p> </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
       
        <li><?php
       
          if(!isset($_SESSION['userName'])){
            echo "<a style='color:black;' href=".URL_BASE."/login/loginPage.php> <strong>Iniciar sessão";

          }else{
            $name=$_SESSION['userName'];
            echo "<li ><a style='color:black;' href='".URL_BASE."/logout.php'>Sair</a></li>
            <li ><a style='color:black;' href=".URL_BASE."/carrinho.php>Carrinho</li></a></li>
             <li ><a style='color:black;' href='".URL_BASE."/fazerPedido.php'>Fazer pedido"
             ;

            } ;

        
        ?></li></a></li>
    
      </ul>
    </div>
  </nav>



  <ul class="sidenav" style="text-align:center;" id="mobile-demo">
  <div  style="margin-top:3vh; margin-bottom:5vh;">
  <li><?php
          
          if(!isset($_SESSION['userName'])){
            echo "<a style='color:black;' href=".URL_BASE."/login/loginPage.php> <strong>Iniciar sessão";

          }else{
           echo "<a style='color:black;' href=".URL_BASE."/carrinho.php>Carrinho</li></a></li>
            <li ><a style='color:black;' href='".URL_BASE."/fazerPedido.php'>Fazer pedido</a></li>
           <li ><a style='color:red;' href='".URL_BASE."/logout.php'>Sair</a></li>'";

            } 

        
        ?></strong></li></a></li>
 
  
</ul>    
</div>

   
  </ul>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
  </script>