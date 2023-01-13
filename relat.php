<?php
include ("conecta.inc.php");
include ("header.php");
    
    $id = 1;

  	$sql = $conn->query("SELECT * FROM users");
  	$sql2 = $conn->query("SELECT * FROM mestres");

    $stmt = $conn->prepare($sql2);
    $stmt->execute(array('id' => $id));

    $result = $stmt->fetchAll();
	
	$busca = $conn->query("SELECT count(id) FROM users WHERE voto = 1");
    // INNER JOIN users ON mestres.id = users.voto");

    //$consu = $conn->query("SELECT count(id) as qtd_voto FROM users INNER JOIN users ON mestres.id = users.voto");

    //$tot_votos = $conn->prepare($consu);
    $tot_votos = $conn->prepare($sql2);
    $tot_votos -> execute(); 
    $row_voto = $tot_votos->fetch(PDO::FETCH_ASSOC);

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
                            <?php if (count($result)){
                                foreach($result as $row){
                            ?>
							<div class="table-row">
								<div class="serial"><?php print_r($row);?></div>
								<div class="country"><?=$row['mestre'];?></div>
                                <div class="country"><?=$row['cidade'];?></div>
							</div>
                            <?php } } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>