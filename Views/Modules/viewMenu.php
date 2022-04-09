<?php

	include("Utils/LayoutUtils.php");

	@session_start();

	$layout = new LayoutUtils();

	$layout->imprimeCabecalho();

	if(isset($_SESSION['token'])){

		echo "
	
		<div id='conteudo'>
			<br /><br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br /><br /><br />
		</div>	
	
	";		

	}	
	else{

		echo "
	
		<div id='conteudo'>
			<form action='LoginLogoutController.php' method='post'>
			<fieldset>
				<legend>Autenticação</legend>
				<table>
					<tr>
						<td>Usuário:</td><td><input type='text' name='usuario'></td>
					</tr>
					<tr>
						<td>Senha:</td><td><input type='password' name='senha'></td>
					</tr>
					<tr>
						<input type='hidden' name='function' value='login'>
						<td><input type='submit' name='submit' value='enviar'></td>
					</tr>
				</table>
			</fieldset>
			</form>
		</div>	
	
	";		

	}	

	$layout->imprimeRodape();
	
	$layout->__destruct();
				
?>