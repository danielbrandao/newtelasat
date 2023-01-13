<?php 
include ("header.php"); 
include ("conecta.inc.php"); 

	$cpf = $_POST['cpf'];

    $busca = "SELECT * FROM mestres order by rand()";
    $dados2 = mysqli_query($conn,$busca);

?>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                <p style = "text-align: center; font-size: 18px; color: #fff;">Escolha aqui qual mestre da nossa galeria você gostaria de conhecer melhor.<br>
                 O mestre mais votado, ao final do 35° salão, terá sua vida e obra registrada em um documentário.
                    <br><b>Agradecemos antecipadamente sua atenção.</b></p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators >
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol-->   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                        <?php while($dados = mysqli_fetch_array($dados2)){ ?>
                            <div class="col-sm-3" style="margin-bottom: 30px;">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="imagens/mestres/<?=$dados['id'];?>.jpg" class="img-fluid" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <form action="obrigado.php" method="post">
                                            <input type="hidden" name="voto" id="voto" value="<?=$dados['id'];?>">
                                            <input type="hidden" name="cpf" id="cpf" value="<?=$_POST['cpf'];?>">
                                            <h4><?=$dados['mestre'];?></h4>
                                            <p><?=$dados['categoria'];?></p>
                                            <p class="item-price"><b><?=$dados['cidade'];?></b></p>
                                            <button type="submit" class="btn btn-primary">Escolher</button>
                                        </form>
                                    </div>						
                                </div>
                            </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                <!-- Carousel controls >
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a-->
            </div>
            </div>
        </div>
    </div>
</body>
</html>