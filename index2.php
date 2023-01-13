<?php include ("header.php"); ?>

		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="generic-banner element-banner relative">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-6">
						<div class="banner-content text-center">
							<h2 class="">Registro de entrada</h2>
						<div id="mc_embed_signup">
							<form action="realizado.php" method="get" class="subscription relative">
								<fieldset id="area">
								
									<input class="subscription" type="number" id="entrada_1" name="matricula" placeholder="Digite sua matricula" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua matricula'" required>
                    			    <!--input type="text" name="entrada_1" id="entrada_1" /></label-->
                    			</fieldset>
									<button class="primary-btn">Registre seu CPF para votar<span class="lnr lnr-arrow-right"></span></button>
							</form>
								<?php include ("teclado.php"); ?>
									
						</div>
					</div>
				</div>
				
			</div>
		</section>
			
		</div>

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		-->
		<script src="js/main.js"></script>
	</body>
</html>
