<?php
/* Recebe o número do CNAE digitado */
$numero = $_POST['c'];
/* declaração de variável para controle */
$usuario1 = '1234567';
/* Função para limpar caracteres digitados junto ao CNAE */
function limpar_texto($numero){ 
	return preg_replace("/[^0-9]/", "", $numero); 
}
/* Recebe o número do CNAE sem caracteres após função rodar */
$limpo = limpar_texto($numero);
/* Recebe os númetos no campo post */
$_POST['c'] = $limpo;
/* Inicia uma seção */
session_start();
/* Recebe os númetos do post sem caracteres e coloca na seção */
$_SESSION['ccc'] = $_POST['c'];
/* Valda se não está vazio então ele redireciona para o resultado */
// Construção da URL do resultado da busca
// Aqui requremos o arquivo de ligação as APIS
require_once 'app/modules/cn-api.php';
// Aqui escondemos os Warnings e avisos para o usuário final
ini_set('display_errors', 0 );
error_reporting(0);
// Aqui requeremos as classes e passamos a chave
$cn                         = new CN_API(CN_API_KEY);
$cnae                       = $cn->cn_busca();
$cnaeid                     = $cn->cn_busca_id();
// Aqui retiramos o espaço vazio da string do nome do cnae e colocamos o hifen no lugar
$find = " "; // espaço vazio
$replace = "-"; // valor vazio
$string = $cnae; // Pega o título do cnae e tira os espaços e coloca hifen
// Função para retirar espaços
$nome = str_replace($find, $replace, $string);
// Se estiver tudo ok o arquivo redireciona para a página de resultado com a url construída
if ($numero != $usuario1){
	header ('location: resultado.php?/'.$cnaeid.'-'.$nome.'/');
}
// Evita erros no redirecionamento
die();