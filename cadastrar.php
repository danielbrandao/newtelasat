<?php 
include ("header.php"); 
include ("conecta.inc.php"); 

	$nome = $_GET['nome'];

	//$query = "INSERT INTO cadastros (nome) VALUES ('$nome')";
	//$dados = mysqli_query($conn,$query);

	$query = "INSERT INTO registros (nome) VALUES ('$nome')";
	$dados = mysqli_query($conn,$query);

?>
		<!-- Start Banner Area -->
		<section class="generic-banner element-banner relative">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-6">						
							<div class="banner-content text-center">
								<h2 class="">Bem-vindo(a) <?=ucwords(mb_strtolower($nome));?></h2>
							<div id="mc_embed_signup">
								<h3 class="info">Registro realizado com sucesso!</h3>
							</div>
							</div>
							<?php header("Refresh: 4, index.php"); ?>
							<div class="banner-content text-center">
								<a href="index.php" class="primary-btn">Voltar ao início<span class="lnr lnr-arrow-left"></span></a>	
							</div>
							
					</div>
				</div>
				
			</div>
		</section>
			
		</div>
	</body>
</html>
