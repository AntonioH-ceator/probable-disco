<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header ("Location: ../index.php");
	}
?>
<!doctype html>
<html class="fixed">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Personalização</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
	<link rel="icon" href="../img/logofinal.png" type="image/x-icon">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="../assets/vendor/modernizr/modernizr.js"></script>

	<!-- Vendor -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
	<!-- Specific Page Vendor -->
	<script src="../assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		
	<!-- Theme Base, Components and Settings -->
	<script src="../assets/javascripts/theme.js"></script>
		
	<!-- Theme Custom -->
	<script src="../assets/javascripts/theme.custom.js"></script>
		
	<!-- Theme Initialization Files -->
	<script src="../assets/javascripts/theme.init.js"></script>

	<!-- javascript functions --> <script
	src="../Functions/onlyNumbers.js"></script> <script
	src="../Functions/onlyChars.js"></script> <script
	src="../Functions/mascara.js"></script>

	<!-- jquery functions -->
	<script>
   		document.write('<a href="' + document.referrer + '"></a>');
	</script>

	<script type="text/javascript">
		$(function () {
	      $("#header").load("header.html");
	      $(".menuu").load("menu.html");
	    });	
    </script>
    
    <!-- javascript tab management script -->

    

</head>
<body>
	<section class="body">
		<div id="header"></div>
	        <!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left menuu"></aside>
			<!-- end: sidebar -->
			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Personalização</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="./home.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Páginas</span></li>
							<li><span>Personalização</span></li>
						</ol>
						<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!--start: page-->

				<div class="row" style="user-select:none;">
					<div class="col-md-4 col-lg-2"></div>
					<div class="col-md-8 col-lg-8">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item active">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#img-tab" role="tab" aria-controls="home" aria-selected="true">Imagens</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#txt-tab" role="tab" aria-controls="profile" aria-selected="false">Textos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">

							<!-- start: image tab pane-->

							<div class="tab-pane active" id="img-tab" role="tabpanel" aria-labelledby="home-tab">
								<table class="table table-hover">
									<thead>
										<tr>
										<th scope="col">ID</th>
										<th scope="col" width="30%">Campo</th>
										<th scope="col">Visualização</th>
										</tr>
									</thead>
									<tbody>
										
										<tr onclick="post('personalizacao_selecao.php', {tipo: 'img', id: 1})">
											<th scope="row">1</th>
											<td>Logo</td>
											<td>
												<a><img id="img-1" src="../img/logofinal.png" width="100%"></a>
												<div id="file-1" style="display:none;" class="text-center mx-auto rounded bg-default">
													<form action="personalizacao_upload.php" method="post"  enctype="multipart/form-data">
														<input type="file" name="img_file" class="form-control-file" style="padding-top: 25%;">
														<input type="submit" value="Selecionar" class="btn btn-success" style="margin-top: 10px; margin-bottom: 25%;">
													</form>
												</div>
											</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Carrossel</td>
											<td><img src="../img/LAJE1.jpg" width="100%"></td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Carrossel</td>
											<td><img src="../img/LAJE2.jpg" width="100%"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- end: image tab pane-->

							<!-- start: text tab pane-->

							<div class="tab-pane fade" id="txt-tab" role="tabpanel" aria-labelledby="profile-tab">
								<table class="table table-hover">
									<thead>
										<tr>
										<th scope="col">ID</th>
										<th scope="col">Nome</th>
										<th scope="col">Visualização</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<th scope="row">1</th>
										<td>Título</td>
										<td>LAJE - Lar Abrigo Amor a Jesus</td>
										</tr>
										<tr>
										<th scope="row">2</th>
										<td>Subtítulo</td>
										<td>Web Gerenciador de instituições assistenciais</td>
										</tr>
										<tr>
										<th scope="row">3</th>
										<td>Conheça</td>
										<td>O LAJE, Entidade Filantrópica fundada em 14 de julho de 1929, por um pequeno grupo de pessoas, todas friburguenses, preocupadas com a morte constante de mendigos nas ruas de nossa cidade, em função de frio e fome. <br>

Dirigida por um grupo de voluntários, a diretoria é eleita de dois em dois anos para mandato que poderá ser renovado por mais dois anos. Um dos claros objetivos desde sua criação sempre foi o envolvimento da comunidade no trabalho voluntário. <br>

Hoje, o Lar Abrigo Amor a Jesus é uma ILPI (Instituição de Longa Permanência para Idosos) e segue as normas previstas pela ANVISA. A Casa abriga cerca de 80 idosos, todos carentes, necessitados de cuidados especiais.</td>
										</tr>
										<tr>
										<th scope="row">2</th>
										<td>Objetivo</td>
										<td>O objetivo principal do Lar Abrigo é a recuperação física e psicológica dos abrigados, tirando-lhes das condições sub-humanas em que muitas vezes são encontrados. <br>

No Laje, há uma equipe de psicólogos, fisioterapeutas, nutricionistas, recreadores, médicos, enfermeiros, auxiliares e técnicos de enfermagem, cuidadores, além de equipes de apoio de lavanderia, limpeza, cozinha e as equipes administrativas e de serviços logísticos.</td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- end: text tab pane-->

							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
							</div>
						</div>
					</div>
				</div>
				<!-- end: page -->
				
				<script>
					function edit_row(id){
						window.location.href = "http://localhost/wegia-master/html/selecao_personalizacao.php?campo="
						/*
						var imagem = document.getElementById(`img-${id}`);
						var input = document.getElementById(`file-${id}`);
						if (input.style.display == "none"){
							imagem.style.display = "none";
							input.style.display = "block";
						}else{
							imagem.style.display = "block";
							input.style.display = "none";

						}
						*/
					}

					function post(path, params, method='post') {
						const form = document.createElement('form');
						form.method = method;
						form.action = path;

						for (const key in params) {
							if (params.hasOwnProperty(key)) {
								const hiddenField = document.createElement('input');
								hiddenField.type = 'hidden';
								hiddenField.name = key;
								hiddenField.value = params[key];

								form.appendChild(hiddenField);
							}
						}

						document.body.appendChild(form);
						form.submit();
					}
				</script>

			</section>
		</div>
	</section>
</body>
</html>