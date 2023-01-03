<?php
$Resultado = '';

if (!isset($_GET['nome'])) {
	header("Location: index.php");
	exit;
}

$nome = "%".trim($_GET['nome'])."%";

$dbh = new PDO('mysql:host=srv260.prodns.com.br;dbname=person90_buscador', 'person90_User568', '[eJDTu=;)_3u');

$sth = $dbh->prepare('SELECT * FROM `cnae` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
//echo ("<pre>");
//var_dump($resultados);
if (count($resultados)) {
    foreach($resultados as $Resultado) {
}
}
// Aqui escondemos os Warnings e avisos para o usuário final
ini_set('display_errors', 0 );
error_reporting(0); 
?>

<!doctype html>
<html lang="pt_br">
  <head>
    <title>Resultado da busca</title>
    <link rel="icon" href="image/favicon.png">
    <link rel="stylesheet" href="css/busca.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap" media="all">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Essa ferramenta foi elaborado com o intuito de ajudar o usuário a escolher e tirar as dúvidas referente a uma atividade específica.">
    <meta name="robots" content="all">
    <meta name="author" content="ContaÁgil Contabilidade Online">
    <meta name="keywords" content="busca de cnae, buscador de cnae, cnaes, abertura de empresa, qual atividade escolher, contabilidade online, contaagil contabilidade online, buscador de cnaes contaagil">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="page">
    <meta property="og:url" content="https://www.contaagil.com/buscadordecnaes/">
    <meta property="og:title" content="Buscador de CNAES - ContaÁgil Contabilidade Online">
    <meta property="og:image" content="https://www.contaagil.com/wp-content/uploads/2021/10/Logotipo_RGB_Principal-7.png">
    <meta property="og:description" content="Essa ferramenta foi elaborado com o intuito de ajudar o usuário a escolher e tirar as dúvidas referente a uma atividade específica.">
    <meta property="article:author" content="ContaÁgil Contabilidade Online">
  </head>
  <body>
    <!-- Resultado da busca -->
    <section class="resultado-busca">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <!-- botão voltar -->
                    <div class="voltar-botao">
                        <a href="https://www.contaagil.com/consulta-cnae/"><img src="image/icones/icone-voltar.png" alt="icone voltar para o buscador"> Voltar para o buscador de CNAEs</a>
                    </div>
                    <!-- botão voltar -->
                    <h1>Categoria: <span span class="codigo-cat"><?php echo $Resultado['cnae']; ?></h1>
                        <?php
                        if($Resultado != null){?>
                            <div class="resultado">
                                <a href="<?php echo $Resultado['url']; ?>" target="_blank">
                                    <span class="wrapper">
                                        <span span class="codigo"><?php echo $Resultado['cnae']; ?></span> - <?php echo $Resultado['nome']; ?>
                                    </span>
                                </a>
                            </div>    
                        <?php }else{?>
                            <div class="nadaencontrado">
                                <label>Não foram encontrados resultados pelo termo buscado.</label>
                            </div>
                        <?php } ?>                        

                </div>
                <div class="col-md-6 col-12 img-busca">
                    <img src="image/Busca-CNAE.jpg" alt="imagem busca">
                </div>    
            </div>
        </div>
    </section>
    <!-- Resultado da busca -->
    <!--Rodapé-->
    <footer>
    <div class="container">
      <div class="row">
            <div class="col-12">
                  <div class="logo-rodape">
                        <img src="image/logo-rodape.svg" width="190px" alt="Logo-ContaÁgil-Rodapé" class="img-fluid">
                  </div>
                  <div class="copy">
                        <p>ContaÁgil © <?php echo date("Y");?> | Todos os direitos reservados | CNPJ: 28.474.006/0001-10<br />
                        Conselho Regional de Contabilidade: CRC/RS 007677<br />
                        Responsável Técnico: CRC/RS 065930 | Fábio Marques Pereira
                        </p>
                  </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
            <script type='text/javascript' src='js/validar.js'></script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <!--<script src="js/form-modal.js"></script>-->
            <script type='text/javascript' src="js/simples.js"></script>
            <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </div>
    </div>        
  	</footer>
    <!--Rodapé-->
  </body>
</html>