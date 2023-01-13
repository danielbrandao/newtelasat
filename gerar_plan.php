<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 * Adaptado por: Daniel Brandão - @falecom@danielbrandao.com.br
 *-->
 <?php
	include_once('conecta.inc.php');

    $busca = mysqli_query($conn, "SELECT users.id, mestres.id, mestres.mestre, COUNT(users.voto) as total FROM users 
    INNER JOIN mestres ON mestres.id = users.voto
    GROUP BY mestres.id");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Relatório do evento</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'arquivo.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="2">Planilha de Votação</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Mestre</b></td>';
		$html .= '<td><b>Total de votos</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_registros = "SELECT * FROM users";
        //$result_registros = "SELECT * FROM users INNER JOIN mestres ON mestres.id = users.voto";
		$resultado_registros = mysqli_query($conn , $result_registros);
		
		 while($dados3 = mysqli_fetch_array($busca)){ 
			$html .= '<tr>';
			//$html .= '<td>'.$busca["id"].'</td>';
			$html .= '<td>' . $dados3['mestre'] . '</td>';
			$html .= '<td>'.$dados3["total"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>