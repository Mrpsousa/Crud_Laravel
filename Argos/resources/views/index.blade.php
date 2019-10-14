<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Argos - Contabilidade</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="<?= url('/');?>" class="navbar-brand">
                    Argos Contabilidade
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="<?= url('/cont');?>" target="_blank"> Endereço e Contato</a>
                    </li>
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Social
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= url('/log');?>" class="btn btn-danger btn-fill">Dudutibilidade </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-red">
            <div class="image"
                style="background-image: url('assets/img/header-1.jpeg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Argos</h1>
                        <h3>Sua contabilidade sem complicação!</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                    <div class="profile">
                        <img width="300px" height="405px" src="assets/img/faces/argos.png"/> 
                        <!-- <img  -->
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Nosso Serviços</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Planos proporcionais ao seu faturamento e quadro de funcionários! A partir de R$221 por mês.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h3>Sem Complicação</h3>
                        <p class="description"> Abra sua empresa sem custos*;
                            Contabilidade com preço justo;
                            Contabilidade na palma da mão;<br/> 
                            Migramos seu MEI para ME.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <h3>O que está incluso</h3>
                        <p class="description">Todas as obrigações legais nos âmbitos federal, estadual e municipal;<br/> 
                             Cálculo dos impostos;<br/> 
                             Emissão de guia de impostos;<br/> 
                             Pro-labore dos sócios.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h3>O que está incluso</h3>
                        <p class="description"> Obrigações como DCTF, SPED etc;<br/> 
                             Envio do Imposto de Renda da Empresa anual;<br/> 
                             Relatórios contábeis;<br/> 
                             Atendimento personalizado via chat, e-mail e telefone.</p>
                    </div>
                </div>
            </div>
            <h6>* Abertura de empresa gratuita mediante contratação do plano de contabilidade por 12 meses. Pague somente as taxas do governo. Necessário certificado digital e-CNPJ A1.</h6>
        </div>
    </div>


    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('assets/img/header-2.jpeg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Quem Somos </h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">Com mais de 10 anos de experiência, somos uma empresa de contabilidade que acredita na descomplicação dos serviços contábeis. Trabalhamos com a ideia de simplificar processos, facilitar comunicação e automação de atividades.
                                Sua contabilidade sem papel e na palma da sua mão. Temos nossos clientes como parceiros e procuramos sempre promover a melhor solução contábil, financeira e empresarial para o seu negócio.</p>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face1.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Márcio</h3>
                                                    <p class="small-text">CEO / Co-Founder</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face4.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Diogo</h3>
                                                    <p class="small-text">Gerente de TI</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face_3.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Michelle</h3>
                                                    <p class="small-text">Marketing Hacker</p>
                                                    <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/office-1.jpeg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Trabalhe conosco</h2>
                    <div class="separator line-separator">♦</div>
                    <h2 class="description"> Faça o que você gosta e deixe o trabalho com a gente!</h2>
                </div>

                <div class="button-get-started">
                    <a href="<?= url('/cont');?>" class="btn btn-danger btn-fill btn-lg">Entre em Contato</a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Empresa</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?= url('/');?>" >Home</a></li>
                                <li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Suporte</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="<?= url('/cont');?>"> Nosso Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Nós siga no:</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i></i> Linkedin
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                Copyright © <script> document.write(new Date().getFullYear()) </script> Argos Contabilidade. Todos os direitos reservados.
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
