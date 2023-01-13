<?php
include ("conecta.inc.php");
include ("header.php");

  	$sql = mysqli_query($conn,"SELECT * FROM users");
  	$sql2 = mysqli_query($conn,"SELECT * FROM mestres");

	
	$busca = mysqli_query($conn,"SELECT count(*) FROM mestres INNER JOIN users ON mestres.id = users.voto");

?>
		<!-- Start Align Area -->
		<div class="white-bg">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-30">Relatório de votos</h3>
					<h4 style="text-align: right;"><button onClick="window.print()" class="genric-btn default" value="Imprimir"><i class="fa fa-print"> Imprimir</i></button>
					<a href="gerar_plan.php" target="_blank" class="genric-btn default"><i class="fa fa-download"> Salvar  </i></a></h4>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">Mestre</div>
								<div class="country">Votos</div>
							</div>
							<?php while($dados = mysqli_fetch_array($sql)){ ?>
							<div class="table-row">
								<div class="serial"><?=$dados['id'];?></div>
								<div class="country"><?=$dados['cpf'];?></div>
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