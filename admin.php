<?php 
    include ("header.php");
    include ("conecta.inc.php");
 
    $sql = mysqli_query($conn,"SELECT * FROM users");
  	$sql2 = mysqli_query($conn,"SELECT * FROM mestres");

	
	//$busca = mysqli_query($conn,"SELECT count(id) AS total FROM users WHERE total = id");
    //$busca = mysqli_query($conn, "SELECT count(*) AS total FROM users INNER JOIN mestres ON mestres.id = 1");

    $busca = mysqli_query($conn, "SELECT users.id, mestres.id, mestres.mestre, COUNT(users.voto) as total FROM users 
    INNER JOIN mestres ON mestres.id = users.voto
    GROUP BY mestres.id");

    $consu = mysqli_query($conn, "SELECT * FROM users");
    //$consu = mysqli_query($conn,"SELECT count(id) AS tot_voto FROM users INNER JOIN users ON mestres.id = users.voto");

   /*$tot_votos = $conn->prepare($consu);
    $tot_votos -> execute(); 
    $row_voto = $tot_votos->fetch(PDO::FETCH_ASSOC);
    */
?>
<div class="container py-3">
    <h1> Painel Administrativo Usuários e Votos</h1>
    
    <h2>Total votos</h2>
    <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 80%;">MESTRE</th>
            <th style="width: 10%;">Total Votos</th>
          </tr>
        </thead>
        <tbody>
            <?php while($dados3 = mysqli_fetch_array($busca)){ ?>
          <tr>
            <td scope="row" style="width: 10%;"><?=$dados3['id'];?></td>
            <td scope="row" style="width: 80%;"><?=$dados3['mestre'];?></td>
            <td scope="row" style="width: 10%;"><?=$dados3['total'];?></td>
           </tr>
           <?php } ?>
        </tbody>
      </table>
      <br>
    <h2>Usuários</h2>
    <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 25%;">ID</th>
            <th style="width: 85%;">CPF</th>
            <th style="width: 15%;">Voto</th>
          </tr>
        </thead>
        <tbody>
            <?php while($dados = mysqli_fetch_array($sql)){ ?>
          <tr>
            <td scope="row" style="width: 25%;"><?=$dados['id'];?></td>
            <td scope="row" style="width: 50%;"><?=$dados['cpf'];?></td>
            <td scope="row" style="width: 50%;"><?=$dados['voto'];?></td>
           </tr>
           <?php } ?>
        </tbody>
      </table>
      <br>
      <h2>Mestres</h2>
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 25%;">ID</th>
            <th style="width: 40%;">Mestre</th>
            <th style="width: 10%;">Cidade</th>
            <th style="width: 25%;">Opções</th>
          </tr>
        </thead>
        <tbody>
            <?php while($dados2 = mysqli_fetch_array($sql2)){ ?>
          <tr>
            <td scope="row" style="width: 25%;"><?=$dados2['id'];?></td>
            <td scope="row" style="width: 50%;"><?=$dados2['mestre'];?></td>
            <td scope="row" style="width: 50%;"><?=$dados2['cidade'];?></td>
            <td scope="row" style="width: 25%;">
              <a href="/edit/{{z.id}}">  Editar </a> | 
              <a href="/delete/{{z.id}}">  Excluir </a>
            </td>
           </tr>
            <?php } ?>
        </tbody>
      </table>
</div>
