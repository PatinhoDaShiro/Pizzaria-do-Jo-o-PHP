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
<style>
    table.striped>tbody>tr:nth-child(odd) {
        background-color:#959aa3;
    }
    table{
        border:solid black 2px ;
      
    }
    #tabela{
        margin-top:2vh;
    }
    p{
                        width:inline-block;
                        margin:5px 0 0 0;
                        
                    }
                    label{
                        margin-left:10px;
                        color:black;
                    }
</style>
<body class="grey">
       <div class="container ">
        <div class="row">
        <?php
        if($_SESSION['userName']=='admin'){
            echo '
            <div class=" white col s10 offset-s1 l8 offset-l2" style="padding:10px; border-radius:10px; margin-top:10px; margin-bottom:10px;">
<form method="post" action="'.URL_BASE.'/atualizar.php">

            <div class="input-field col s10 offset-s1 l4 offset-l4" >
            <input type="text" placeholder="Numero do pedido a ser atualizado" name="idpedido">

            <select name="statuspedido" class="white">
            <option value="" disabled selected >Status pedido</option>
            <option value="Em produção" >Em produção</option>
            <option value="Entrega">Entrega</option>
            <option value="Concluido">Concluido</option>
        
            </select>

            <select name="massapedido" class="white">
            <option value="" disabled selected >Tipo de massa</option>
            <option value="comum">Massa comum</option>
            <option value="integral">Massa integral</option>
            <option value="temperada">Massa temperada</option> 
            </select>
            
            <select name="bordapedido" >
            <option value="" disabled selected>Tipo de borda</option>
            <option value="cheddar">Cheddar</option>
            <option value="catupiry">Catupiry</option>
            <option value="chocolate">Chocolate</option>
            </select>
            </div>

            <div class="col s12" style="text-align:center;">

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
            <button class="btn black-text" type="submit" ><b>Atualizar</b></button>
            </div>
            </form>


            <div class=" white col s10 offset-s1 l4 offset-l4" style="padding:10px; border-radius:10px; margin-top:10px; margin-bottom:10px;">
           <form method="post" action="'.URL_BASE.'/excluir.php">
            <input type="text" placeholder="Numero do pedido a ser apagado" name="idpedido">
            <button class="btn black-text" type="submit" ><b>Excluir</b></button>
            </form>
            </div>
            </div>

            </div>
           ';
            
            
            
        }
        ?>
        <script type="text/javascript">
             document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

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
            <div id="tabela" >
        <table class="striped white"> 
        <tr> 
        <?php
        if($_SESSION['userName']=='admin'){
        echo '<td>ID</td>';
        }?>
          <td>Nome do cliente</td> 
          <td>Status</td> 
          <td>Massa</td> 
          <td>Borda</td> 
          <td>Sabores</td> 
        </tr> 

        <?php 
$query = 'SELECT * FROM pedidos';
//envia os dados e compara no banco
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

while ( $escrever = mysqli_fetch_assoc($result)) { 
     
    if($_SESSION['userName']=='admin'){
        echo "<td>".$escrever['pedidos_id']."</td>";
        }
        echo "
        
        <td>".$escrever['nome_cliente']."</td>
        <td>".$escrever['statusPizza']."</td>
        <td>".$escrever['massa']."</td>
        <td>".$escrever['borda']."</td>
        <td>".$escrever['sabor1']." / ".$escrever['sabor2']." / ".$escrever['sabor3']."</td>       
        </tr>";
       } ?> 
      </table> 
      </div>
        </div>
        </div>
</body>