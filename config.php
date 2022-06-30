<?php 

$email_adm = 'hvfadvocacia@gmail.com';
$nome_loja = 'Freitas Delivery';
$whatsapp_loja = '31975275084';

$url_site = "http://$_SERVER[HTTP_HOST]/";
$url = explode("//", $url_site);
if($url[1] == 'localhost/'){
	$url_site = "http://$_SERVER[HTTP_HOST]/delivery/";
}

//DADOS PARA CONEXÃO COM BD LOCAL

$banco = 'delivery';
$host = 'localhost';
$usuario = 'root';
$senha = '';


/*
$banco = 'hugocu75_delivery';
$host = 'localhost';
$usuario = 'hugocu75_deliver';
$senha = 'deliveryhugo';
*/

//CONFIGURAÇÕES PARA PAGINAÇÃO DE ITENS NO PAINEL
//Valor padrão para as paginações
$itens_por_pagina = 10;
$itens_por_pagina_produtos = 20;

//valor que o usuario pode alterar para mostrar a paginação
$itens_por_pagina_1 = 5;
$itens_por_pagina_2 = 10;
$itens_por_pagina_3 = 20;


//MOSTRAR ADICIONAL NO COMPROVANTE
$mostrar_adicional = 'Sim';


//DEPOIS DE xx DIAS OS DADOS DO CARRINHO SERÃO LIMPOS NO BANCO DE DADOS
$dias_limpar_carrinho = 2;  //a cada dois dias serão limpos caso o usuário não feche a compra


//QUANTIDADE DE SABORES PERMITIDOS PARA PIZZA
$quantidade_sabores = 2;

//DEFINIR O TEMPO DA ATUALIZAÇÃO DA TELA DE PEDIDOS DO BALCÃO EM SEGUNDOS
$tempo_atualizacao_tela_pedidos = 60;


//SER VOCÊ QUISER TAXA FIXA POR BAIRRO COLOQUE Sim abaixo, caso contrário coloque Não
$taxa_fixa = 'Sim';


//VARIAVEIS PARA O CUPOM
//total de cartões para o cliente trocar pelo cumpom de desconto
$total_cartoes_troca = 10;
$trocar_por = "Uma Bebida"; //Defina o brinde para o cliente quando ele completar xx cartões

 ?>