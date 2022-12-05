<?php
session_start();
include './conexao.php';
include './config.php';
error_reporting(E_WARNING);


include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';

?>
</head>
<body>
        <div clas="container" class="indigo lighten-2">
    <div class="row">
<div class="col s10 l8 offset-s1 offset-l4">
<img src="<?php echo URL_BASE;?>/img/pizzaria.png" style="max-width:600px; width:80vw; " alt="">

</div>
<div class="col s10 offset-s1 grey flow-text " style=" border:2px black solid; border-radius:30px;" >
    <p style="margin:1vw; text-align:justify;">
        A pizzaria do João vem produzindo as melhores pizzas desde 1997, sempre trazendo excelente qualidade, inesquecíveis sabores e um ótimo atendimento. Foi assim que conquistamos os nossos fiéis clientes e nos tornamos uma das pizzarias de referência em Três Coroas.
Conseguimos mesclar a tradição que adquirimos ao longo dos mais de 22 anos de experiencia com a modernidade do mundo, acompanhando e nos adaptando a evolução dele. Um exemplo disso é a nossa utilização de dois fornos, um à lenha e um forno ecológico, que é mais prático e menos poluente ao meio ambiente.
Com a intenção de sempre entregar o melhor aos nossos clientes, reformulamos a identidade visual de nossa empresa, assim deixando-a mais sofisticada e moderna.
E pensando na praticidade de entrega, possuímos a entrega delivery e estamos no IFOOD! Agora você pode pedir a sua deliciosa pizza do João em recebê-la em sua casa sem nenhum esforço.</p>
</p>    
<p>
        <strong>Endereço:  R. Jorge Augusto Dreher, 50 - Centro, Três Coroas - RS, 95660-000</strong>
    </p>
    <p>
        <strong>Telefone: 51 992838476</strong>
    </p>
</div>
    </div>
        </div>
    
    
</body>
