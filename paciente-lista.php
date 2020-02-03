<?php  
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table {
			width: 50%;
			border-collapse: collapse;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div class="filtro">
		
	</div>
	<div class="lista">
		<table>
			<tr>
				<th>Nome</th>
				<th>Data Nasc.</th>
				<th>Ações</th>
			</tr>
			<?php  
				$conn = new Conexao();			
				$comando = "select * from paciente";
				$pacientes = $conn->execute($comando);

				while ($paciente = $pacientes->fetch_array()) {
					
					echo "<tr>";
						echo "<td>".$paciente["nome"]."</td>";
						echo "<td>".$paciente["data_nascimento"]."</td>";
						echo "<td><a href='#'>Editar</a></td>";					
					echo "</tr>";

				}				
			?>
		</table>
	</div>		
</body>
</html>