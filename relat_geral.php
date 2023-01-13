<?php
include ("conecta.inc.php");
include ("header2.php");

	$sql = mysqli_query($conn,"SELECT * FROM cadastros");
	
	//$sql = mysqli_query($conn,"SELECT * FROM cadastro INNER JOIN registro ON registro.mat = cadastro.matricula");
	//$sql = mysqli_query($conn,"SELECT * FROM cadastros INNER JOIN registro ON registro.mat = cadastros.matricula");
?>
		<!-- Start Align Area -->
		<div class="white-bg">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-30">Relatório de presença</h3>
					<h4 style="text-align: right;"><button onClick="window.print()" class="genric-btn default" value="Imprimir"><i class="fa fa-print"> Imprimir</i></button>
					<a href="salvar.php" target="_blank" class="genric-btn default"><i class="fa fa-download"> Salvar  </i></a></h4>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">Matrícula</div>
								<div class="country">Nome</div>
							</div>
							<?php while($dados = mysqli_fetch_array($sql)){ ?>
							<div class="table-row">
								<div class="serial"><?=$dados['matricula'];?></div>
								<div class="country"><?=ucwords(strtolower($dados['nome']));?></div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>