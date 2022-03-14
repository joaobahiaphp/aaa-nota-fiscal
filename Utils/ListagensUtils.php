<?php

class ListagensUtils{
	
	public function __construct(){
		
	}
	
	public function __destruct(){
		
	}
	
	public function ListarEntidades($matriz = array()){
		
	echo "
	
	    <script>
		$(document).ready(function(){
		  $('#myInput').on('keyup', function() {
			var value = $(this).val().toLowerCase();
			$('#myTable tr').filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});
		</script>
	
		<div id='conteudo'>
			<p class='titulo'>Listagem de Pessoas Cadastradas</p>
			<fieldset>
				<legend>Pesquisar</legend>
				<table>
					<tr>
						<td style='width:140px'>Pesquisar:</td><td><input id='myInput' type='text' placeholder='Search..'><input type='button' onclick='vaiPara();' value='Novo Cliente/Fornecedor'></td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Lista de Pessoas Cadastradas</legend>
				<table>
					<tr>
						<td class='alargar'><b>CPF/CNPJ</b></td>
						<td class='alargar'><b>NOME/EMPRESA</b></td>
						<td class='alargar'><b>STATUS</b></td>
						<td class='alargar'><b>AÇÕES</b></td>
					</tr>
				
					<tbody id='myTable'>
	";
	
	foreach($matriz as $matrix){

		echo "
	
			<tr>
				<td class='alargar'>{$matrix['cpf-cnpj']}</td>
				<td class='alargar'>{$matrix['nome-razao-social']}</td>
				<td class='alargar'>{$matrix['situacao']}</td>
				<td>
					<a class='acoes-abrir' href='index.php?v=VisualizarPessoa&id={$matrix['id']}'>visualizar</a>&nbsp;
					<a class='acoes-editar' href=''>editar</a>
				</td>
			</tr>	
		
		";
		
	}

	echo "			
					</tbody>
				</fieldset>
			</table>
		</div>	
	
	";			
		
	}

}

?>