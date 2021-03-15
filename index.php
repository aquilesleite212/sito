<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-Br">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="Desenvolvimento de Aplicativos e sistemas, infraestrutura de redes e CFTV, soluções tecnologicas, Emissor de BPe, CTe, CTe-OS, NFCe e NFe." />
      <meta name="keywords" content="HTML, CSS, XML, PHP, Delphi, JavaScript, Ktec, Sistemas, Aplicativo, Aplicativos, APP, ERP, BPe, NFCe, NFe, CTe, CTe-OS, Fiscal, Bilhete, Passagem, Emissor, Eletrônico, Guichê, Box, Desenvolvimento, Programação, Sistema, camera, cameras, ip, CFTV, Cameras, Instalação, Venda, Equipamentos, Projetos, Criação Rodoviário, fluvial, transporte, PA, Consultoria">
      <meta name="author" content="ktec Sistemas" />
      <title> Ktec Sistemas - Sistemas ERP, Aplicativos e suporte em TI</title>
      <!--  Add Favicon -->
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
      <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
      <!-- Add CSS File -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/font-awesome.min.css" />
      <link rel="stylesheet" href="css/slimmenu.min.css" />
      <link rel="stylesheet" href="css/animate.min.css" />
      <link rel="stylesheet" href="css/owl.carousel.min.css" />
      <link rel="stylesheet" href="style.css" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
</head>
<body>
    <!-- Loading -->
    <div class="loading-main">
        <div class="pre-loader">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">CARREGANDO</div>
        </div>
        </div>
    </div>
    <?php
        error_reporting(0);
        ini_set('display_errors', 0);
        include_once 'includes/header.php';

        if(isset($_GET['p'])){
            switch($_GET['p']){
                case 'inicio':
                    include_once 'pages/home.php';
                    break;
                case 'sobre':
                    include_once 'pages/about.php';
                    break;
                case 'ktec-begin':
                    include_once 'pages/ktec-begin.php';
                    break;
                case 'ktec-abordo':
                    include_once 'pages/ktec-abordo.php';
                    break;
                case 'ktec-siso':
                    include_once 'pages/ktec-siso.php';
                    break;
                case 'kurbus':
                    include_once 'pages/kurbus.php';
                    break;
                case 'entraga-rapida':
                    include_once 'pages/entraga-rapida.php';
                    break;
                case 'suporte-ti':
                    include_once 'pages/suporte-ti.php';
                    break;
                case 'infraestrutura-rede':
                    include_once 'pages/infraestrutura-rede.php';
                    break;
                case 'configuracao-servidor':
                    include_once 'pages/configuracao-servidor.php';
                    break;
                case 'cftv':
                    include_once 'pages/cftv.php';
                    break;
                case 'contato':
                    include_once 'pages/contact.php';
                    break;
				case 'automacao-residencial':
                    include_once 'pages/automacao-residencial.php';
                    break;
				case 'automacao-de-cancelas':
					include_once 'pages/automacao-de-cancelas.php';
					break;
				case 'automacao-comercial':
						include_once 'pages/automacao-comercial.php';
						break;
				case 'controle-de-acesso':
						include_once 'pages/controle-de-acesso.php';
						break;
				case 'instalacao-de-alarme-e-cerca-eletrica':
						include_once 'pages/instalacao-de-alarme-e-cerca-eletrica.php';
						break;
				case 'programas':
				    	include_once 'pages/programas.php';
						break;

                default:
                    include_once 'pages/home.php';
                    break;

            }
        }else{
            include_once 'pages/home.php';
        }

        include_once 'includes/footer.php'
    ?>
</body>
</html>