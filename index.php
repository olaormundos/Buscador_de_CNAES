<!doctype html>
<html lang="pt-br">
  <head>
    <title>Buscador de CNAES - ContaÁgil Contabilidade Online</title>
    <link rel="icon" href="image/favicon.png">
    <link rel="stylesheet" href="css/estilos.css">
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
  <body style="font-family:'Lato';">
     <header id="topo"></header>  
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRM48FJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section class="container topo">
        <div class="row">
          <div class="col-md-5 col-12 bloco-do-buscador" id="bloco-do-buscador">
            <img src="image/Logo.svg" alt="Logo-ContaÁgil-topo" class="img-fluid">
            <h1>Consultor de CNAE Simples Nacional</h1>
            <h3>Empreenda com agilidade, encontre a atividade que melhor se enquadra no seu negócio.</h3>
            <p>A ContaÁgil é uma solução simples para resolver a contabilidade e apoia os empreendedores desde o início da sua jornada. Pensando nisso, a fim de facilitar o processo de abertura de CNPJ, criamos uma ferramenta única para consulta de CNAES, atividades permitidas pelo Simples Nacional e muito mais!</p>
            <!--busca CNAE por código-->
            <form id="formulario" method="POST" action="recebendo.php" class="buscaCNAE" enctype="multipart/form-data" onblur="setTimeout(this.form.submit(), 1000)"  onsubmit="return validaForm(this);">
                <fieldset>
                  <ul>
                    <li>
                      <div class="alinhar">
                        <input class="numero-campo" type="text" id="c" name="c" minlength="6" maxlength="7" onkeypress="return onlynumber();" .mask="9999-9/99" placeholder="Busca pelo código!" value="" class="validar" />
                        <input class="botao-campo" type="submit" value="          " class="botao" />
                      </div>
                    </li>
                  </ul>
                </fieldset>
            </form>
            <div id="msgerro"></div>
            <!--busca CNAE por código-->
            <!--busca CNAE por palavra-->
            <form id="formulario2" method="GET" action="busca.php" class="buscaCNAE" enctype="multipart/form-data" onblur="setTimeout(this.form.submit(), 1000)"  onsubmit="return validaForm(this);">
                <fieldset>
                  <ul>
                    <li>
                      <div class="alinhar">
                        <input class="numero-campo" type="text" name="nome" id="d" name="d" placeholder="Busca pelo nome!" value="" class="validar" />
                        <input class="botao-campo" type="submit" value="          " class="botao" />
                      </div>
                    </li>
                  </ul>
                </fieldset>
            </form>
            <div id="msgerro2"></div>
            <!--busca CNAE por palavra-->
            <!--lista de categoria-->
            <ul class="filtro-secoes">
              <li class="secoes-arrow-cima" onclick="toggleDivpc()" id="ocultar-botao" style="display: none;"><i class="fa-solid fa-angle-up"></i></li>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaarq()" id="ocultar" style="display: flex;">Arquitetura</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaadv()" id="adv" style="display: flex;">Advogados</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaadm()" id="adm" style="display: flex;">Administrativo</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaconsult()" id="consult" style="display: flex;">Consultoria</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistacorr()" id="corr" style="display: flex;">Corretagem de imóveis</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaedu()" id="edu" style="display: flex;">Educação e Cursos</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistaeng()" id="mostrar" style="display: none;">Engenharia</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistapubl()" id="pub" style="display: none;">Publicidade</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistasoft()" id="soft" style="display: none;">Software</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistamed()" id="med" style="display: none;">Serviços médicos</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistati()" id="tec" style="display: none;">Tecnologia</li></a>
              <a href="#lista-cnae-ver"><li class="cnae-atendido__activity  align-items-center" onclick="toggleDivlistatur()" id="tur" style="display: none;">Turismo</li></a>
              <li class="secoes-arrow" onclick="toggleDivpc()" id="ocultar-botao-baixo"><i class="fa-solid fa-angle-down"></i></li>
            </ul>
            <!--lista de categoria-->
            <!--bloco notícias-->
            <div class="bloco-news">
              <div class="card-news">
                <div class="direita">
                  <a href="https://www.contaagil.com/blog/saiba-escolher-corretamente-o-cnae/" target="_blank"><img src="image/news/como-escolher-o-cnae-correto-para mim.png" width="250px" height="145px" alt="Blog como escolher o melhor CNAE para mim?"></a>
                </div>
                <div class="esquerda">
                  <img src="image/icones/jornal.png" alt="icone-jornal" class="img-fluid" width="15px">
                  <p><a href="https://www.contaagil.com/blog/saiba-escolher-corretamente-o-cnae/" target="_blank">Como escolher o CNAE correto para mim?</a></p>
                  <span class="tempo"><img src="image/icones/relogio.svg" alt="icone-relógio" class="img-fluid" width="15px"> 10 min</span>
                  <span class="leia-mais"><a href="https://www.contaagil.com/blog/saiba-escolher-corretamente-o-cnae/" target="_blank">Leia sobre <img src="image/icones/seta.svg" alt="icone-seta" class="img-fluid" width="15px"></a></span>
                </div>
              </div>
              <div class="card-news">
                <div class="direita">  
                  <a href="https://www.contaagil.com/blog/saiba-como-alterar-o-ramo-de-atividade-de-uma-empresa-me/" target="_blank"><img src="image/news/como-alterar-a-cnae-de-uma-empresa.png" width="250px" height="145px" alt="Blog como alterar a CNAE de uma empresa?"></a>
                </div>
                <div class="esquerda">
                  <img src="image/icones/jornal.png" alt="icone-jornal" class="img-fluid" width="15px">
                  <p><a href="https://www.contaagil.com/blog/saiba-como-alterar-o-ramo-de-atividade-de-uma-empresa-me/" target="_blank">Como alterar a CNAE de uma empresa?</a></p>
                  <span class="tempo"><img src="image/icones/relogio.svg" alt="icone-relógio" class="img-fluid" width="15px"> 10 min</span>
                  <span class="leia-mais"><a href="https://www.contaagil.com/blog/saiba-como-alterar-o-ramo-de-atividade-de-uma-empresa-me/" target="_blank">Leia sobre <img src="image/icones/seta.svg" alt="icone-seta" class="img-fluid" width="15px"></a></span>
                </div>           
              </div>
            </div>  
            <!--bloco notícias-->
           </div>
            <!--lista de atividades-->
          <div class="col-md-7 col-12 bloco-da-lista">
            <h2>Lista de Atividades Atendidas Pela ContaÁgil</h2>
            <div class="lista-scroll" id="lista-cnae-ver">
              <ul id="principal" style="display: block;">
                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6204000-consultoria-em-tecnologia-da-informacao">
                            <span class="wrapper">
                                  <span class="codigo">6204-0/00</span> - Consultoria em tecnologia da informação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6201501-desenvolvimento-de-programa-de-computador-sob-encomenda">
                            <span class="wrapper">
                                  <span class="codigo">6201-5/01</span> - Desenvolvimento de programas de computador sob encomenda</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6202300-desenvolvimento-e-licenciamento-de-programas-de-computador-customizaveis">
                            <span class="wrapper">
                                  <span class="codigo">6202-3/00</span> - Desenvolvimento e licenciamento de programas de computador customizáveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6203100-desenvolvimento-e-licenciamento-de-programas-de-computador-nao-customizaveis">
                            <span class="wrapper">
                                  <span class="codigo">6203-1/00</span> - Desenvolvimento e licenciamento de programas de computador não customizáveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6209100-suporte-tecnico-manutencao-e-outros-servicos-em-tecnologia-da-informacao">
                            <span class="wrapper">
                                  <span class="codigo">6209-1/00</span> - Suporte técnico, manutenção e outros serviços em tecnologia da informação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6201502-web-design">
                            <span class="wrapper">
                                  <span class="codigo">6201-5/02</span> - Web design</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/administrativo/8211300-servicos-combinados-de-escritorio-e-apoio-administrativo">
                            <span class="wrapper">
                                  <span class="codigo">8211-3/00</span> - Serviços combinados de escritório e apoio administrativo</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/administrativo/8219999-preparacao-de-documentos-e-servicos-especializados-de-apoio-administrativo">
                            <span class="wrapper">
                                  <span class="codigo">8219-9/99</span> - Preparação de documentos e serviços especializados de apoio administrativo não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630503-atividade-medica-ambulatorial-restrita-a-consultas">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/03</span> - Atividade médica ambulatorial restrita a consultas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630501-atividade-medica-ambulatorial-com-recursos-para-realizacao-de-procedimentos-cirurgicos">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/01</span> - Atividade médica ambulatorial com recursos para realização de procedimentos cirúrgicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630502-atividade-medica-ambulatorial-com-recursos-para-realizacao-de-exames-complementares">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/02</span> - Atividade médica ambulatorial com recursos para realização de exames complementares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8610101-atividades-de-atendimento-hospitalar-exceto-pronto-socorro-e-unidades-para-atendimento-a-urgencias">
                            <span class="wrapper">
                                  <span class="codigo">8610-1/01</span> - Atividades de atendimento hospitalar, exceto pronto socorro e unidades para atendimento a urgências</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8610102-atividades-de-atendimento-em-pronto-socorro-e-unidades-hospitalares-para-atendimento-a-urgencias">
                            <span class="wrapper">
                                  <span class="codigo">8610-1/02</span> - Atividades de atendimento em pronto socorro e unidades hospitalares para atendimento a urgências</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade/7311400-agencias-de-publicidade">
                            <span class="wrapper">
                                  <span class="codigo">7311-4/00</span> - Agências de publicidade</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319003-marketing-direto">
                            <span class="wrapper">
                                  <span class="codigo">7319-0/03</span> - Marketing direto</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319002-promocao-de-vendas">
                            <span class="wrapper">
                                  <span class="codigo">7319-0/02</span> - Promoção de vendas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/consultoria/7319004-consultoria-em-publicidade">
                            <span class="wrapper">
                                  <span class="codigo">7319-0/04</span> - Consultoria em publicidade</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319099-outras-atividades-de-publicidade-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">7319-0/99</span> - Outras atividades de publicidade não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/turismo/7990200-servicos-de-reservas-e-outros-servicos-de-turismo-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">7990-2/00</span> - Serviços de reservas e outros serviços de turismo não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/turismo/7912100-operadores-turisticos">
                            <span class="wrapper">
                                  <span class="codigo">7912-1/00</span> - Operadores turísticos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/turismo/7911200-agencias-de-viagens">
                            <span class="wrapper">
                                  <span class="codigo">7911-2/00</span> - Agências de viagens</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/advogados/6911701-servicos-advocaticios">
                            <span class="wrapper">
                                  <span class="codigo">6911-7/01</span> - Serviços advocatícios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/arquitetura/7111100-servicos-de-arquitetura">
                            <span class="wrapper">
                                  <span class="codigo">7111-1/00</span> - Serviços de arquitetura</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119799-atividades-tecnicas-relacionadas-a-engenharia-e-arquitetura">
                            <span class="wrapper">
                                  <span class="codigo">7119-7/99</span> - Atividades técnicas relacionadas à engenharia e arquitetura não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119703-servicos-de-desenho-tecnico">
                            <span class="wrapper">
                                  <span class="codigo">7119-7/03</span> - Serviços de desenho técnico relacionados à arquitetura e engenharia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/engenharia/7112000-servicos-de-engenharia">
                            <span class="wrapper">
                                  <span class="codigo">7112-0/00</span> - Serviços de engenharia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6821801-corretagem-na-compra-e-venda-e-avaliacao-de-imoveis">
                            <span class="wrapper">
                                  <span class="codigo">6821-8/01</span> - Corretagem na compra e venda e avaliação de imóveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6821802-corretagem-no-aluguel-de-imoveis">
                            <span class="wrapper">
                                  <span class="codigo">6821-8/02</span> - Corretagem no aluguel de imóveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6822600-gestao-e-administracao-da-propriedade-imobiliaria">
                            <span class="wrapper">
                                  <span class="codigo">6822-6/00</span> - Gestão e administração da propriedade imobiliaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/agricultura-pecuaria-e-servicos-relacionados/0161003-servico-de-preparacao-de-terreno-cultivo-e-colheita">
                            <span class="wrapper">
                                  <span class="codigo">0161-0/03</span> - Serviço de preparação de terreno, cultivo e colheita</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/agricultura-pecuaria-e-servicos-relacionados/0162803-servico-de-manejo-de-animais">
                            <span class="wrapper">
                                  <span class="codigo">0162-8/03</span> - Serviço de manejo de animais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/fabricacao-de-produtos-diversos/3250706-servicos-de-protese-dentaria">
                            <span class="wrapper">
                                  <span class="codigo">3250-7/06</span> - Serviços de prótese dentária</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/fabricacao-de-produtos-diversos/3250706-servicos-de-protese-dentaria">
                            <span class="wrapper">
                                  <span class="codigo">3250-7/09</span> - Serviço de laboratório óptico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3313901-manutencao-e-reparacao-de-geradores-transformadores-e-motores-eletricos">
                            <span class="wrapper">
                                  <span class="codigo">3313-9/01</span> - Manutenção e reparação de geradores, transformadores e motores elétricos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3313902-manutencao-e-reparacao-de-baterias-e-acumuladores-eletricos-exceto-para-veiculos">
                            <span class="wrapper">
                                  <span class="codigo">3313-9/02</span> - Manutenção e reparação de baterias e acumuladores elétricos, exceto para veículos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3313999-manutencao-e-reparacao-de-maquinas-aparelhos-e-materiais-eletricos-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">3313-9/99</span> - Manutenção e reparação de máquinas, aparelhos e materiais elétricos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314701-manutencao-e-reparacao-de-maquinas-motrizes-nao-eletricas">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/01</span> - Manutenção e reparação de máquinas motrizes não elétricas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314702-manutencao-e-reparacao-de-equipamentos-hidraulicos-e-pneumaticos-exceto-valvulas">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/02</span> - Manutenção e reparação de equipamentos hidráulicos e pneumáticos, exceto válvulas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314706-manutencao-e-reparacao-de-maquinas-aparelhos-e-equipamentos-para-instalacoes-termicas">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/06</span> - Manutenção e reparação de máquinas, aparelhos e equipamentos para instalações térmicas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314707-manutencao-e-reparacao-de-maquinas-e-aparelhos-de-refrigeracao-e-ventilacao-para-uso-industrial-e-comercial">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/07</span> - Manutenção e reparação de máquinas e aparelhos de refrigeração e ventilação para uso industrial e comercial</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314709-manutencao-e-reparacao-de-maquinas-de-escrever-calcular-e-de-outros-equipamentos-nao-eletronicos-para-escritorio">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/09</span> - Manutenção e reparação de máquinas de escrever, calcular e de outros equipamentos não eletrônicos para escritório</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314710-manutencao-e-reparacao-de-maquinas-e-equipamentos-para-uso-geral-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/10</span> - Manutenção e reparação de máquinas e equipamentos para uso geral não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314711-manutencao-e-reparacao-de-maquinas-e-equipamentos-para-agricultura-e-pecuaria">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/11</span> - Manutenção e reparação de máquinas e equipamentos para agricultura e pecuária</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314712-manutencao-e-reparacao-de-tratores-agricolas">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/12</span> - Manutenção e reparação de tratores agrícolas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314719-manutencao-e-reparacao-de-maquinas-e-equipamentos-para-as-industrias-de-alimentos-bebidas-e-fumo">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/19</span> - Manutenção e reparação de máquinas e equipamentos para as indústrias de alimentos, bebidas e fumo</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314720-manutencao-e-reparacao-de-maquinas-e-equipamentos-para-a-industria-textil-do-vestuario-do-couro-e-calcados">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/20</span> - Manutenção e reparação de máquinas e equipamentos para a indústria têxtil, do vestuário, do couro e calçados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3314799-manutencao-e-reparacao-de-outras-maquinas-e-equipamentos-para-usos-industriais-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">3314-7/99</span> - Manutenção e reparação de outras máquinas e equipamentos para usos industriais não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3317101-manutencao-e-reparacao-de-embarcacoes-para-esporte-e-lazer">
                            <span class="wrapper">
                                  <span class="codigo">3317-1/02</span> - Manutenção e reparação de embarcações para esporte e lazer</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/manutencao-reparacao-e-instalacao-de-maquinas-e-equipamentos/3319800-manutencao-e-reparacao-de-equipamentos-e-produtos-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">3319-8/00</span> - Manutenção e reparação de equipamentos e produtos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4321500-instalacao-e-manutencao-eletrica">
                            <span class="wrapper">
                                  <span class="codigo">4321-5/00</span> - Instalação e manutenção elétrica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4322301-instalacoes-hidraulicas-sanitarias-e-de-gas">
                            <span class="wrapper">
                                  <span class="codigo">4322-3/01</span> - Instalações hidráulicas, sanitárias e de gás</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4322302-instalacao-e-manutencao-de-sistemas-centrais-de-ar-condicionado-de-ventilacao-e-refrigeracao">
                            <span class="wrapper">
                                  <span class="codigo">4322-3/02</span> - Instalação e manutenção de sistemas centrais de ar condicionado, de ventilação e refrigeração</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4322303-instalacoes-de-sistema-de-prevencao-contra-incendio">
                            <span class="wrapper">
                                  <span class="codigo">4322-3/03</span> - Instalações de sistema de prevenção contra incêndio</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4329101-instalacao-de-paineis-publicitarios">
                            <span class="wrapper">
                                  <span class="codigo">4329-1/01</span> - Instalação de painéis publicitários</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4329102-instalacao-de-equipamentos-para-orientacao-a-navegacao-maritima-fluvial-e-lacustre">
                            <span class="wrapper">
                                  <span class="codigo">4329-1/02</span> - Instalação de equipamentos para orientação à navegação marítima fluvial e lacustre</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4329103-instalacao-manutencao-e-reparacao-de-elevadores-escadas-e-esteiras-rolantes">
                            <span class="wrapper">
                                  <span class="codigo">4329-1/03</span> - Instalação, manutenção e reparação de elevadores, escadas e esteiras rolantes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4329105-tratamentos-termicos-acusticos-ou-de-vibracao">
                            <span class="wrapper">
                                  <span class="codigo">4329-1/05</span> - Tratamentos térmicos, acústicos ou de vibração</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-especializados-para-construcao/4399101-administracao-de-obras">
                            <span class="wrapper">
                                  <span class="codigo">4399-1/01</span> - Administração de obras</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4312901-representantes-comerciais-e-agentes-do-comercio-de-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4512-9/01</span> - Representantes comerciais e agentes do comércio de veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520001-servicos-de-manutencao-e-reparacao-mecanica-de-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/01</span> - Serviços de manutenção e reparação mecânica de veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520002-servicos-de-lanternagem-ou-funilaria-e-pintura-de-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/02</span> - Serviços de lanternagem ou funilaria e pintura de veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520003-servicos-de-manutencao-e-reparacao-eletrica-de-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/03</span> - Serviços de manutenção e reparação elétrica de veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520005-servicos-de-lavagem-lubrificacao-e-polimento-de-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/05</span> - Serviços de lavagem, lubrificação e polimento de veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520006-servicos-de-borracharia-para-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/06</span> - Serviços de borracharia para veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520007-servicos-de-instalacao-manutencao-e-reparacao-de-acessorios-para-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/07</span> - Serviços de instalação, manutenção e reparação de acessórios para veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4520008-servicos-de-capotaria">
                            <span class="wrapper">
                                  <span class="codigo">4520-0/08</span> - Serviços de capotaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4530703-comercio-a-varejo-de-pecas-e-acessorios-novos-para-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4530-7/03</span> - Comércio a varejo de peças e acessórios novos para veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4530704-comercio-a-varejo-de-pecas-e-acessorios-usados-para-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4530-7/04</span> - Comércio a varejo de peças e acessórios usados para veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4530705-comercio-a-varejo-de-pneumaticos-e-camaras-de-ar">
                            <span class="wrapper">
                                  <span class="codigo">4530-7/05</span> - Comércio a varejo de pneumáticos e câmaras de ar</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4530706-representantes-comerciais-e-agentes-do-comercio-de-pecas-e-acessorios-novos-e-usados-para-veiculos-automotores">
                            <span class="wrapper">
                                  <span class="codigo">4530-7/06</span> - Representantes comerciais e agentes do comércio de peças e acessórios novos e usados para veículos automotores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4541206-comercio-a-varejo-de-pecas-e-acessorios-novos-para-motocicletas-e-motonetas">
                            <span class="wrapper">
                                  <span class="codigo">4541-2/06</span> - Comércio a varejo de peças e acessórios novos para motocicletas e motonetas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4541207-comercio-a-varejo-de-pecas-e-acessorios-usados-para-motocicletas-e-motonetas">
                            <span class="wrapper">
                                  <span class="codigo">4541-2/07</span> - Comércio a varejo de peças e acessórios usados para motocicletas e motonetas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4542101-representantes-comerciais-e-agentes-do-comercio-de-motocicletas-e-motonetas-pecas-e-acessorios">
                            <span class="wrapper">
                                  <span class="codigo">4542-1/01</span> - Representantes comerciais e agentes do comércio de motocicletas e motonetas, peças e acessórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-e-reparacao-de-veiculos-automotores-e-motocicletas/4543900-manutencao-e-reparacao-de-motocicletas-e-motonetas">
                            <span class="wrapper">
                                  <span class="codigo">4543-9/00</span> - Manutenção e reparação de motocicletas e motonetas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4611700-representantes-comerciais-e-agentes-do-comercio-de-materias-primas-agricolas-e-animais-vivos">
                            <span class="wrapper">
                                  <span class="codigo">4611-7/00</span> - Representantes comerciais e agentes do comércio de matérias primas agrícolas e animais vivos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4612500-representantes-comerciais-e-agentes-do-comercio-de-combustiveis-minerais-produtos-siderurgicos-e-quimicos">
                            <span class="wrapper">
                                  <span class="codigo">4612-5/00</span> - Representantes comerciais e agentes do comércio de combustíveis, minerais, produtos siderúrgicos e químicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4613300-representantes-comerciais-e-agentes-do-comercio-de-madeira-material-de-construcao-e-ferragens">
                            <span class="wrapper">
                                  <span class="codigo">4613-3/00</span> - Representantes comerciais e agentes do comércio de madeira, material de construção e ferragens</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4614100-representantes-comerciais-e-agentes-do-comercio-de-maquinas-equipamentos-embarcacoes-e-aeronaves">
                            <span class="wrapper">
                                  <span class="codigo">4614-1/00</span> - Representantes comerciais e agentes do comércio de máquinas, equipamentos, embarcações e aeronaves</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4615000-representantes-comerciais-e-agentes-do-comercio-de-eletrodomesticos-moveis-e-artigos-de-uso-domestico">
                            <span class="wrapper">
                                  <span class="codigo">4615-0/00</span> - Representantes comerciais e agentes do comércio de eletrodomésticos, móveis e artigos de uso doméstico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4616800-representantes-comerciais-e-agentes-do-comercio-de-texteis-vestuario-calcados-e-artigos-de-viagem">
                            <span class="wrapper">
                                  <span class="codigo">4616-8/00</span> - Representantes comerciais e agentes do comércio de têxteis, vestuário, calçados e artigos de viagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4617600-representantes-comerciais-e-agentes-do-comercio-de-produtos-alimenticios-bebidas-e-fumo">
                            <span class="wrapper">
                                  <span class="codigo">4617-6/00</span> - Representantes comerciais e agentes do comércio de produtos alimentícios, bebidas e fumo</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4618401-representantes-comerciais-e-agentes-do-comercio-de-medicamentos-cosmeticos-e-produtos-de-perfumaria">
                            <span class="wrapper">
                                  <span class="codigo">4618-4/01</span> - Representantes comerciais e agentes do comércio de medicamentos, cosméticos e produtos de perfumaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4618402-representantes-comerciais-e-agentes-do-comercio-de-instrumentos-e-materiais-odonto-medico-hospitalares">
                            <span class="wrapper">
                                  <span class="codigo">4618-4/02</span> - Representantes comerciais e agentes do comércio de instrumentos e materiais odonto médico hospitalares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4618403-representantes-comerciais-e-agentes-do-comercio-de-jornais-revistas-e-outras-publicacoes">
                            <span class="wrapper">
                                  <span class="codigo">4618-4/03</span> - Representantes comerciais e agentes do comércio de jornais, revistas e outras publicações</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4618499-outros-representantes-comerciais-e-agentes-do-comercio-especializado-em-produtos-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">4618-4/99</span> - Outros representantes comerciais e agentes do comércio especializado em produtos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4619200-representantes-comerciais-e-agentes-do-comercio-de-mercadorias-em-geral-nao-especializado">
                            <span class="wrapper">
                                  <span class="codigo">4619-2/00</span> - Representantes comerciais e agentes do comércio de mercadorias em geral não especializado</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4711301-comercio-varejista-de-mercadorias-em-geral-com-predominancia-de-produtos-alimenticios-hipermercados">
                            <span class="wrapper">
                                  <span class="codigo">4711-3/01</span> - Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios hipermercados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4711302-comercio-varejista-de-mercadorias-em-geral-com-predominancia-de-produtos-alimenticios-supermercados">
                            <span class="wrapper">
                                  <span class="codigo">4711-3/02</span> - Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios - supermercados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4712100-comercio-varejista-de-mercadorias-em-geral-com-predominancia-de-produtos-alimenticios-minimercados-mercearias-e-armazens">
                            <span class="wrapper">
                                  <span class="codigo">4712-1/00</span> - Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios - minimercados, mercearias e armazéns</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4713002-lojas-de-variedades-%20exceto-lojas-de-departamentos-ou-magazines">
                            <span class="wrapper">
                                  <span class="codigo">4713-0/02</span> - Lojas de variedades, exceto lojas de departamentos ou magazines</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4713004-lojas-de-departamentos-ou-magazines-exceto-lojas-francas-(duty-free)">
                            <span class="wrapper">
                                  <span class="codigo">4713-0/04</span> - Lojas de departamentos ou magazines, exceto lojas francas (duty free)</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4721102-padaria-e-confeitaria-com-predominancia-de-revenda">
                            <span class="wrapper">
                                  <span class="codigo">4721-1/02</span> - Padaria e confeitaria com predominância de revenda</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4721103-comercio-varejista-de-laticinios-e-frios">
                            <span class="wrapper">
                                  <span class="codigo">4721-1/03</span> - Comércio varejista de laticínios e frios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4721104-comercio-varejista-de-doces-balas-bombons-e-semelhantes">
                            <span class="wrapper">
                                  <span class="codigo">4721-1/04</span> - Comércio varejista de doces, balas, bombons e semelhantes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4723700-comercio-varejista-de-bebidas">
                            <span class="wrapper">
                                  <span class="codigo">4723-7/00</span> - Comércio varejista de bebidas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4724500-comercio-varejista-de-hortifrutigranjeiros">
                            <span class="wrapper">
                                  <span class="codigo">4724-5/00</span> - Comércio varejista de hortifrutigranjeiros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4729601-tabacaria">
                            <span class="wrapper">
                                  <span class="codigo">4729-6/01</span> - Tabacaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4729602-comercio-varejista-de-mercadorias-em-lojas-de-conveniencia">
                            <span class="wrapper">
                                  <span class="codigo">4729-6/02</span> - Comércio varejista de mercadorias em lojas de conveniência</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4729699-comercio-varejista-de-produtos-alimenticios-em-geral-ou-especializado-em-produtos-alimenticios-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">4729-6/99</span> - Comércio varejista de produtos alimentícios em geral ou especializado em produtos alimentícios não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4741500-comercio-varejista-de-tintas-e-materiais-para-pintura">
                            <span class="wrapper">
                                  <span class="codigo">4741-5/00</span> - Comércio varejista de tintas e materiais para pintura</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4742300-comercio-varejista-de-material-eletrico">
                            <span class="wrapper">
                                  <span class="codigo">4742-3/00</span> - Comércio varejista de material elétrico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4743100-comercio-varejista-de-vidros">
                            <span class="wrapper">
                                  <span class="codigo">4743-1/00</span> - Comércio varejista de vidros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744001-comercio-varejista-de-ferragens-e-ferramentas">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/01</span> - Comércio varejista de ferragens e ferramentas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744002-comercio-varejista-de-madeira-e-artefatos">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/02</span> - Comércio varejista de madeira e artefatos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744003-comercio-varejista-de-materiais-hidraulicos">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/03</span> - Comércio varejista de materiais hidráulicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744004-comercio-varejista-de-cal-areia-pedra-britada-tijolos-e-telhas">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/04</span> - Comércio varejista de cal, areia, pedra britada, tijolos e telhas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744005-comercio-varejista-de-materiais-de-construcao-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/05</span> - Comércio varejista de materiais de construção não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744006-comercio-varejista-de-pedras-para-revestimento">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/06</span> - Comércio varejista de pedras para revestimento</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4744099-comercio-varejista-de-materiais-de-construcao-em-geral">
                            <span class="wrapper">
                                  <span class="codigo">4744-0/99</span> - Comércio varejista de materiais de construção em geral</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4751201-comercio-varejista-especializado-de-equipamentos-e-suprimentos-de-informatica">
                            <span class="wrapper">
                                  <span class="codigo">4751-2/01</span> - Comércio varejista especializado de equipamentos e suprimentos de informática</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-por-atacado-exceto-veiculos-automotores-e-motocicletas/4751202-recarga-de-cartuchos-para-equipamentos-de-informatica">
                            <span class="wrapper">
                                  <span class="codigo">4751-2/02</span> - Recarga de cartuchos para equipamentos de informática</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4752100-comercio-varejista-especializado-de-equipamentos-de-telefonia-e-comunicacao">
                            <span class="wrapper">
                                  <span class="codigo">4752-1/00</span> - Comércio varejista especializado de equipamentos de telefonia e comunicação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4753900-comercio-varejista-especializado-de-eletrodomesticos-e-equipamentos-de-audio-e-video">
                            <span class="wrapper">
                                  <span class="codigo">4753-9/00</span> - Comércio varejista especializado de eletrodomésticos e equipamentos de áudio e vídeo</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4754701-comercio-varejista-de-moveis">
                            <span class="wrapper">
                                  <span class="codigo">4754-7/01</span> - Comércio varejista de móveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4754702-comercio-varejista-de-artigos-de-colchoaria">
                            <span class="wrapper">
                                  <span class="codigo">4754-7/02</span> - Comércio varejista de artigos de colchoaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4754703-comercio-varejista-de-artigos-de-iluminacao">
                            <span class="wrapper">
                                  <span class="codigo">4754-7/03</span> - Comércio varejista de artigos de iluminação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4755501-comercio-varejista-de-tecidos">
                            <span class="wrapper">
                                  <span class="codigo">4755-5/01</span> - Comércio varejista de tecidos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4755502-comercio-varejista-de-artigos-de-armarinho">
                            <span class="wrapper">
                                  <span class="codigo">4755-5/02</span> - Comercio varejista de artigos de armarinho</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4755503-comercio-varejista-de-artigos-de-cama-mesa-e-banho">
                            <span class="wrapper">
                                  <span class="codigo">4755-5/03</span> - Comercio varejista de artigos de cama, mesa e banho</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4756300-comercio-varejista-especializado-de-instrumentos-musicais-e-acessorios">
                            <span class="wrapper">
                                  <span class="codigo">4756-3/00</span> - Comércio varejista especializado de instrumentos musicais e acessórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4757100-comercio-varejista-especializado-de-pecas-e-acessorios-para-aparelhos-eletroeletronicos-para-uso-domestico-exceto-informatica-e-comunicacao">
                            <span class="wrapper">
                                  <span class="codigo">4757-1/00</span> - Comércio varejista especializado de peças e acessórios para aparelhos eletroeletrônicos para uso doméstico, exceto informática e comunicação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4759801-comercio-varejista-de-artigos-de-tapecaria-cortinas-e-persianas">
                            <span class="wrapper">
                                  <span class="codigo">4759-8/01</span> - Comércio varejista de artigos de tapeçaria, cortinas e persianas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4759899-comercio-varejista-de-outros-artigos-de-uso-pessoal-e-domestico-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">4759-8/99</span> - Comércio varejista de outros artigos de uso pessoal e doméstico não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4761001-comercio-varejista-de-livros">
                            <span class="wrapper">
                                  <span class="codigo">4761-0/01</span> - Comércio varejista de livros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4761002-comercio-varejista-de-jornais-e-revistas">
                            <span class="wrapper">
                                  <span class="codigo">4761-0/02</span> - Comércio varejista de jornais e revistas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4761003-comercio-varejista-de-artigos-de-papelaria">
                            <span class="wrapper">
                                  <span class="codigo">4761-0/03</span> - Comércio varejista de artigos de papelaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4762800-comercio-varejista-de-discos-cds-dvds-e-fitas">
                            <span class="wrapper">
                                  <span class="codigo">4762-8/00</span> - Comércio varejista de discos, cds, dvds e fitas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4763601-comercio-varejista-de-brinquedos-e-artigos-recreativos">
                            <span class="wrapper">
                                  <span class="codigo">4763-6/01</span> - Comércio varejista de brinquedos e artigos recreativos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4763602-comercio-varejista-de-artigos-esportivos">
                            <span class="wrapper">
                                  <span class="codigo">4763-6/02</span> - Comércio varejista de artigos esportivos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4763603-comercio-varejista-de-bicicletas-e-triciclos-pecas-e-acessorios">
                            <span class="wrapper">
                                  <span class="codigo">4763-6/03</span> - Comércio varejista de bicicletas e triciclos; peças e acessórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4763604-comercio-varejista-de-artigos-de-caca-pesca-e-camping">
                            <span class="wrapper">
                                  <span class="codigo">4763-6/04</span> - Comércio varejista de artigos de caça, pesca e camping</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4771704-comercio-varejista-de-medicamentos-veterinarios">
                            <span class="wrapper">
                                  <span class="codigo">4771-7/04</span> - Comércio varejista de medicamentos veterinários</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4772500-comercio-varejista-de-cosmeticos-produtos-de-perfumaria-e-de-higiene-pessoal">
                            <span class="wrapper">
                                  <span class="codigo">4772-5/00</span> - Comércio varejista de cosméticos, produtos de perfumaria e de higiene pessoal</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4774100-comercio-varejista-de-artigos-de-optica">
                            <span class="wrapper">
                                  <span class="codigo">4774-1/00</span> - Comércio varejista de artigos de óptica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4781400-comercio-varejista-de-artigos-do-vestuario-e-acessorios">
                            <span class="wrapper">
                                  <span class="codigo">4781-4/00</span> - Comércio varejista de artigos do vestuário e acessórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4782201-comercio-varejista-de-calcados">
                            <span class="wrapper">
                                  <span class="codigo">4782-2/01</span> - Comércio varejista de calçados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4782202-comercio-varejista-de-artigos-de-viagem">
                            <span class="wrapper">
                                  <span class="codigo">4782-2/02</span> - Comércio varejista de artigos de viagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4783102-comercio-varejista-de-artigos-de-relojoaria">
                            <span class="wrapper">
                                  <span class="codigo">4783-1/02</span> - Comércio varejista de artigos de relojoaria</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4785701-comercio-varejista-de-antiguidades">
                            <span class="wrapper">
                                  <span class="codigo">4785-7/01</span> - Comércio varejista de antigüidades</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4785799-comercio-varejista-de-outros-artigos-usados">
                            <span class="wrapper">
                                  <span class="codigo">4785-7/99</span> - Comércio varejista de outros artigos usados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789001-comercio-varejista-de-suvenires-bijuterias-e-artesanatos">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/01</span> - Comércio varejista de suvenires, bijuterias e artesanatos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789002-comercio-varejista-de-plantas-e-flores-naturais">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/02</span> - Comércio varejista de plantas e flores naturais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789003-comercio-varejista-de-objetos-de-arte">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/03</span> - Comércio varejista de objetos de arte</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789007-comercio-varejista-de-equipamentos-para-escritorio">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/07</span> - Comércio varejista de equipamentos para escritório</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789008-comercio-varejista-de-artigos-fotograficos-e-para-filmagem">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/08</span> - Comércio varejista de artigos fotográficos e para filmagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/comercio-varejista/4789099-comercio-varejista-de-outros-produtos-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">4789-0/99</span> - Comércio varejista de outros produtos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/armazenamento-e-atividades-auxiliares-dos-transportes/5211702-guarda-moveis">
                            <span class="wrapper">
                                  <span class="codigo">5211-7/02</span> - Guarda móveis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/correio-e-outras-atividades-de-entrega/5320201-servicos-de-malote-nao-realizados-pelo-correio-nacional">
                            <span class="wrapper">
                                  <span class="codigo">5320-2/01</span> - Serviços de malote não realizados pelo correio nacional</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/correio-e-outras-atividades-de-entrega/5320202-servicos-de-entrega-rapida">
                            <span class="wrapper">
                                  <span class="codigo">5320-2/02</span> - Serviços de entrega rápida</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alojamento/5510801-hoteis">
                            <span class="wrapper">
                                  <span class="codigo">5510-8/01</span> - Hotéis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alojamento/5510802-apart-hoteis">
                            <span class="wrapper">
                                  <span class="codigo">5510-8/02</span> - Apart hotéis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alojamento/5510803-moteis">
                            <span class="wrapper">
                                  <span class="codigo">5510-8/03</span> - Motéis</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5611201-restaurantes-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">5611-2/01</span> - Restaurantes e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5611203-lanchonetes-casas-de-cha-de-sucos-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">5611-2/03</span> - Lanchonetes, casas de chá, de sucos e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5611204-bares-e-outros-estabelecimentos-especializados-em-servir-bebidas-sem-entretenimento">
                            <span class="wrapper">
                                  <span class="codigo">5611-2/04</span> - Bares e outros estabelecimentos especializados em servir bebidas, sem entretenimento</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5620101-fornecimento-de-alimentos-preparados-preponderantemente-para-empresas">
                            <span class="wrapper">
                                  <span class="codigo">5620-1/01</span> - Fornecimento de alimentos preparados preponderantemente para empresas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5620103-cantinas-servicos-de-alimentacao-privativos">
                            <span class="wrapper">
                                  <span class="codigo">5620-1/03</span> - Cantinas - serviços de alimentação privativos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alimentacao/5620104-fornecimento-de-alimentos-preparados-preponderantemente-para-consumo-domiciliar">
                            <span class="wrapper">
                                  <span class="codigo">5620-1/04</span> - Fornecimento de alimentos preparados preponderantemente para consumo domiciliar</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/edicao-e-edicao-integrada-a-impressao/5811500-edicao-de-livros">
                            <span class="wrapper">
                                  <span class="codigo">5811-5/00</span> - Edição de livros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/edicao-e-edicao-integrada-a-impressao/5812301-edicao-de-jornais-diarios">
                            <span class="wrapper">
                                  <span class="codigo">5812-3/01</span> - Edição de jornais diários</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/edicao-e-edicao-integrada-a-impressao/5812302-edicao-de-jornais-nao-diarios">
                            <span class="wrapper">
                                  <span class="codigo">5812-3/02</span> - Edição de jornais não diários</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/edicao-e-edicao-integrada-a-impressao/5813100-edicao-de-revistas">
                            <span class="wrapper">
                                  <span class="codigo">5813-1/00</span> - Edição de revistas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/edicao-e-edicao-integrada-a-impressao/5819100-edicao-de-cadastros-listas-e-de-outros-produtos-graficos">
                            <span class="wrapper">
                                  <span class="codigo">5819-1/00</span> - Edição de cadastros, listas e de outros produtos gráficos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5911101-estudios-cinematograficos">
                            <span class="wrapper">
                                  <span class="codigo">5911-1/01</span> - Estúdios cinematográficos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade/5911102-producao-de-filmes-para-publicidade">
                            <span class="wrapper">
                                  <span class="codigo">5911-1/02</span> - Produção de filmes para publicidade</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5911199-atividades-de-producao-cinematografica-de-videos-e-de-programas-de-televisao-nao-especificadas">
                            <span class="wrapper">
                                  <span class="codigo">5911-1/99</span> - Atividades de produção cinematográfica, de vídeos e de programas de televisão não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5912001-servicos-de-dublagem">
                            <span class="wrapper">
                                  <span class="codigo">5912-0/01</span> - Serviços de dublagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5912002-servicos-de-mixagem-sonora-em-producao-audiovisual">
                            <span class="wrapper">
                                  <span class="codigo">5912-0/02</span> - Serviços de mixagem sonora em produção audiovisual</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5912099-atividades-de-pos-producao-cinematografica-de-videos-e-de-programas-de-televisao-nao-especifica">
                            <span class="wrapper">
                                  <span class="codigo">5912-0/99</span> - Atividades de pós produção cinematográfica, de vídeos e de programas de televisão não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5913800-distribuicao-cinematografica-de-video-e-de-programas-de-televisao">
                            <span class="wrapper">
                                  <span class="codigo">5913-8/00</span> - Distribuição cinematográfica, de vídeo e de programas de televisão</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5914600-atividades-de-exibicao-cinematografica">
                            <span class="wrapper">
                                  <span class="codigo">5914-6/00</span> - Atividades de exibição cinematográfica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-cinematograficas-producao-de-videos-e-de-programas-de-televisao-gravacao-de-som-e-edicao-de-musica/5920100-atividades-de-gravacao-de-som-e-de-edicao-de-musica">
                            <span class="wrapper">
                                  <span class="codigo">5920-1/00</span> - Atividades de gravação de som e de edição de música</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6311900-tratamento-de-dados-provedores-de-servicos-de-aplicacao-e-servicos-de-hospedagem-na-internet">
                            <span class="wrapper">
                                  <span class="codigo">6311-9/00</span> - Tratamento de dados, provedores de serviços de aplicação e serviços de hospedagem na internet</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6319400-portais-provedores-de-conteudo-e-outros-servicos-de-informacao-na-internet">
                            <span class="wrapper">
                                  <span class="codigo">6319-4/00</span> - Portais, provedores de conteúdo e outros serviços de informação na internet</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-prestacao-de-servicos-de-informacao/6391700-agencias-de-noticias">
                            <span class="wrapper">
                                  <span class="codigo">6391-7/00</span> - Agências de notícias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-prestacao-de-servicos-de-informacao/6399200-outras-atividades-de-prestacao-de-servicos-de-informacao-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">6399-2/00</span> - Outras atividades de prestação de serviços de informação não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6612605-agentes-de-investimentos-em-aplicacoes-financeiras">
                            <span class="wrapper">
                                  <span class="codigo">6612-6/05</span> - Agentes de investimentos em aplicações financeiras</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6619302-correspondentes-de-instituicoes-financeiras">
                            <span class="wrapper">
                                  <span class="codigo">6619-3/02</span> - Correspondentes de instituições financeiras</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6621501-peritos-e-avaliadores-de-seguros">
                            <span class="wrapper">
                                  <span class="codigo">6621-5/01</span> - Peritos e avaliadores de seguros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6621502-auditoria-e-consultoria-atuarial">
                            <span class="wrapper">
                                  <span class="codigo">6621-5/02</span> - Auditoria e consultoria atuarial</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6622300-corretores-e-agentes-de-seguros-de-planos-de-previdencia-complementar-e-de-saude">
                            <span class="wrapper">
                                  <span class="codigo">6622-3/00</span> - Corretores e agentes de seguros, de planos de previdência complementar e de saúde</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6629100-atividades-auxiliares-dos-seguros-da-previdencia-complementar-e-dos-planos-de-saude-nao-especificadas-anter">
                            <span class="wrapper">
                                  <span class="codigo">6629-1/00</span> - Atividades auxiliares dos seguros, da previdência complementar e dos planos de saúde não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-auxiliares-dos-servicos-financeiros-seguros-previdencia-complementar-e-planos-de-saude/6630400-atividades-de-administracao-de-fundos-por-contrato-ou-comissao">
                            <span class="wrapper">
                                  <span class="codigo">6630-4/00</span> - Atividades de administração de fundos por contrato ou comissão</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-juridicas-de-contabilidade-e-de-auditoria/6911702-atividades-auxiliares-da-justica">
                            <span class="wrapper">
                                  <span class="codigo">6911-7/02</span> - Atividades auxiliares da justiça</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-juridicas-de-contabilidade-e-de-auditoria/6911703-agente-de-propriedade-industrial">
                            <span class="wrapper">
                                  <span class="codigo">6911-7/03</span> - Agente de propriedade industrial</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/consultoria/7020400-atividades-de-consultoria-em-gestao-empresarial-exceto-consultoria-tecnica-especifica">
                            <span class="wrapper">
                                  <span class="codigo">7020-4/00</span> - Atividades de consultoria em gestão empresarial, exceto consultoria técnica específica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-arquitetura-e-engenharia-testes-e-analises-tecnicas/7119701-servicos-de-cartografia-topografia-e-geodesia">
                            <span class="wrapper">
                                  <span class="codigo">7119-7/01</span> - Serviços de cartografia, topografia e geodésia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-arquitetura-e-engenharia-testes-e-analises-tecnicas/7119702-atividades-de-estudos-geologicos">
                            <span class="wrapper">
                                  <span class="codigo">7119-7/02</span> - Atividades de estudos geológicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-arquitetura-e-engenharia-testes-e-analises-tecnicas/7119704-servicos-de-pericia-tecnica-relacionados-a-seguranca-do-trabalho">
                            <span class="wrapper">
                                  <span class="codigo">7119-7/04</span> - Serviços de perícia técnica relacionados à segurança do trabalho</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-arquitetura-e-engenharia-testes-e-analises-tecnicas/7120100-testes-e-analises-tecnicas">
                            <span class="wrapper">
                                  <span class="codigo">7120-1/00</span> - Testes e análises técnicas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/pesquisa-e-desenvolvimento-cientifico/7210000-pesquisa-e-desenvolvimento-experimental-em-ciencias-fisicas-e-naturais">
                            <span class="wrapper">
                                  <span class="codigo">7210-0/00</span> - Pesquisa e desenvolvimento experimental em ciências físicas e naturais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/pesquisa-e-desenvolvimento-cientifico/7220700-pesquisa-e-desenvolvimento-experimental-em-ciencias-sociais-e-humanas">
                            <span class="wrapper">
                                  <span class="codigo">7220-7/00</span> - Pesquisa e desenvolvimento experimental em ciências sociais e humanas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade-e-pesquisa-de-mercado/7312200-agenciamento-de-espacos-para-publicidade-exceto-em-veiculos-de-comunicacao">
                            <span class="wrapper">
                                  <span class="codigo">7312-2/00</span> - Agenciamento de espaços para publicidade, exceto em veículos de comunicação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade-e-pesquisa-de-mercado/7319001-criacao-estandes-para-feiras-e-exposicoes">
                            <span class="wrapper">
                                  <span class="codigo">7319-0/01</span> - Criação estandes para feiras e exposições</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/publicidade-e-pesquisa-de-mercado/7320300-pesquisas-de-mercado-e-de-opiniao-publica">
                            <span class="wrapper">
                                  <span class="codigo">7320-3/00</span> - Pesquisas de mercado e de opinião pública</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/arquitetura/7410202-design-de-interiores">
                            <span class="wrapper">
                                  <span class="codigo">7410-2/02</span> - Design de interiores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7410203-design-de-produto">
                            <span class="wrapper">
                                  <span class="codigo">7410-2/03</span> - Design de produto</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7410299-atividades-de-design-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">7410-2/99</span> - Atividades de design não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7420001-atividades-de-producao-de-fotografias-exceto-aerea-e-submarina">
                            <span class="wrapper">
                                  <span class="codigo">7420-0/01</span> - Atividades de produção de fotografias, exceto aérea e submarina</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7420002-atividades-de-producao-de-fotografias-aereas-e-submarinas">
                            <span class="wrapper">
                                  <span class="codigo">7420-0/02</span> - Atividades de produção de fotografias aéreas e submarinas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7420003-laboratorios-fotograficos">
                            <span class="wrapper">
                                  <span class="codigo">7420-0/03</span> - Laboratórios fotográficos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7420004-filmagem-de-festas-e-eventos">
                            <span class="wrapper">
                                  <span class="codigo">7420-0/04</span> - Filmagem de festas e eventos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7420005-servicos-de-microfilmagem">
                            <span class="wrapper">
                                  <span class="codigo">7420-0/05</span> - Serviços de microfilmagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490101-servicos-de-traducao-interpretacao-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/01</span> - Serviços de tradução, interpretação e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490102-escafandria-e-mergulho">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/02</span> - Escafandria e mergulho</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490103-servicos-de-agronomia-e-de-consultoria-as-atividades-agricolas-e-pecuarias">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/03</span> - Serviços de agronomia e de consultoria às atividades agrícolas e pecuárias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490104-atividades-de-intermediacao-e-agenciamento-de-servicos-e-negocios-em-geral-exceto-imobiliarios">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/04</span> - Atividades de intermediação e agenciamento de serviços e negócios em geral, exceto imobiliários</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490105-agenciamento-de-profissionais-para-atividades-esportivas-culturais-e-artisticas">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/05</span> - Agenciamento de profissionais para atividades esportivas, culturais e artísticas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-profissionais-cientificas-e-tecnicas/7490199-outras-atividades-profissionais-cientificas-e-tecnicas-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">7490-1/99</span> - Outras atividades profissionais, científicas e técnicas não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-veterinarias/7500100-atividades-veterinarias">
                            <span class="wrapper">
                                  <span class="codigo">7500-1/00</span> - Atividades veterinárias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7721700-aluguel-de-equipamentos-recreativos-e-esportivos">
                            <span class="wrapper">
                                  <span class="codigo">7721-7/00</span> - Aluguel de equipamentos recreativos e esportivos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7722500-aluguel-de-fitas-de-video-dvds-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">7722-5/00</span> - Aluguel de fitas de vídeo, dvds e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7723300-aluguel-de-objetos-do-vestuario-joias-e-acessorios">
                            <span class="wrapper">
                                  <span class="codigo">7723-3/00</span> - Aluguel de objetos do vestuário, jóias e acessórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7729201-aluguel-de-aparelhos-de-jogos-eletronicos">
                            <span class="wrapper">
                                  <span class="codigo">7729-2/01</span> - Aluguel de aparelhos de jogos eletrônicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7729202-aluguel-de-moveis-utensilios-e-aparelhos-de-uso-domestico-e-pessoal-instrumentos-musicais">
                            <span class="wrapper">
                                  <span class="codigo">7729-2/02</span> - Aluguel de móveis, utensílios e aparelhos de uso doméstico e pessoal; instrumentos musicais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7729203-aluguel-de-material-medico">
                            <span class="wrapper">
                                  <span class="codigo">7729-2/03</span> - Aluguel de material médico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7729299-aluguel-de-outros-objetos-pessoais-e-domesticos-nao-especificados-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">7729-2/99</span> - Aluguel de outros objetos pessoais e domésticos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7731400-aluguel-de-maquinas-e-equipamentos-agricolas-sem-operador">
                            <span class="wrapper">
                                  <span class="codigo">7731-4/00</span> - Aluguel de máquinas e equipamentos agrícolas sem operador</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7732201-aluguel-de-maquinas-e-equipamentos-para-construcao-sem-operador-exceto-andaimes">
                            <span class="wrapper">
                                  <span class="codigo">7732-2/01</span> - Aluguel de máquinas e equipamentos para construção sem operador, exceto andaimes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7732202-aluguel-de-andaimes">
                            <span class="wrapper">
                                  <span class="codigo">7732-2/02</span> - Aluguel de andaimes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7733100-aluguel-de-maquinas-e-equipamentos-para-escritorios">
                            <span class="wrapper">
                                  <span class="codigo">7733-1/00</span> - Aluguel de máquinas e equipamentos para escritórios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7739001-aluguel-de-maquinas-e-equipamentos-para-extracao-de-minerios-e-petroleo-sem-operador">
                            <span class="wrapper">
                                  <span class="codigo">7739-0/01</span> - Aluguel de máquinas e equipamentos para extração de minérios e petróleo, sem operador</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7739002-aluguel-de-equipamentos-cientificos-medicos-e-hospitalares-sem-operador">
                            <span class="wrapper">
                                  <span class="codigo">7739-0/02</span> - Aluguel de equipamentos científicos, médicos e hospitalares, sem operador</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7739003-aluguel-de-palcos-coberturas-e-outras-estruturas-de-uso-temporario-exceto-andaimes">
                            <span class="wrapper">
                                  <span class="codigo">7739-0/03</span> - Aluguel de palcos, coberturas e outras estruturas de uso temporário, exceto andaimes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com//consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7739099-aluguel-de-outras-maquinas-e-equipamentos-comerciais-e-industriais-nao-especificados-anteriormente-sem-operador">
                            <span class="wrapper">
                                  <span class="codigo">7739-0/99</span> - Aluguel de outras máquinas e equipamentos comerciais e industriais não especificados anteriormente, sem operador</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/alugueis-nao-imobiliarios-e-gestao-de-ativos-intangiveis-nao-financeiros/7740300-gestao-de-ativos-intangiveis-nao-financeiros">
                            <span class="wrapper">
                                  <span class="codigo">7740-3/00</span> - Gestão de ativos intangíveis não financeiros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-vigilancia-seguranca-e-investigacao/8011102-servicos-de-adestramento-de-caes-de-guarda">
                            <span class="wrapper">
                                  <span class="codigo">8011-1/02</span> - Serviços de adestramento de cães de guarda</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-vigilancia-seguranca-e-investigacao/8030700-atividades-de-investigacao-particular">
                            <span class="wrapper">
                                  <span class="codigo">8030-7/00</span> - Atividades de investigação particular</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-para-edificios-e-atividades-paisagisticas/8121400-limpeza-em-predios-e-em-domicilios">
                            <span class="wrapper">
                                  <span class="codigo">8121-4/00</span> - Limpeza em prédios e em domicílios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-para-edificios-e-atividades-paisagisticas/8122200-imunizacao-e-controle-de-pragas-urbanas">
                            <span class="wrapper">
                                  <span class="codigo">8122-2/00</span> - Imunização e controle de pragas urbanas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-para-edificios-e-atividades-paisagisticas/8129000-atividades-de-limpeza-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8129-0/00</span> - Atividades de limpeza não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-para-edificios-e-atividades-paisagisticas/8130300-atividades-paisagisticas">
                            <span class="wrapper">
                                  <span class="codigo">8130-3/00</span> - Atividades paisagísticas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8219901-fotocopias">
                            <span class="wrapper">
                                  <span class="codigo">8219-9/01</span> - Fotocópias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8220200-atividades-de-teleatendimento">
                            <span class="wrapper">
                                  <span class="codigo">8220-2/00</span> - Atividades de teleatendimento</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8230001-servicos-de-organizacao-de-feiras-congressos-exposicoes-e-festas">
                            <span class="wrapper">
                                  <span class="codigo">8230-0/01</span> - Serviços de organização de feiras, congressos, exposições e festas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8230002-casas-de-festas-e-eventos">
                            <span class="wrapper">
                                  <span class="codigo">8230-0/02</span> - Casas de festas e eventos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8291100-atividades-de-cobrancas-e-informacoes-cadastrais">
                            <span class="wrapper">
                                  <span class="codigo">8291-1/00</span> - Atividades de cobranças e informações cadastrais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8299701-medicao-de-consumo-de-energia-eletrica-gas-e-agua">
                            <span class="wrapper">
                                  <span class="codigo">8299-7/01</span> - Medição de consumo de energia elétrica, gás e água</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8299703-servicos-de-gravacao-de-carimbos-exceto-confeccao">
                            <span class="wrapper">
                                  <span class="codigo">8299-7/03</span> - Serviços de gravação de carimbos, exceto confecção</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8299707-salas-de-acesso-a-internet">
                            <span class="wrapper">
                                  <span class="codigo">8299-7/07</span> - Salas de acesso à internet</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/servicos-de-escritorio-de-apoio-administrativo-e-outros-servicos-prestados-principalmente-as-empresas/8299799-outras-atividades-de-servicos-prestados-principalmente-as-empresas-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8299-7/99</span> - Outras atividades de serviços prestados principalmente às empresas não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8511200-educacao-infantil-creche">
                            <span class="wrapper">
                                  <span class="codigo">8511-2/00</span> - Educação infantil - creche</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8512100-educacao-infantil-pre-escola">
                            <span class="wrapper">
                                  <span class="codigo">8512-1/00</span> - Educação infantil - préescola</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8513900-ensino-fundamental">
                            <span class="wrapper">
                                  <span class="codigo">8513-9/00</span> - Ensino fundamental</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8520100-ensino-medio">
                            <span class="wrapper">
                                  <span class="codigo">8520-1/00</span> - Ensino médio</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8531700-educacao-superior-graduacao">
                            <span class="wrapper">
                                  <span class="codigo">8531-7/00</span> - Educação superior - graduação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8532500-educacao-superior-graduacao-e-pos-graduacao">
                            <span class="wrapper">
                                  <span class="codigo">8532-5/00</span> - Educação superior - graduação e pós graduação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8533300-educacao-superior-pos-graduacao-e-extensao">
                            <span class="wrapper">
                                  <span class="codigo">8533-3/00</span> - Educação superior - pós graduação e extensão</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8541400-educacao-profissional-de-nivel-tecnico">
                            <span class="wrapper">
                                  <span class="codigo">8541-4/00</span> - Educação profissional de nível técnico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8542200-educacao-profissional-de-nivel-tecnologico">
                            <span class="wrapper">
                                  <span class="codigo">8542-2/00</span> - Educação profissional de nível tecnológico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8550302-atividades-de-apoio-a-educacao-exceto-caixas-escolares">
                            <span class="wrapper">
                                  <span class="codigo">8550-3/02</span> - Atividades de apoio à educação, exceto caixas escolares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8591100-ensino-de-esportes">
                            <span class="wrapper">
                                  <span class="codigo">8591-1/00</span> - Ensino de esportes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8592901-ensino-de-danca">
                            <span class="wrapper">
                                  <span class="codigo">8592-9/01</span> - Ensino de dança</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8592902-ensino-de-artes-cenicas-exceto-danca">
                            <span class="wrapper">
                                  <span class="codigo">8592-9/02</span> - Ensino de artes cênicas, exceto dança</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8592903-ensino-de-musica">
                            <span class="wrapper">
                                  <span class="codigo">8592-9/03</span> - Ensino de música</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8592999-ensino-de-arte-e-cultura-nao-especificado-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8592-9/99</span> - Ensino de arte e cultura não especificado anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8593700-ensino-de-idiomas">
                            <span class="wrapper">
                                  <span class="codigo">8593-7/00</span> - Ensino de idiomas</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8599601-formacao-de-condutores">
                            <span class="wrapper">
                                  <span class="codigo">8599-6/01</span> - Formação de condutores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/tecnologia/8599603-treinamento-em-informatica">
                            <span class="wrapper">
                                  <span class="codigo">8599-6/03</span> - Treinamento em informática</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8599604-treinamento-em-desenvolvimento-profissional-e-gerencial">
                            <span class="wrapper">
                                  <span class="codigo">8599-6/04</span> - Treinamento em desenvolvimento profissional e gerencial</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao/8599605-cursos-preparatorios-para-concursos">
                            <span class="wrapper">
                                  <span class="codigo">8599-6/05</span> - Cursos preparatórios para concursos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8599699-outras-atividades-de-ensino-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8599-6/99</span> - Outras atividades de ensino não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8622400-servicos-de-remocao-de-pacientes-exceto-os-servicos-moveis-de-atendimento-a-urgencias">
                            <span class="wrapper">
                                  <span class="codigo">8622-4/00</span> - Serviços de remoção de pacientes, exceto os serviços móveis de atendimento a urgências</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8630504-atividade-odontologica">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/04</span> - Atividade odontológica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8630506-servicos-de-vacinacao-e-imunizacao-humana/">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/06</span> - Serviços de vacinação e imunização humana</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8630507-atividades-de-reproducao-humana-assistida">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/07</span> - Atividades de reprodução humana assistida</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8630599-atividades-de-atencao-ambulatorial-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8630-5/99</span> - Atividades de atenção ambulatorial não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640201-laboratorios-de-anatomia-patologica-e-citologica">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/01</span> - Laboratórios de anatomia patológica e citológica</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640202-laboratorios-clinicos">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/02</span> - Laboratórios clínicos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640203-servicos-de-dialise-e-nefrologia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/03</span> - Serviços de diálise e nefrologia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640204-servicos-de-tomografia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/04</span> - Serviços de tomografia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640205-servicos-de-diagnostico-por-imagem-com-uso-de-radiacao-ionizante-exceto-tomografia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/05</span> - Serviços de diagnóstico por imagem com uso de radiação ionizante, exceto tomografia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640206-servicos-de-ressonancia-magnetica">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/06</span> - Serviços de ressonância magnética</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640207-servicos-de-diagnostico-por-imagem-sem-uso-de-radiacao-ionizante-exceto-ressonancia-magnetica">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/07</span> - Serviços de diagnóstico por imagem sem uso de radiação ionizante, exceto ressonância magnética</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640208-servicos-de-diagnostico-por-registro-grafico-ecg-eeg-e-outros-exames-analogos">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/08</span> - Serviços de diagnóstico por registro gráfico - ecg, eeg e outros exames análogos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640209-servicos-de-diagnostico-por-metodos-opticos-endoscopia-e-outros-exames-analogos">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/09</span> - Serviços de diagnóstico por métodos ópticos - endoscopia e outros exames análogos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640210-servicos-de-quimioterapia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/10</span> - Serviços de quimioterapia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640211-servicos-de-radioterapia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/11</span> - Serviços de radioterapia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640212-servicos-de-hemoterapia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/12</span> - Serviços de hemoterapia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640213-servicos-de-litotripcia">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/13</span> - Serviços de litotripcia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640214-servicos-de-bancos-de-celulas-e-tecidos-humanos">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/14</span> - Serviços de bancos de células e tecidos humanos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8640299-atividades-de-servicos-de-complementacao-diagnostica-e-terapeutica-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8640-2/99</span> - Atividades de serviços de complementação diagnóstica e terapêutica não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650001-atividades-de-enfermagem">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/01</span> - Atividades de enfermagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650002-atividades-de-profissionais-da-nutricao">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/02</span> - Atividades de profissionais da nutrição</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650003-atividades-de-psicologia-e-psicanalise">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/03</span> - Atividades de psicologia e psicanálise</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650004-atividades-de-fisioterapia">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/04</span> - Atividades de fisioterapia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650005-atividades-de-terapia-ocupacional">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/05</span> - Atividades de terapia ocupacional</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650006-atividades-de-fonoaudiologia">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/06</span> - Atividades de fonoaudiologia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650007-atividades-de-terapia-de-nutricao-enteral-e-parenteral">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/07</span> - Atividades de terapia de nutrição enteral e parenteral</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8650099-atividades-de-profissionais-da-area-de-saude-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8650-0/99</span> - Atividades de profissionais da área de saúde não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8660700-atividades-de-apoio-a-gestao-de-saude">
                            <span class="wrapper">
                                  <span class="codigo">8660-7/00</span> - Atividades de apoio à gestão de saúde</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8690901-atividades-de-praticas-integrativas-e-complementares-em-saude-humana">
                            <span class="wrapper">
                                  <span class="codigo">8690-9/01</span> - Atividades de práticas integrativas e complementares em saúde humana</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8690903-atividades-de-acupuntura">
                            <span class="wrapper">
                                  <span class="codigo">8690-9/03</span> - Atividades de acupuntura</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8690904-atividades-de-podologia">
                            <span class="wrapper">
                                  <span class="codigo">8690-9/04</span> - Atividades de podologia</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-de-atencao-a-saude-humana/8690999-outras-atividades-de-atencao-a-saude-humana-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">8690-9/99</span> - Outras atividades de atenção à saúde humana não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001901-producao-teatral">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/01</span> - Produção teatral</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001902-producao-musical">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/02</span> - Produção musical</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001903-producao-de-espetaculos-de-danca">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/03</span> - Produção de espetáculos de dança</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001904-producao-de-espetaculos-circenses-de-marionetes-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/04</span> - Produção de espetáculos circenses, de marionetes e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001905-producao-de-espetaculos-de-rodeios-vaquejadas-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/05</span> - Produção de espetáculos de rodeios, vaquejadas e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001906-atividades-de-sonorizacao-e-de-iluminacao">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/06</span> - Atividades de sonorização e de iluminação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9001999-artes-cenicas-espetaculos-e-atividades-complementares-nao-especificadas-anteriormente/">
                            <span class="wrapper">
                                  <span class="codigo">9001-9/99</span> - Artes cênicas, espetáculos e atividades complementares não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9002701-atividades-de-artistas-plasticos-jornalistas-independentes-e-escritores/">
                            <span class="wrapper">
                                  <span class="codigo">9002-7/01</span> - Atividades de artistas plásticos, jornalistas independentes e escritores</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-artisticas-criativas-e-de-espetaculos/9002702-restauracao-de-obras-de-arte">
                            <span class="wrapper">
                                  <span class="codigo">9002-7/02</span> - Restauração de obras de arte</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9311500-gestao-de-instalacoes-de-esportes">
                            <span class="wrapper">
                                  <span class="codigo">9311-5/00</span> - Gestão de instalações de esportes</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9313100-atividades-de-condicionamento-fisico">
                            <span class="wrapper">
                                  <span class="codigo">9313-1/00</span> - Atividades de condicionamento físico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9319101-producao-e-promocao-de-eventos-esportivos">
                            <span class="wrapper">
                                  <span class="codigo">9319-1/01</span> - Produção e promoção de eventos esportivos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9319199-outras-atividades-esportivas-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">9319-1/99</span> - Outras atividades esportivas não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9329802-exploracao-de-boliches">
                            <span class="wrapper">
                                  <span class="codigo">9329-8/02</span> - Exploração de boliches</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9329803-exploracao-de-jogos-de-sinuca-bilhar-e-similares">
                            <span class="wrapper">
                                  <span class="codigo">9329-8/03</span> - Exploração de jogos de sinuca, bilhar e similares</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9329804-exploracao-de-jogos-eletronicos-recreativos">
                            <span class="wrapper">
                                  <span class="codigo">9329-8/04</span> - Exploração de jogos eletrônicos recreativos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/atividades-esportivas-e-de-recreacao-e-lazer/9329899-outras-atividades-de-recreacao-e-lazer-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">9329-8/99</span> - Outras atividades de recreação e lazer não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9511800-reparacao-e-manutencao-de-computadores-e-de-equipamentos-perifericos">
                            <span class="wrapper">
                                  <span class="codigo">9511-8/00</span> - Reparação e manutenção de computadores e de equipamentos periféricos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9512600-reparacao-e-manutencao-de-equipamentos-de-comunicacao">
                            <span class="wrapper">
                                  <span class="codigo">9512-6/00</span> - Reparação e manutenção de equipamentos de comunicação</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9521500-reparacao-e-manutencao-de-equipamentos-eletroeletronicos-de-uso-pessoal-e-domestico">
                            <span class="wrapper">
                                  <span class="codigo">9521-5/00</span> - Reparação e manutenção de equipamentos eletroeletrônicos de uso pessoal e doméstico</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529101-reparacao-de-calcados-de-bolsas-e-artigos-de-viagem">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/01</span> - Reparação de calçados, de bolsas e artigos de viagem</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529102-chaveiros">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/02</span> - Chaveiros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529103-reparacao-de-relogios">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/03</span> - Reparação de relógios</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529104-reparacao-de-bicicletas-triciclos-e-outros-veiculos-nao-motorizados">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/04</span> - Reparação de bicicletas, triciclos e outros veículos não motorizados</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529105-reparacao-de-artigos-do-mobiliario">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/05</span> - Reparação de artigos do mobiliário</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529106-reparacao-de-joias">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/06</span> - Reparação de jóias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/reparacao-e-manutencao-de-equipamentos-de-informatica-e-comunicacao-e-de-objetos-pessoais-e-domesticos/9529199-reparacao-e-manutencao-de-outros-objetos-e-equipamentos-pessoais-e-domesticos-nao-especificados-anteri/">
                            <span class="wrapper">
                                  <span class="codigo">9529-1/99</span> - Reparação e manutenção de outros objetos e equipamentos pessoais e domésticos não especificados anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9601701-lavanderias">
                            <span class="wrapper">
                                  <span class="codigo">9601-7/01</span> - Lavanderias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9601702-tinturarias">
                            <span class="wrapper">
                                  <span class="codigo">9601-7/02</span> - Tinturarias</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9601703-toalheiros">
                            <span class="wrapper">
                                  <span class="codigo">9601-7/03</span> - Toalheiros</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9602501-cabeleireiros-manicure-e-pedicure">
                            <span class="wrapper">
                                  <span class="codigo">9602-5/01</span> - Cabeleireiros, manicure e pedicure</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9602502-atividades-de-estetica-e-outros-servicos-de-cuidados-com-a-beleza">
                            <span class="wrapper">
                                  <span class="codigo">9602-5/02</span> - Atividades de estética e outros serviços de cuidados com a beleza</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609202-agencias-matrimoniais">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/02</span> - Agências matrimoniais</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609205-atividades-de-sauna-e-banhos">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/05</span> - Atividades de sauna e banhos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609206-servicos-de-tatuagem-e-colocacao-de-piercing">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/06</span> - Serviços de tatuagem e colocação de piercing</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609207-alojamento-de-animais-domesticos">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/07</span> - Alojamento de animais domésticos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609208-higiene-e-embelezamento-de-animais-domesticos">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/08</span> - Higiene e embelezamento de animais domésticos</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>

                <li class="cnae-item">
                      <a href="https://www.contaagil.com/consulta-cnae/outras-atividades-de-servicos-pessoais/9609299-outras-atividades-de-servicos-pessoais-nao-especificadas-anteriormente">
                            <span class="wrapper">
                                  <span class="codigo">9609-2/99</span> - Outras atividades de serviços pessoais não especificadas anteriormente</span> 
                            <img src="image/icones/atendido.svg" alt="atendido">
                      </a>
                </li>
              </ul>
              <ul id="arquitetura" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/arquitetura/7111100-servicos-de-arquitetura">
                              <span class="wrapper">
                                    <span class="codigo">7111-1/00</span> - Serviços de arquitetura</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119799-atividades-tecnicas-relacionadas-a-engenharia-e-arquitetura">
                              <span class="wrapper">
                                    <span class="codigo">7119-7/99</span> - Atividades técnicas relacionadas à engenharia e arquitetura não especificadas anteriormente</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119703-servicos-de-desenho-tecnico">
                              <span class="wrapper">
                                    <span class="codigo">7119-7/03</span> - Serviços de desenho técnico relacionados à arquitetura e engenharia</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/arquitetura/7410202-design-de-interiores">
                              <span class="wrapper">
                                    <span class="codigo">7410-2/02</span> - Design de interiores</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
              </ul>
              <ul id="corretagem-imoveis" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6821801-corretagem-na-compra-e-venda-e-avaliacao-de-imoveis">
                              <span class="wrapper">
                                    <span class="codigo">6821-8/01</span> - Corretagem na compra e venda e avaliação de imóveis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6821802-corretagem-no-aluguel-de-imoveis">
                              <span class="wrapper">
                                    <span class="codigo">6821-8/02</span> - Corretagem no aluguel de imóveis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6822600-gestao-e-administracao-da-propriedade-imobiliaria">
                              <span class="wrapper">
                                    <span class="codigo">6822-6/00</span> - Gestão e administração da propriedade imobiliaria</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/corretagem-de-imoveis/6622300-corretores-e-agentes-de-seguros-de-planos-de-previdencia-complementar-e-de-saude">
                              <span class="wrapper">
                                    <span class="codigo">6622-3/00</span> - Corretores e agentes de seguros, de planos de previdência complementar e de saúde</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
              </ul>
              <ul id="publicidade" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/publicidade/7311400-agencias-de-publicidade">
                              <span class="wrapper">
                                    <span class="codigo">7311-4/00</span> - Agências de publicidade</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319003-marketing-direto">
                              <span class="wrapper">
                                    <span class="codigo">7319-0/03</span> - Marketing direto</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319002-promocao-de-vendas">
                              <span class="wrapper">
                                    <span class="codigo">7319-0/02</span> - Promoção de vendas</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/consultoria/7319004-consultoria-em-publicidade">
                              <span class="wrapper">
                                    <span class="codigo">7319-0/04</span> - Consultoria em publicidade</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/publicidade/7319099-outras-atividades-de-publicidade-nao-especificadas-anteriormente">
                              <span class="wrapper">
                                    <span class="codigo">7319-0/99</span> - Outras atividades de publicidade não especificadas anteriormente</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/publicidade/5911102-producao-de-filmes-para-publicidade">
                              <span class="wrapper">
                                    <span class="codigo">5911-1/02</span> - Produção de filmes para publicidade</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
              </ul>
              <ul id="servicos-medicos" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630503-atividade-medica-ambulatorial-restrita-a-consultas">
                              <span class="wrapper">
                                    <span class="codigo">8630-5/03</span> - Atividade médica ambulatorial restrita a consultas</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630501-atividade-medica-ambulatorial-com-recursos-para-realizacao-de-procedimentos-cirurgicos">
                              <span class="wrapper">
                                    <span class="codigo">8630-5/01</span> - Atividade médica ambulatorial com recursos para realização de procedimentos cirúrgicos</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8630502-atividade-medica-ambulatorial-com-recursos-para-realizacao-de-exames-complementares">
                              <span class="wrapper">
                                    <span class="codigo">8630-5/02</span> - Atividade médica ambulatorial com recursos para realização de exames complementares</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8610101-atividades-de-atendimento-hospitalar-exceto-pronto-socorro-e-unidades-para-atendimento-a-urgencias">
                              <span class="wrapper">
                                    <span class="codigo">8610-1/01</span> - Atividades de atendimento hospitalar, exceto pronto socorro e unidades para atendimento a urgências</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/servicos-medicos/8610102-atividades-de-atendimento-em-pronto-socorro-e-unidades-hospitalares-para-atendimento-a-urgencias">
                              <span class="wrapper">
                                    <span class="codigo">8610-1/02</span> - Atividades de atendimento em pronto socorro e unidades hospitalares para atendimento a urgências</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
              </ul>
              <ul id="tecnologia" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6204000-consultoria-em-tecnologia-da-informacao">
                              <span class="wrapper">
                                    <span class="codigo">6204-0/00</span> - Consultoria em tecnologia da informação</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6201501-desenvolvimento-de-programa-de-computador-sob-encomenda">
                              <span class="wrapper">
                                    <span class="codigo">6201-5/01</span> - Desenvolvimento de programas de computador sob encomenda</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6202300-desenvolvimento-e-licenciamento-de-programas-de-computador-customizaveis">
                              <span class="wrapper">
                                    <span class="codigo">6202-3/00</span> - Desenvolvimento e licenciamento de programas de computador customizáveis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6203100-desenvolvimento-e-licenciamento-de-programas-de-computador-nao-customizaveis">
                              <span class="wrapper">
                                    <span class="codigo">6203-1/00</span> - Desenvolvimento e licenciamento de programas de computador não customizáveis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6209100-suporte-tecnico-manutencao-e-outros-servicos-em-tecnologia-da-informacao">
                              <span class="wrapper">
                                    <span class="codigo">6209-1/00</span> - Suporte técnico, manutenção e outros serviços em tecnologia da informação</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6201502-web-design">
                              <span class="wrapper">
                                    <span class="codigo">6201-5/02</span> - Web design</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6311900-tratamento-de-dados-provedores-de-servicos-de-aplicacao-e-servicos-de-hospedagem-na-internet">
                              <span class="wrapper">
                                    <span class="codigo">6311-9/00</span> - Tratamento de dados, provedores de serviços de aplicação e serviços de hospedagem na internet</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6319400-portais-provedores-de-conteudo-e-outros-servicos-de-informacao-na-internet">
                              <span class="wrapper">
                                    <span class="codigo">6319-4/00</span> - Portais, provedores de conteúdo e outros serviços de informação na internet</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/8599603-treinamento-em-informatica">
                              <span class="wrapper">
                                    <span class="codigo">8599-6/03</span> - Treinamento em informática</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>
              </ul>
              <ul id="turismo" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/turismo/7990200-servicos-de-reservas-e-outros-servicos-de-turismo-nao-especificados-anteriormente">
                              <span class="wrapper">
                                    <span class="codigo">7990-2/00</span> - Serviços de reservas e outros serviços de turismo não especificados anteriormente</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/turismo/7912100-operadores-turisticos">
                              <span class="wrapper">
                                    <span class="codigo">7912-1/00</span> - Operadores turísticos</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/turismo/7911200-agencias-de-viagens">
                              <span class="wrapper">
                                    <span class="codigo">7911-2/00</span> - Agências de viagens</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>            
      
              </ul>
              <ul id="consultoria" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/advogados/6911701-servicos-advocaticios">
                              <span class="wrapper">
                                    <span class="codigo">6911-7/01</span> - Consultoria jurídica</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/consultoria/7020400-atividades-de-consultoria-em-gestao-empresarial-exceto-consultoria-tecnica-especifica">
                              <span class="wrapper">
                                    <span class="codigo">7020-4/00</span> - Atividades de consultoria em gestão empresarial, exceto consultoria técnica específica</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>   
                  
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/consultoria/6920602-atividades-de-consultoria-e-auditoria-contabil-e-tributaria">
                              <span class="wrapper">
                                    <span class="codigo">6920-6/02</span> - Consultoria contábil</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/consultoria/7319004-consultoria-em-publicidade">
                              <span class="wrapper">
                                    <span class="codigo">7319-0/04</span> - Consultoria em publicidade</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/tecnologia/6204000-consultoria-em-tecnologia-da-informacao">
                              <span class="wrapper">
                                    <span class="codigo">6204-0/00</span> - Consultoria em tecnologia da informação</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>
      
              </ul>
              <ul id="software" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/software/6201501-desenvolvimento-de-softwares-por-encomenda">
                              <span class="wrapper">
                                    <span class="codigo">6201-5/01</span> - Desenvolvimento de softwares por encomenda</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/software/6202300-desenvolvimento-de-softwares-customizaveis">
                              <span class="wrapper">
                                    <span class="codigo">6202-3/00</span> - Desenvolvimento de softwares customizavéis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/software/6203100-desenvolvimento-de-softwares-nao-customizaveis">
                              <span class="wrapper">
                                    <span class="codigo">6203-1/00</span> - Desenvolvimento de softwares não customizavéis</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>            
      
              </ul>
              <ul id="educacao-cursos" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8412400-regulacao-das-atividades-de-saude-educacao-servicos-culturais-e-outros-servicos-sociais">
                              <span class="wrapper">
                                    <span class="codigo">8412-4/00</span> - Regulação das atividades de saúde, educação, serviços culturais e outros serviços sociais</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8512100-educacao-infantil-pre-escola">
                              <span class="wrapper">
                                    <span class="codigo">8512-1/00</span> - Educação infantil - pré-escola</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8520100-ensino-medio">
                              <span class="wrapper">
                                    <span class="codigo">8520-1/00</span> - Ensino médio</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8532500-educacao-superior-graduacao-e-pos-graduacao">
                              <span class="wrapper">
                                    <span class="codigo">8532-5/00</span> - Educação superior - graduação e pós graduação</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8541400-educacao-profissional-de-nivel-tecnico">
                              <span class="wrapper">
                                    <span class="codigo">8541-4/00</span> - Educação profissional de nível técnico</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8550302-atividades-de-apoio-a-educacao-exceto-caixas-escolares">
                              <span class="wrapper">
                                    <span class="codigo">8550-3/02</span> - Atividades de apoio à educação, exceto caixas escolares</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8599604-treinamento-em-desenvolvimento-profissional-e-gerencial">
                              <span class="wrapper">
                                    <span class="codigo">8599-6/04</span> - Treinamento em desenvolvimento profissional e gerencial</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li> 

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8511200-educacao-infantil-creche">
                              <span class="wrapper">
                                    <span class="codigo">8511-2/00</span> - Educação infantil - creche</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>   

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8513900-ensino-fundamental">
                              <span class="wrapper">
                                    <span class="codigo">8513-9/00</span> - Educação fundamental</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8531700-educacao-superior-graduacao">
                              <span class="wrapper">
                                    <span class="codigo">8531-7/00</span> - Educação superior - graduação</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>    

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8533300-educacao-superior-pos-graduacao-e-extensao">
                              <span class="wrapper">
                                    <span class="codigo">8533-3/00</span> - Educação superior - pós graduação e extensão</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li> 

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8542200-educacao-profissional-de-nivel-tecnologico">
                              <span class="wrapper">
                                    <span class="codigo">8542-2/00</span> - Educação profissional de nível tecnológico</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li> 

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8599603-treinamento-em-informatica">
                              <span class="wrapper">
                                    <span class="codigo">8599-6/03</span> - Treinamento em informática</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/educacao-e-cursos/8599699-outras-atividades-de-ensino-nao-especificadas-anteriormente">
                              <span class="wrapper">
                                    <span class="codigo">8599-6/99</span> - Outras atividades de ensino não especificadas anteriormente</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>            
      
              </ul>
              <ul id="administrativo" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/administrativo/8211300-servicos-combinados-de-escritorio-e-apoio-administrativo">
                              <span class="wrapper">
                                    <span class="codigo">8211-3/00</span> - Serviços combinados de escritório e apoio administrativo</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/administrativo/8219999-preparacao-de-documentos-e-servicos-especializados-de-apoio-administrativo">
                              <span class="wrapper">
                                    <span class="codigo">8219-9/99</span> - Preparação de documentos e serviços especializados de apoio administrativo</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

              </ul>
              <ul id="advogado" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/advogados/6911701-servicos-advocaticios">
                              <span class="wrapper">
                                    <span class="codigo">6911-7/01</span> - Serviços advocatícios</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

              </ul>
              <ul id="engenharia" style="display: none;">
                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/engenharia/7112000-servicos-de-engenharia">
                              <span class="wrapper">
                                    <span class="codigo">7112-0/00</span> - Serviços de engenharia</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119703-servicos-de-desenho-tecnico">
                              <span class="wrapper">
                                    <span class="codigo">7119-7/03</span> - Serviços de desenho técnico</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>
                  </li>

                  <li class="cnae-item">
                        <a href="https://www.contaagil.com/consulta-cnae/engenharia/7119799-atividades-tecnicas-relacionadas-a-engenharia-e-arquitetura">
                              <span class="wrapper">
                                    <span class="codigo">7119-7/99</span> - Atividades técnicas relacionadas à engenharia e arquitetura</span> 
                              <img src="image/icones/atendido.svg" alt="atendido">
                        </a>      
                  </li>            
      
              </ul>
            </div>
          </div>
        </div>
            <!--lista de atividades-->
        </div>
    </section>
    <!--seção video-->
    <section class="container secao-video">
      <div class="row">
        <div class="col-12">
          <h2>Por que é importante escolher o CNAE correto?</h2>
          <img src="image/Img-ContaAgil.jpg" alt="Vídeo ContaÁgil - CNAE Simples Nacional | Entenda as Atividades Enquadradas" class="img-fluid">
          <p>
          </p>O <strong>CNAE - Classificação Nacional de Atividades Econômicas</strong> é a forma como uma empresa atua no mercado, é o que define as atividades a serem exercidas e é obrigatório a todos os CNPJs.</p>
          </p>Por meio dele os órgãos fiscalizadores avaliam quais são os tributos que devem ser cobrados da sua empresa. Por esse motivo, é extremamente importante que o empreendedor escolha o CNAE que realmente condiz com a área em que sua empresa atua.</p>
          <p>Diminua os riscos tributários e escolha a melhor opção para a sua empresa. Descubra o CNAE que melhor combina com o seu ramo de negócio, consulte atividades secundárias, CNAEs do Simples Nacional e muito mais.</p>
          <div class="botao-cta">
            <a href="#bloco-do-buscador">
              <button class="consultar">Consultar atividade</button>
            </a>  
            <a href="" data-toggle="modal" data-target="#modalContactForm">
              <button class="abrir-cnpj">Abrir CNPJ grátis!</button>
            </a>  
          </div>
          <h4>Temos a missão de ajudar o pequeno e médio empresário a desburocratizar o seu negócio, por isso, separamos alguns artigos que podem te auxiliar!</h4>
        </div>
      </div>
    </section>
    <!--seção video-->
    <!--seção artigo recomendado-->
    <section class="container relacionados">
      <div class="row">
        <div class="col-md-4 card-post">
          <a href="https://www.contaagil.com/blog/cnae-o-que-e-e-como-funciona/" target="_blank"><img src="image/news/CNAE-O-que-e-e-como-funciona.webp" alt="Post CNAE-O-que-é-e-como-funciona" width="480px" height="270px" class="img-fluid"></a>
          <img class="jornal" src="image/icones/jornal.png" alt="icone-jornal" class="img-fluid" width="15px">
          <p><a href="https://www.contaagil.com/blog/cnae-o-que-e-e-como-funciona/" target="_blank">CNAE: O que é e como funciona?</a></p>
          <span class="tempo"><img src="image/icones/relogio.svg" alt="icone-relógio" class="img-fluid" width="15px"> 10 min</span>
          <span class="leia-mais"><a href="https://www.contaagil.com/blog/cnae-o-que-e-e-como-funciona/" target="_blank">Leia sobre <img src="image/icones/seta.svg" alt="icone-seta" class="img-fluid" width="15px"></a></span>
        </div>
        <div class="col-md-4 card-post">
          <a href="https://www.contaagil.com/blog/como-o-fator-r-contribui-para-optantes-do-simples-nacional/" target="_blank"><img src="image/news/Como-o-fator-R-contribui-para-optantes-do-Simples-Nacional.webp" alt="Post Como o fator R contribui para optantes do Simples Nacional" width="480px" height="270px" class="img-fluid"></a>
          <img class="jornal" src="image/icones/jornal.png" alt="icone-jornal" class="img-fluid" width="15px">
          <p><a href="https://www.contaagil.com/blog/como-o-fator-r-contribui-para-optantes-do-simples-nacional/" target="_blank">Como o fator R contribui para optantes do Simples Nacional</a></p>
          <span class="tempo"><img src="image/icones/relogio.svg" alt="icone-relógio" class="img-fluid" width="15px"> 10 min</span>
          <span class="leia-mais"><a href="https://www.contaagil.com/blog/como-o-fator-r-contribui-para-optantes-do-simples-nacional/" target="_blank">Leia sobre <img src="image/icones/seta.svg" alt="icone-seta" class="img-fluid" width="15px"></a></span>
        </div>
        <div class="col-md-4 card-post">
          <a href="https://www.contaagil.com/blog/anexo-iii-do-simples-nacional-quais-as-atividades-e-quais-as-aliquotas/" target="_blank"><img src="image/news/Simples-Nacional-o-que-e-o-Anexo-III_-quais-atividades-e-quais-aliquotas.webp" alt="Post Simples Nacional: o que é o Anexo III, quais atividades e quais alíquotas?" width="480px" height="270px" class="img-fluid"></a>
          <img class="jornal" src="image/icones/jornal.png" alt="icone-jornal" class="img-fluid" width="15px">
          <p><a href="https://www.contaagil.com/blog/anexo-iii-do-simples-nacional-quais-as-atividades-e-quais-as-aliquotas/" target="_blank">Simples Nacional: o que é o Anexo III, quais atividades e quais alíquotas?</a></p>
          <span class="tempo"><img src="image/icones/relogio.svg" alt="icone-relógio" class="img-fluid" width="15px"> 10 min</span>
          <span class="leia-mais"><a href="https://www.contaagil.com/blog/anexo-iii-do-simples-nacional-quais-as-atividades-e-quais-as-aliquotas/" target="_blank">Leia sobre <img src="image/icones/seta.svg" alt="icone-seta" class="img-fluid" width="15px"></a></span>
        </div>
      </div>
    </section>
    <!--seção artigo recomendado-->
    <!--seção jornada-->
    <section class="container jornada">
      <div class="row">
        <div class="col-12">
          <div class="fundo">
            <div class="texto">
              <h2>Comece hoje sua jornada de sucesso!</h2>
              <h3>A ContaÁgil trabalha para manter a burocracia invisível enquanto você vive apenas o melhor da contabilidade online.</h3>
              <p>Além de optar pelo melhor CNAE para o seu negócio, você realiza uma abertura da sua empresa segura e econômica. Com acesso a uma plataforma digital, tenha acesso a todos os seus documentos em um só lugar, permitindo mais tempo para investir no crescimento da sua empresa. Mantenha sua rotina organizada e flexível, com o privilégio de gerenciar o seu negócio de qualquer lugar e com um atendimento especializado.</p>
              <a href="" data-toggle="modal" data-target="#modalContactForm">
                <button class="abrir-empresa">Abra a sua empresa grátis!</button>
              </a>  
            </div>
            <div class="imagem">
              <img src="image/mockup-plataforma.webp" alt="mockup-plataforma.webp" width="530">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--seção jornada-->
    <!--perguntas frequentes-->
    <div class="container perguntas">
      <div class="row">
        <div class="col-12">
          <div class="titulo">
            <h2>Perguntas frequentes</h2>
            <p>Leia as principais dúvidas sobre nossos serviços</p>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Quais as minhas responsabilidades na contabilidade online?
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Envio de informações mensais.</p><br />
                  <p>Você tem a responsabilidade de nos enviar informações fiscais e financeiras
                    mensalmente em nossa plataforma, assim como outros documentos que fazem parte
                    da contabilidade. Você será notificado por e-mail sobre o que precisa fazer, e também
                    dentro da plataforma, estará sinalizado o que precisa de uma ação sua.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Contabilidade online é tudo automático?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Não.</p><br />
                  <p>Apesar de sermos uma empresa que atende 100% online, temos uma equipe de profissionais de contabilidade por trás dos processos que realizamos. Nossos contadores estão qualificados e prontos para ajudar na jornada da sua empresa. Buscamos automação nos processos burocráticos, mas não dispensamos o atendimento humanizado. Fale conosco sempre que precisar.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tenho algum suporte de contador, caso precise?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Sim.</p><br />
                  <p>Em qualquer necessidade ou dúvida sobre o serviço, você pode falar com a nossa equipe técnica por algum de nossos canais. Além disso, você pode contratar um suporte contador nosso separadamente ou optar por um plano onde você terá um contador exclusivo para sua empresa. Sempre iremos ajudar no que for necessário e você pode contratar o plano mais adequado a sua necessidade.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    O que está incluso na mensalidade?
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <p>No valor da mensalidade, estão inclusos todos os serviços essenciais da contabilidade de uma empresa:</p><br />
                  <ol>
                    <li>Obrigações Legais com Receita Federal, Receita Estadual (quando comércio) e Prefeitura (quando serviço);</li>
                    <li>Cálculo e emissão de Guia de Impostos;</li>
                    <li>Pró-labore dos sócios;</li>
                    <li>Folha de pagamento (se houver contratado) de seus funcionários;</li>
                    <li>Imposto de Renda anual de sua empresa;</li>
                    <li>Demonstrativos e Relatórios Contábeis;</li>
                    <li>Suporte para dúvidas através dos canais contratados.</li>
                  </ol>
                  <p>Alguns serviços extras podem ser contratados quando necessário. Emissão de CND ou Declaração de Faturamento, por exemplo. Mas não se preocupe, você paga apenas no mês que contratar.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--perguntas frequentes-->
    <!--Modal com form-->
    <div class="modal-form">
      <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Vamos conversar!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <p class="text-center">Fale agora com nossos especialistas contábeis.</p>
            <div class="modal-body mx-3">
              <!--Form do modal-->
              <form action="https://www.rdstation.com.br/api/1.2/conversions" method="POST" name="f1">  

                <input type="hidden" name="token_rdstation" value="b1d1e5f23ec0596198802d7f2f77e43b" />
                <input type="hidden" name="redirect_to" value="http://contaagil.com/obrigado/" />

                <div class="md-form mb-5">
                  <input type="text" name="firstname" id="firstname" placeholder="Nome completo:" value="" class="form-control validate" required />
                </div>

                <div class="md-form mb-5">
                  <input type="tel" name="phone" id="phone" placeholder="Telefone:" value="" class="form-control validate" required />
                </div>

                <div class="md-form mb-5">
                  <input type="email" name="email" id="email" placeholder="E-mail:" value="" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65' class="form-control validate" required />
                  <div id="msgemail"></div>
                </div>

                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="form34">O que você busca?</label>
                  <select name="oquedeseja"  id="formfiedoquedeseja" value="" class="form-control validate" required>
                    <option value=""></option>
                    <option value="Abrir CNPJ - Microempresa">Abrir CNPJ - Microempresa</option>
                    <option value="Abrir CNPJ - MEI">Abrir CNPJ - MEI</option>
                    <option value="Trocar de contador">Trocar de contador</option>
                    <option value="Migrar de MEI para ME">Migrar de MEI para ME</option>
                  </select>
                </div>
                
                  <input type="hidden" name="utm_source" id="[utm_source]" value="">
                  <input type="hidden" name="utm_medium" id="utm_medium" value="">
                  <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                  <input type="hidden" name="utm_term" id="utm_term" value="">
                  <input type="hidden" name="utm_device" id="utm_device" value="">
                  <input type="hidden" name="utm_page" id="utm_page" value="">
                  <input type="hidden" name="gclid" id="gclid" value="">
                  <input type="hidden" name="page_path" id="[page_path]" value="">
                  <input type="hidden" name="identificador" value="pagina-buscador-de-cnaes" />
                  <input type="hidden" name="c_utmz" id="c_utmz" value="" />
                  <script type="text/javascript">
                    function read_cookie(a){var b=a+"=";var c=document.cookie.split(";");for(var d=0;d<c.length;d++){var e=c[d];while(e.charAt(0)==" ")e=e.substring(1,e.length);if(e.indexOf(b)==0){return e.substring(b.length,e.length)}}return null}try{document.getElementById("c_utmz").value=read_cookie("__utmz")}catch(err){}
                  </script>
            </div>
              <div class="modal-footer d-flex justify-content-center">
                <input class="btn" id="btnenviar" type="submit" value="ENVIAR" />
              </div>
            </form>
            <!--Form do modal-->
          </div>
        </div>
      </div>
    </div>
    <!--Modal com form-->
    <!--Botão voltar ao topo-->
    <div data-scroll="suave" data-anima="scroll">
      <a href="#topo">
         <div class="topo-scroll">
            <img src="image/icones/circle-up.png" alt="Voltar ao topo">
         </div>
      </a>
    </div>
    <!--Botão voltar ao topo-->
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