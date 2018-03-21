<?php
include "url_seo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VendedorWeb</title>
    <link href="<?=$url_seo?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$url_seo?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$url_seo?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=$url_seo?>css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?=$url_seo?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$url_seo?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$url_seo?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$url_seo?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=$url_seo?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<script src="<?=$url_seo?>js/jquery.js"></script>
<script src="<?=$url_seo?>js/bootstrap.min.js"></script>
<script src="<?=$url_seo?>js/jquery.isotope.min.js"></script>
<script src="<?=$url_seo?>js/jquery.prettyPhoto.js"></script>
<script src="<?=$url_seo?>js/main.js"></script>

<!-- validação de formulário -->
<script type="text/javascript" src="<?=$url_seo?>js/jquery.validate.js"></script>

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#projetos">Projetos</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#tecnologias">Tecnologias</a></li>
                        <li><a href="#sobre-nos">Sobre nós</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <!-- <h1><i class="icon-star"></i>VendedorWeb<i class="icon-star"></i></h1>
                        <p class="lead">O novo jeito de vender</p> -->
						<p><img src="images/banner1.fw.png" border="0" alt="" class="img-responsive"></p>
                    </div>
                </div>
            </div><!--/.item-->	
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
						<p><img src="images/banner2.fw.png" border="0" alt="" class="img-responsive"></p>
                    </div>
                </div>
            </div><!--/.item-->	
			<!--
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Canais de venda</h1>
                        <p class="lead">em uma solução única <i class="icon-play"></i></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1><i class="icon-check"></i> Catálogo na loja</h1>
                        <p class="lead"></p> 
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1><i class="icon-check"></i> Televendas</h1>
                        <p class="lead"></p> 
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1><i class="icon-check"></i>E-commerce</h1>
                        <p class="lead"></p> 
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1><i class="icon-check"></i> APP</h1>
                        <p class="lead">
                    </div>
                </div>
            </div> -->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="servicos">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-bookmark icon-md icon-color1"></i>
                            <h4><a href="#produtos">Produtos</a></h4>
                            <p>Nossos sistemas, produtos e soluções de tecnologia estão focados em atender as necessidades de cada cliente. Visando acima de tudo a eficiencia, confiança e funcionalidade.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-star icon-md icon-color2"></i>
                            <h4><a href="#tecnologias">Tecnologias</a></h4>
                            <p>Alianças e Parceiros. Na busca por oferecer soluções cada vez mais completas e eficientes, VendedorWeb mantém alianças com os principais fornecedores dos mais diversos segmentos de tecnologia.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-user icon-md icon-color3"></i>
                            <h4><a href="#projetos">Projetos</a></h4>
                            <p>Cercado por grandes parceiros VendedorWeb busca sempre novos desafios. Veja aqui algumas das empresas que são nossos clientes e que utilizam nossos produtos.</p>
                        </div>
                    </div><!--/.col-md-4-->


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#servicos-->

    <section id="projetos">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Projetos</h2>
                </div><!--/.center-->
                <ul class="projetos-items col-4">

					<li class="projetos-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="projetos-image">
							  <a title="Petronas" href="<?=$url_seo?>petronas" target="_new">
                                <img src="images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay"></div>
							  </a>
                            </div> 
                            <h5>Petronas</h5>         
                        </div>
                    </li>

					<li class="projetos-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="projetos-image">
							  <a title="Bosch" href="<?=$url_seo?>bosch" target="_new">
                                <img src="images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay"></div>
							  </a>
                            </div> 
                            <h5>Bosch</h5>         
                        </div>
                    </li>

					<li class="projetos-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="projetos-image">
							  <a title="LG Outlet" href="https://www.lgoutlet.com.br/" target="_new">
                                <img src="images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay"></div>
							  </a>
                            </div> 
                            <h5>LG Outlet - E-commerce</h5>         
                        </div>
                    </li>

					<li class="projetos-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="projetos-image">
							  <a title="Lojas Guaibim" href="http://lojasguaibim.com.br/shopping" target="_new">
                                <img src="images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay"></div>
							  </a>
                            </div> 
                            <h5>Lojas Guaibim - E-commerce</h5>         
                        </div>
                    </li>

                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="produtos">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Produtos</h2>
                    <p class="lead">Software de venda "na nuvem".<br>100% integrado ao ERP.</p>
                </div><!--/.center-->   
                <div class="gap"></div>
				<!--
                <div id="produtos-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>5GB Storage</li>
                            <li>1GB RAM</li>
                            <li>400GB Bandwidth</li>
                            <li>10 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>10GB Storage</li>
                            <li>2GB RAM</li>
                            <li>1TB Bandwidth</li>
                            <li>100 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Advanced</li>
                            <li class="plan-price">$199</li>
                            <li>30GB Storage</li>
                            <li>5GB RAM</li>
                            <li>5TB Bandwidth</li>
                            <li>1000 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                </div> -->
				
            </div> 
        </div>
    </section><!--/#produtos-->

    <section id="tecnologias">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Tecnologias</h2>
                    <!-- <p class="lead">Amazon<br>Redecard<br>Cielo</p> -->
					<p class="lead"><img src="images/parceiros.jpg" border="0" alt="" class="img-responsive"></p>
                </div><!--/.center-->   
                <div class="gap"></div>
            </div> 
        </div>
    </section><!--/#parceiros-->

    <section id="sobre-nos">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Sobre nós</h2>
                    <p class="lead">
					A TCIx Informática S/C Ltda. com CNPJ: 067.852.913/0001-07 foi fundada em 1992 com o objetivo de criar projetos de informática estruturados tanto dos mais básicos aos mais avançados, destinados às empresas de médio e grande porte.<br />
					Nesse período, desenvolveu e consolidou conhecimentos de software nos diversos ramos de atividades comerciais e industriais, notadamente em ambientes operacionais Linux e Internet.<br />
					Conta hoje com uma equipe capacitada e uma gama de produtos prontos para implantação imediata, além de serviços de consultoria, assessoria e desenvolvimento de sistemas específicos.<br />
					</p>
                </div>

            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#sobre-nos-->

    <section id="contato">
        <div class="container">
            <div class="box last">
                <div class="row">

					<script type="text/javascript">

						/*validação*/
						$(document).ready(function() {

							$('#formularioContato').validate({
								rules: {
									nome: {required: true},
									email: {required: true, email: true},
									mensagem: {required: true}
								},
								messages: {
									nome: {required: ''},
									email: {required: '', email: "Digite um e-mail válido"},
									mensagem: {required: ''}
								},
								submitHandler: function(form) {
									var dados = $(form).serialize();

									$.ajax({
										type: "POST",
										url: "<?=$url_seo?>processa_email.php",
										data: dados,
										success: function(dados)
										{
											$("#contentee").html('');
											$("#contentee").append(dados);
										},
										beforeSend: function() {
											$('.loading').fadeIn('fast');
										},
										complete: function() {
											$('.loading').fadeOut('fast');
										}

									});

									return false;
								}
							});
						});					  
					</script>

					<style>
						.loading { display: none; }
						input.error { border: 1px solid red; }
					</style>

                    <div class="col-sm-6">
                        <h1>Contato</h1>
                        <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
                        <!-- <div class="status alert alert-success" style="display: none"></div> -->
                        <form name="formularioContato" id="formularioContato" class="contato-form" method="post" action="#" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="mensagem" id="mensagem" class="form-control" rows="8"></textarea>
                                    </div>
                                    <div class="form-group">

										<img src="<?=$url_seo?>images/loading-antigo.gif" class="loading">
										<div id="contentee"></div>

                                        <button type="submit" id="enviar" class="btn btn-danger btn-lg">enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Onde estamos</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>VendedorWeb</strong><br />
                                    Rua São Tomé, 119 cj.94 - Vila Olímpia<br />
                                    São Paulo, SP<br>
                                    <abbr title="Phone">Tel.:</abbr> (11) 3044-3375<br />
                                    <abbr title="Phone">Tel2.:</abbr> (11) 98133-2242
                                </address>
                            </div>
                            <!-- <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div> -->
                        </div>
                        <!-- <h1>Connect with us</h1> -->
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/TCIx-Inform%C3%A1tica-188730104500194/" target='_blank'><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <!-- <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li> -->
                                </ul>
                            </div>
                            <!-- <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contato-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?=date('Y')?> <a href="http://www.tcix.com.br" title="TCIx Informática" target="_blank">TCIx Informática</a>. Todos os direitos reservados
                </div>
                <div class="col-sm-6">
                    <!-- <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap"> -->
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
	<script>
    $('.carousel').carousel({
      interval: 3000
    })
	</script>

</body>
</html>