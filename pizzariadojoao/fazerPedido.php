<?php
session_start();
include './conexao.php';
include './config.php';
error_reporting(E_WARNING);
if(!isset($_SESSION['userName'])){
    header('Location:'.URL_BASE."/login/loginPage.php");
}

include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';

?>
</head>

    <body class="grey">
       <div class="container ">
        <div class="row">
            
            <form class="col s12 m8 offset-m2 white"  style="border-radius:10px; margin-top:4vh;" action="realizarPedido.php" method="POST">
            <div class="col s12" style="text-align:center;">
            <?php 
    if(isset($_GET['error'])){
      $erro = $_GET['error'];
      if($erro == 1){
        echo "<p style='color:red;'>Erro ao enviar pedido</p>";
      }
     
    }
    
    
    ?>
            <h2 class="flow-text">Faça seu pedido</h2>
            </div >
            <div class="input-field col s10 offset-s1 l4 offset-l4" >
            <select name="massa" class="white">
            <option value="" disabled selected >Tipo de massa</option>
            <option value="comum">Massa comum</option>
            <option value="integral">Massa integral</option>
            <option value="temperada">Massa temperada</option> 
            </select>
            
            <select name="borda" >
            <option value="" disabled selected>Tipo de borda</option>
            <option value="cheddar">Cheddar</option>
            <option value="catupiry">Catupiry</option>
            <option value="chocolate">Chocolate</option>
            </select>
            </div>

            <div class="col s12" style="text-align:center;">
            <h2 class="flow-text">Escolha até <Strong>três</Strong> sabores</h2>
            <div class="col s12"  display="flex">
                <style>
                    p{
                        width:inline-block;
                        margin:5px 0 0 0;
                        
                    }
                    label{
                        margin-left:10px;
                        color:black;
                    }
                </style>
            <p>
            <label>
            <input name="sabores[0]" value="4 Queijos" type="checkbox" />
             <span>4 Queijos</span>
            </label>
            
            <label>
            <input name="sabores[1]" value="Frango com Catupiry" type="checkbox" />
             <span>Frango com Catupiry</span>
            </label>
           
            <label>
            <input name="sabores[2]" value="Calabresa" type="checkbox" />
             <span>Calabresa</span>
            </label>
            </p>
            <p>
            <label>
            <input name="sabores[3]" value="Lombinho" type="checkbox" />
             <span>Lombinho</span>
            </label>
            
            <label>
            <input name="sabores[4]" value="Filé com Cheddar" type="checkbox" />
             <span>Filé com Cheddar</span>
            </label>
           
            <label>
            <input name="sabores[5]" value="Portuguesa" type="checkbox" />
             <span>Portuguesa</span>
            </label>

            <label>
            <input name="sabores[6]" value="Margherita" type="checkbox" />
             <span>Margherita</span>    
             </label>
            </p>
           
            </div>
            
<script type="text/javascript">
(function(){
	"use strict";

	var marcados = 0;
	var verifyCheckeds = function($checks) {
		if( marcados>=3 ) {
			loop($checks, function($element) {
				$element.disabled = $element.checked ? '' : 'disabled';
			});
		} else {
			loop($checks, function($element) {
				$element.disabled = '';
			});
		}
	};
	var loop = function($elements, cb) {
		var max = $elements.length;
		while(max--) {
			cb($elements[max]);
		}
	}
	var count = function($element) {
		return $element.checked ? marcados + 1 : marcados - 1;
	}
	window.onload = function(){
		var $checks = document.querySelectorAll('input[type="checkbox"]');
		loop($checks, function($element) {
			$element.onclick = function(){
				marcados = count(this);
				verifyCheckeds($checks);
			}
			if($element.checked) marcados = marcados + 1;
		});
		verifyCheckeds($checks);
	}
}());
</script>
<div class="col s12" style="margin:2vh 0 2vh 0;">
<button type="submit" class="waves-effect waves-light btn">Enviar pedido</button>
</div>
            </div>


            
          
            </form>
           

        </div>

       </div> 

       <script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

</script>  
    </body>