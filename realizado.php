<?php 
include ("header.php"); 
include ("conecta.inc.php"); 

	//$matricula = $_GET['matricula'];

	$dados = mysqli_query($conn,"SELECT * from cadastros WHERE matricula = '$_GET[matricula]'");

?>
		<!-- Start Banner Area -->
		<section class="generic-banner element-banner relative">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-6">
						<?php 
							$cadastro = mysqli_fetch_array($dados);
							if($cadastro['matricula'] == $_GET['matricula']){
						?>								
						<div class="banner-content text-center">
							<h2 class="">Bem-vindo(a) <?=ucwords(mb_strtolower($cadastro['nome']));?></h2>
						<div id="mc_embed_signup">
								<h3 class="info">Registro de entrada efetivado!</h3>
							<?php	$inserir = mysqli_query($conn,"INSERT INTO registros VALUES ('$_GET[matricula]','$cadastro[nome]')"); ?>
						</div>
						<div class="banner-content text-center">
								<a href="index.php" class="primary-btn">Voltar ao início<span class="lnr lnr-arrow-left"></span></a>	
							</div>
						</div>
						<?php 
							header("Refresh: 4, index.php"); ?>
						<?php }else{ ?>
						<div class="banner-content text-center">
							<h2 class="">Matricula não encontrada!</h2>
						<div id="mc_embed_signup">
							<h3>Escolha uma das opções:</h3>
							<div class="primary-btn" style="margin-bottom: 20px; text-align: center;"><a href="index.php">Digitar matricula novamente</div><br>
							<div class="primary-btn" style="margin-bottom: 10px; text-align: center;"><a href="cadastro.php">Realizar cadastro</a></div>
						</div>
						</div>
						<?php } ?>	
					</div>
				</div>
				
			</div>
		</section>
			
		</div>
	</body>
</html>