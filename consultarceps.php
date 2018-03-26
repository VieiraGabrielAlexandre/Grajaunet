<?php
// definições de host, database, usuário e senha
$host = "grajaunet.mysql.dbaas.com.br";
$db   = "grajaunet";
$user = "grajaunet";
$pass = "ana552805";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT cep, rua, bairro, estado FROM CEP");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

    <html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons/favicon.png">
    <title>Grajaunet Telecomunicações</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
    <script src="js/instafeed.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="page">
      <!---header top----> 
      <!--header--->
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!--                            <a href="#"> </a>
                                                        <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
            </div>
          </div>
        </div>
      </div>
      <!--header--->
      <header class="header-container">
        <div class="container">
          <div class="top-row" style="height: 109px;">
            <div class="row">
              <div class="col-md-2 col-sm-6 col-xs-6">
                <div id="logo" style="height: 64px;">&nbsp; <a href="index.html"><img
                      src="images/logo.png" alt="logo" style="margin-top: -24px; height: 62px; width: 160px;"></a><a
                    href="index.html" img="logo"><span></span></a> </div>
              </div>
              <div class="col-sm-6 visible-sm">
                <div class="text-right"><button type="button" class="book-now-btn">Faça
                    seu cadastro</button></div>
              </div>
              <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                <nav class="navbar navbar-default">
                  <div class="navbar-header page-scroll"> <button data-target=".navbar-ex1-collapse"
                      data-toggle="collapse" class="navbar-toggle" type="button">
                      <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                      <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button> </div>
                  <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                    <ul class="list-unstyled nav1 cl-effect-10">
                      <li><a data-hover="Inicio" href="index.html" ><span>Inicio</span></a></li>
                      <li><a data-hover="Institucional"href="about.html"><span>Institucional</span></a></li>
                      <li><a data-hover="Área de atendimento" href="rooms.html"><span>Área
                            de atendimento</span></a></li>
                      <!--<li><a data-hover="Gallery" href="gallery.html"><span>Gallery</span></a></li>-->
                      <!--<li><a data-hover="Dinning" href="pagina_cadastro_com_cep.html"><span>Dinning</span></a></li>-->
                      <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                      <li><a data-hover="Já sou cliente" href="#"><span>Já
                            sou Cliente</span></a></li>
                    </ul>
                  </div>
                </nav>
              </div>
                <div class="text-right"><a href="pagina_consulta_cep.html"><button
                      type="button" class="book-now-btn">Cadastre-se</button></a></div>
              </div>
            </div>
          </div>
      </header>

        <!--end-->
        <div class="clearfix"></div>

        <h2 align="center">Dados de pessoas onde nosso serviço pode atender.</h2> <br><br>

        <div align="center">

            <?php
            // se o número de resultados for maior que zero, mostra os dados
            if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
                    ?>
                    <p>CEP= <?=$linha['cep']?> | RUA = <?=$linha['rua']?> | Bairro = <?=$linha['bairro']?> | Estado = <?=$linha['estado']?></p>
                    <?php
                    // finaliza o loop que vai mostrar os dados
                }while($linha = mysql_fetch_assoc($dados));
                // fim do if
            }
            ?>
        </div> <br> <br>
        <div align="center">
            <ul class="list-unstyled nav1 cl-effect-10">
                <li><a data-hover="Voltar" href="admincep.html"><span>Voltar</span></a></li>
            </ul>
         </div>
    </body>
    </html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>