<?php include ("header.php"); ?>
	<!-- Start Banner Area -->
		<section class="generic-banner element-banner relative">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-6">
						<div class="banner-content text-center">
							<h2 class="">Cadastro</h2>
						<div id="mc_embed_signup">
							<form action="cadastrar.php" method="get" class="subscription2 relative">
								<fieldset id="area">
									<input type="text"  id="entrada_1" name="nome" placeholder="Digite seu nome completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome completo'" required> 
									<button class="primary-btn">OK<span class="lnr lnr-arrow-right"></span></button>
                    			</fieldset>
							</form>
								<?php include ("teclado2.php"); ?>
						</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</section>
	</div>

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>