<?php

	include("Utils/LayoutUtils.php");

	@session_start();

	if(isset($_SESSION['token'])){

		if(isset($_SESSION['module'])){
			$layout = new LayoutUtils($_SESSION['module']);
		}
		else{
			$layout = new LayoutUtils("");
		}
	
		$layout->imprimeCabecalho();

		echo "
	
		<div id='conteudo'>
			<form action='ServletLoginLogout.php' method='post'>
			<fieldset>
				<legend>Escolher-Módulo</legend>
				<table>
					<tr>
						<td>Escolha abaixo:</td>
						<td>
							<select name='modulo'>
								<option value=''>selecione..</option>
								<option value='dp'>Dept-Pessoal</option>
								<option value='nf'>Nota-Fiscal</option>
							</select>
						</td>
					</tr>

					<tr>
						<input type='hidden' name='function' value='modulo'>
						<td><input type='submit' name='submit' value='enviar'></td>
					</tr>
				</table>
			</fieldset>
			</form>
		</div>	
	
	";		

	}	
	else{

		$layout = new LayoutUtils("");	
		$layout->imprimeCabecalho();

		echo "
	
		<div id='conteudo'>
			<form action='ServletLoginLogout.php' method='post'>
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