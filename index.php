<?php
	session_start();

	// INCLUINDO OS COMPONENTES (CABEÇALHO, MENU E RODAPÉ):
	include_once("./src/components/cabecalho.php");
	include_once("./src/components/menu.php");
	include_once("./src/components/rodape.php");

	// INCLUINDO O ARQUIVO DataRequest.php PARA OBTER AS INFORMAÇÕES DOS CLIENTES, FORNECEDORES E USUÁRIOS
	include_once("./DataRequest.php");

	// VARIÁVEIS COM O NÚMERO TOTAL DE CLIENTES, FORNECEDORES E USUÁRIOS
	$dataRequest = new DataRequest();
	$quantidadeClientes = $dataRequest->dadosClientes('c');
	$quantidadeUsuarios = $dataRequest->dadosUsuarios('c');
	$quantidadeFornecedores = $dataRequest->dadosFornecedores('c');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Multidados TI</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<!-- jQuery -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- COMPONENTE CABECALHO -->
<?php echo cabecalho(); ?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- COMPONENTE MENU -->
	<?php echo menu($menu);?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>tudo que você precisa à um click.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue clientes">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $quantidadeClientes; ?>
							</div>
							<div class="desc">
								Clientes
							</div>
						</div>
						<a class="more"  href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green usuarios">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $quantidadeUsuarios; ?>
							</div>
							<div class="desc">
								Usuários
							</div>
						</div>
						<a class="more"  href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple fornecedores">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $quantidadeFornecedores; ?>
							</div>
							<div class="desc">
								Fornecedores
							</div>
						</div>
						<a class="more" href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<!--Tabela-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i><span id="tituloTabela">Tabela Simples</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Nome
									</th>
									<th>
										Sobrenome
									</th>
									<th>
										Usuario
									</th>
									<th>
										Status
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										makr124
									</td>
									<td>
										<span class="label label-sm label-success">
											Aprovado
										</span>
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Nilson
									</td>
									<td>
										jac123
									</td>
									<td>
										<span class="label label-sm label-info">
											Pendente
										</span>
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										Cooper
									</td>
									<td>
										lar
									</td>
									<td>
										<span class="label label-sm label-warning">
											Suspenso
										</span>
									</td>
								</tr>
								<tr>
									<td>
										4
									</td>
									<td>
										Sandy
									</td>
									<td>
										Lim
									</td>
									<td>
										sanlim
									</td>
									<td>
										<span class="label label-sm label-danger">
											Bloqueado
										</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- COMPONENTE RODAPÉ -->
<?php echo rodape(); ?>
<!-- SCRIPT -->
<script>
        // OBTER OS BOTÕES VISUALIZAR 
        let botaoVisualizar = document.querySelectorAll('.dashboard-stat .more');
		
        // CRIANDO UM EVENTO AO CLICAR NO BOTÃO
        botaoVisualizar.forEach(function (botao) {
            botao.addEventListener('click', function () {

                // OBTER A CLASSE 
                let cor = this.closest('.dashboard-stat').classList[1];

                // REMOVER A CLASSE DA TABELA
                document.querySelector('.portlet.box').classList.remove('blue', 'green', 'purple','grey');
                
                // ADICIONAR A CLASSE (COR) NA TABELA
                document.querySelector('.portlet.box').classList.add(cor);

            });
        });


		// REQUISIÇÃO AJAX
		$(document).ready(function() {
			$('.dashboard-stat .more').on('click', function() {
				
				// EXTRAIR A TERCEIRA CLASSE DO ELEMENTO (clientes, usuarios, fornecedores)
				let classe = this.closest('.dashboard-stat').classList[2];
				
				$.ajax({
					url: 'DataRequest.php',
					type: 'POST',
					data: { classe: classe },
					dataType: "json",
					success: function(response){
						alterarTabela(response, classe);
					},
					error: function() {
						console.log('Erro');
					}
				});
			});
		});

		// Função para atualizar Tabela
		function alterarTabela(data, classe) {

			// Titulo Tabela
			let titulo = classe
			if(titulo === 'usuarios'){
				titulo = 'Usuários';
			}
			// Deixar a primeira Letra da palavra Maiúscula
			titulo = titulo.charAt(0).toUpperCase() + titulo.slice(1);
			document.getElementById('tituloTabela').innerHTML = titulo;
			
			// Váriavel contendo a estrutura e dados da tabela
            let tabela = "<table><tr>";
            for (let key in data[0]) {
				// Deixar a primeira Letra da palavra Maiúscula
				key = key.charAt(0).toUpperCase() + key.slice(1);
                tabela += "<th>" + key + "</th>";
            }
            tabela += "</tr>";
            for(let i=0; i<data.length; i++) {
                tabela += "<tr>";
                for (let key in data[i]) {
                    tabela += "<td>" + data[i][key] + "</td>";
                }
                tabela += "</tr>";
            }
            tabela += "</table>";
			// Substituir o conteúdo HTML que possui a classe table
            $(".table").html(tabela);

        }
</script>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>