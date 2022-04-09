<?php

class FormulariosUtils{

	public function __construct(){
		
	}
	
	public function __destruct(){
		
	}

	public function imprimeFormularioCadastro($tipo){
		
		if($tipo==""){

			echo "
			
				<script type='text/javascript'>
					
					function escolherTipo(){
						var n_curso = document.getElementById('selecionaTipo').value;
						switch(n_curso){
							case 'fisica':
								location.href = 'index.php?v=CadastrarPessoa&tipo=fisica';
							break;
							case 'juridica':
								location.href = 'index.php?v=CadastrarPessoa&tipo=juridica';
							break;	
							default:
								location.href = 'index.php?v=CadastrarPessoa';
							break;
						}
					}
				
				</script>
			
				<div id='conteudo'>
				<p class='titulo'>Cadastrar Pessoa</p>
				<form action='InsertController.php' method='post'>
					
					<fieldset>
						<legend>Pessoa</legend>
						<table>
							<tr>
								<td class='alinha-direita'>Escolha o tipo de Pessoa</td>
								<td>
									<select name='tipo' id='selecionaTipo' onchange='escolherTipo()'>
										<option value='' selected='selected'>selecione..</option>
										<option value='juridica' >Pessoa Jurídica</option>
										<option value='fisica' >Pessoa Física</option>
									</select>
								</td>
							</tr>			
						</table>
					</fieldset>			
				</form>
				</div>
			
			";

		}
		else{

			switch($tipo){
				case 'fisica':

					echo "

						<script type='text/javascript'>
							
							function escolherTipo(){
								var n_curso = document.getElementById('selecionaTipo').value;
								switch(n_curso){
									case 'fisica':
										location.href = 'index.php?v=CadastrarPessoa&tipo=fisica';
									break;
									case 'juridica':
										location.href = 'index.php?v=CadastrarPessoa&tipo=juridica';
									break;	
									default:
										location.href = 'index.php?v=CadastrarPessoa';
									break;
								}
							}
						
						</script>
					
						<div id='conteudo'>
						<p class='titulo'>Cadastrar Pessoa - Pessoa Física</p>
						<form action='InsertController.php' method='post'>
							
							<fieldset>
								<legend>Pessoa</legend>
								<table>
									<tr>
										<td class='alinha-direita'>Escolha o tipo de Pessoa</td>
										<td>
											<select name='tipo' id='selecionaTipo' onchange='escolherTipo()'>

												<option value='juridica'>Pessoa Jurídica</option>
												<option value='fisica' selected='selected'>Pessoa Física</option>
											</select>
										</td>
									</tr>
									<tr><td class='alinha-direita'>Nome/Razão Social:</td><td><input type='text' style='width:400px;' name='nome_razao_social' maxlength='150'><td></tr>
									<tr>
										<td class='alinha-direita'>CPF:</td>
										<td>
											<input type='text' name='nr_cpf' maxlenght='18' style='width:200px'> &nbsp;
											Inscrição Estadual:<input type='text' name='nr_insc_estadual'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Emite Nota-fiscal ?:</td>
										<td> Sim <input type='radio' name='emite-nota' value='sim'>&nbsp;Não  <input type='radio' name='emite-nota' value='nao'></td>
									</tr>									
									<tr>
										<td class='alinha-direita'>É cliente ?:</td>
										<td> Sim <input type='radio' name='eh-cliente' value='sim'>&nbsp;Não  <input type='radio' name='eh-cliente' value='nao'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>É Fornecedor ?:</td>
										<td> Sim <input type='radio' name='eh-fornecedor' value='sim'>&nbsp;Não  <input type='radio' name='eh-fornecedor' value='nao'></td>
									</tr>							
									
								</table>
							</fieldset>

							<fieldset>
								<legend>Endereço</legend>
								<table>
									<tr>
										<td class='alinha-direita'>Logradouro:</td><td><input type='text' style='width:500px' name='logradouro'></td>
										<td class='alinha-direita'>Número:</td><td><input type='text' name='nr_lote'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Complemento:</td><td><input type='text' name='complemento' style='width:380px;'></td>
										<td class='alinha-direita'>Bairro: </td><td><input type='text' name='bairro'></td>
										<td class='alinha-direita'>CEP:</td><td><input type='text' name='cep'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>País</td>
										<td>
											<select name='pais'>
												<option value=''>selecione...</option>
												<option value='Argentina'>Argentina</option>
												<option value='Bolivia'>Bolivia</option>
												<option value='Brasil'>Brasil</option>
												<option value='Estados_Unidos'>Estados Unidos</option>
												<option value='Japao'>Japão</option>
												<option value='Paraguai'>Paraguai</option>
												<option value='Portugal'>Portugal</option>
												<option value='Uruguai'>Uruguai</option>
											</select>
											&nbsp;
											UF:
											<select name='uf'>
												<option value=''>selecione..</option>
												<option value='df'>Distrito Federal</option>
												<option value='go'>Goiás</option>
												<option value='ba'>Bahia</option>
												<option value='mg'>Minas Gerais</option>
											</select>
											&nbsp;
											Município:<input type='text' name='municipio' style='width:200px'>							
										</td>
									</tr>
								</table>
							</fieldset>

							<fieldset>
								<input type='hidden' name='entidade' value='fisica'>
								<table>
									<input type='submit' name='submit' value='Cadastrar'>&nbsp;<input type='reset' name='reset' value='Limpar'>&nbsp;
								</table>
							</fieldset>					
						</form>
						</div>
					
					";

				break;
				case 'juridica':

					echo "
					
						<script type='text/javascript'>
							
							function escolherTipo(){
								var n_curso = document.getElementById('selecionaTipo').value;
								switch(n_curso){
									case 'fisica':
										location.href = 'index.php?v=CadastrarPessoa&tipo=fisica';
									break;
									case 'juridica':
										location.href = 'index.php?v=CadastrarPessoa&tipo=juridica';
									break;	
									default:
										location.href = 'index.php?v=CadastrarPessoa';
									break;
								}
							}
						
						</script>

						<div id='conteudo'>
						<p class='titulo'>Cadastrar Pessoa - Pessoa Jurídica</p>
						<form action='InsertController.php' method='post'>
							
							<fieldset>
								<legend>Pessoa</legend>
								<table>
									<tr>
										<td class='alinha-direita'>Escolha o tipo de Pessoa</td>
										<td>
											<select name='tipo' id='selecionaTipo' onchange='escolherTipo()'>
												<option value='juridica' selected='selected'>Pessoa Jurídica</option>
												<option value='fisica'>Pessoa Física</option>
											</select>
										</td>
									</tr>
									<tr><td class='alinha-direita'>Nome/Razão Social:</td><td><input type='text' style='width:400px;' name='nome_razao_social' maxlength='150'><td></tr>
									<tr><td class='alinha-direita'>Nome Fantasia: </td><td><input type='text' style='width:400px;' name='nome_fantasia' maxlength='150'></td></tr>					
									<tr>
										<td class='alinha-direita'>CNPJ:</td>
										<td>
											<input type='text' name='nr_cnpj' maxlenght='18' style='width:200px'> &nbsp;
											Inscrição Estadual:<input type='text' name='nr_insc_estadual'>
										</td>
									</tr>
									<tr>
										<td class='alinha-direita'>CNAE Fiscal:</td><td><input type='text' name='nr_cnae_fiscal' style='width:180px;'> &nbsp; 
										Inscrição Municipal:<input type='text' style='width:180px;' name='nr_insc_municipal'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Inscrição Estadual Substituto</td><td><input type='text' name='nr_insc_estadual_substituto'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Regime Tributário:</td><td><input type='text' name='regime_tributario'>
											&nbsp; 
											Telefone: <input type='text' name='telefone'>
										</td>
									</tr>
									<tr>
										<td class='alinha-direita'>Emite Nota-fiscal ?:</td>
										<td> Sim <input type='radio' name='emite-nota' value='sim'>&nbsp;Não  <input type='radio' name='emite-nota' value='nao'></td>
									</tr>									
									<tr>
										<td class='alinha-direita'>É cliente ?:</td>
										<td> Sim <input type='radio' name='eh-cliente' value='sim'>&nbsp;Não  <input type='radio' name='eh-cliente' value='nao'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>É Fornecedor ?:</td>
										<td> Sim <input type='radio' name='eh-fornecedor' value='sim'>&nbsp;Não  <input type='radio' name='eh-fornecedor' value='nao'></td>
									</tr>								
								</table>
							</fieldset>
							<fieldset>
								<legend>Endereço</legend>
								<table>
									<tr>
										<td class='alinha-direita'>Logradouro:</td><td><input type='text' style='width:500px' name='logradouro'></td>
										<td class='alinha-direita'>Número:</td><td><input type='text' name='nr_lote'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Complemento:</td><td><input type='text' name='complemento' style='width:380px;'></td>
										<td class='alinha-direita'>Bairro: </td><td><input type='text' name='bairro'></td>
										<td class='alinha-direita'>CEP:</td><td><input type='text' name='cep'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>País</td>
										<td>
											<select name='pais'>
												<option value=''>selecione...</option>
												<option value='Argentina'>Argentina</option>
												<option value='Bolivia'>Bolivia</option>
												<option value='Brasil'>Brasil</option>
												<option value='Estados_Unidos'>Estados Unidos</option>
												<option value='Japao'>Japão</option>
												<option value='Paraguai'>Paraguai</option>
												<option value='Portugal'>Portugal</option>
												<option value='Uruguai'>Uruguai</option>
											</select>
											&nbsp;
											UF:
											<select name='uf'>
												<option value=''>selecione..</option>
												<option value='df'>Distrito Federal</option>
												<option value='go'>Goiás</option>
												<option value='ba'>Bahia</option>
												<option value='mg'>Minas Gerais</option>
											</select>
											&nbsp;
											Município:<input type='text' name='municipio' style='width:200px'>							
										</td>
									</tr>
								</table>
							</fieldset>
							
							<fieldset>
								<legend>Logotipo</legend>
								<table>
									<tr>
										<input type='file'>
									</tr>
								</table>
							</fieldset>
							
							<fieldset>
								<input type='hidden' name='entidade' value='juridica'>
								<table>
									<input type='submit' name='submit' value='Cadastrar'>&nbsp;<input type='reset' name='reset' value='Limpar'>
								</table>
							</fieldset>
						
						</form>
						</div>
					
					";

				break;
			}
		}

	}

	public function imprimeFormularioVisual($matriz = array()){
		foreach($matriz as $matrix){
			if($matrix['tipo']=='fisica'){
				
				echo "
				
					<div id='conteudo'>
					<p class='titulo'>Visualizar/Editar Pessoa</p>
					<form action='UpdateController.php' method='post'>
						
						<fieldset>
							<legend>Pessoa</legend>
							<table>

								<tr><td class='alinha-direita'>Nome/Razão Social:</td><td><input type='text' style='width:400px;' name='nome_razao_social' maxlength='150' value='{$matrix['nome-razao-social']}'><td></tr>
								<tr>
									<td class='alinha-direita'>CPF:</td>
									<td>
										<input type='text' name='nr_cpf' maxlenght='18' style='width:200px' value='{$matrix['cpf-cnpj']}'> &nbsp;
										Inscrição Estadual:<input type='text' name='nr_insc_estadual' value='{$matrix['inscricao-estadual']}'></td>
								</tr>
								<tr>
									<td class='alinha-direita'>Emite Nota-fiscal ?:</td>
									<td> Sim <input type='radio' name='emite-nota' value='sim'"; 
									
									if($matrix['emite-nota']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='emite-nota' value='nao'"; 
									
									if($matrix['emite-nota']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>									
								<tr>
									<td class='alinha-direita'>É cliente ?:</td>
									<td> Sim <input type='radio' name='eh-cliente' value='sim'"; 
									
									if($matrix['eh-cliente']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='eh-cliente' value='nao'"; 
									
									if($matrix['eh-cliente']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>
								<tr>
									<td class='alinha-direita'>É Fornecedor ?:</td>
									<td> Sim <input type='radio' name='eh-fornecedor' value='sim'"; 
									
									if($matrix['eh-fornecedor']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='eh-fornecedor' value='nao'"; 
									
									if($matrix['eh-fornecedor']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>
								
							</table>
						</fieldset>

						<fieldset>
							<legend>Endereço</legend>
							<table>
								<tr>
									<td class='alinha-direita'>Logradouro:</td><td><input type='text' style='width:500px' name='logradouro' value='{$matrix['logradouro']}'></td>
									<td class='alinha-direita'>Número:</td><td><input type='text' name='nr_lote' value='{$matrix['numero']}'></td>
								</tr>
								<tr>
									<td class='alinha-direita'>Complemento:</td><td><input type='text' name='complemento' style='width:380px;' value='{$matrix['complemento']}'></td>
									<td class='alinha-direita'>Bairro: </td><td><input type='text' name='bairro' value='{$matrix['bairro']}'></td>
									<td class='alinha-direita'>CEP:</td><td><input type='text' name='cep' value='{$matrix['cep']}'></td>
								</tr>
								<tr>
									<td class='alinha-direita'>País</td>
									<td>
										<select name='pais'>
										
											<option value='' "; 
											if($matrix['pais']==''){echo "selected='selected'";}
											echo ">selecione...</option>
										
											<option value='Argentina'"; 
											if($matrix['pais']=='Argentina'){echo "selected='selected'";}
											echo ">Argentina</option>
											
											<option value='Bolivia'"; 
											if($matrix['pais']=='Bolivia'){echo "selected='selected'";}
											echo ">Bolivia</option>
											
											<option value='Brasil'"; 
											if($matrix['pais']=='Brasil'){echo "selected='selected'";}
											echo ">Brasil</option>
											
											<option value='Estados_Unidos'"; 
											if($matrix['pais']=='Estados_Unidos'){echo "selected='selected'";}
											echo ">Estados Unidos</option>
											
											<option value='Japao'"; 
											if($matrix['pais']=='Japao'){echo "selected='selected'";}
											echo ">Japão</option>
											
											<option value='Paraguai'"; 
											if($matrix['pais']=='Paraguai'){echo "selected='selected'";}
											echo ">Paraguai</option>
											
											<option value='Portugal'"; 
											if($matrix['pais']=='Portugal'){echo "selected='selected'";}
											echo ">Portugal</option>
											
											<option value='Uruguai'"; 
											if($matrix['pais']=='Uruguai'){echo "selected='selected'";}
											echo ">Uruguai</option>
										</select>
										&nbsp;
										UF:
										<select name='uf'>
											<option value=''"; 
											if($matrix['uf']==''){echo "selected='selected'";}
											echo ">selecione..</option>
											
											<option value='df'"; 
											if($matrix['uf']=='df'){echo "selected='selected'";}
											echo ">Distrito Federal</option>
											
											<option value='go'"; 
											if($matrix['uf']=='go'){echo "selected='selected'";}
											echo ">Goiás</option>
											
											<option value='ba'"; 
											if($matrix['uf']=='ba'){echo "selected='selected'";}
											echo ">Bahia</option>
											
											<option value='mg'"; 
											if($matrix['uf']=='mg'){echo "selected='selected'";}
											echo ">Minas Gerais</option>
										</select>
										&nbsp;
										Município:<input type='text' name='municipio' style='width:200px' value='{$matrix['municipio']}'>							
									</td>
								</tr>
							</table>
						</fieldset>

						<fieldset>
							<input type='hidden' name='tipo' value='fisica'>
							<input type='hidden' name='id' value='{$matrix['id']}'>
							<input type='hidden' name='situacao' value='{$matrix['situacao']}'>
							<table>
								<input type='submit' name='submit' value='Atualizar'>&nbsp;<input type='reset' name='reset' value='Limpar'>
							</table>
						</fieldset>					
					</form>
					</div>
				
				";
				
			}
			if($matrix['tipo']=='juridica'){
				
				echo"
				
						<div id='conteudo'>
						<p class='titulo'>Visualizar/Editar Pessoa</p>
						<form action='UpdateController.php' method='post'>
							
							<fieldset>
								<legend>Pessoa</legend>
								<table>
									<tr><td class='alinha-direita'>Nome/Razão Social:</td><td><input type='text' style='width:400px;' name='nome_razao_social' maxlength='150' value='{$matrix['nome-razao-social']}'><td></tr>
									<tr><td class='alinha-direita'>Nome Fantasia: </td><td><input type='text' style='width:400px;' name='nome_fantasia' maxlength='150' value='{$matrix['nome-fantasia']}'></td></tr>					
									<tr>
										<td class='alinha-direita'>CNPJ:</td>
										<td>
											<input type='text' name='nr_cnpj' maxlenght='18' style='width:200px' value='{$matrix['cpf-cnpj']}'> &nbsp;
											Inscrição Estadual:<input type='text' name='nr_insc_estadual' value='{$matrix['inscricao-estadual']}'>
										</td>
									</tr>
									<tr>
										<td class='alinha-direita'>CNAE Fiscal:</td><td><input type='text' name='nr_cnae_fiscal' style='width:180px;' value='{$matrix['cnae-fiscal']}'> &nbsp; 
										Inscrição Municipal:<input type='text' style='width:180px;' name='nr_insc_municipal' value='{$matrix['inscricao-municipal']}'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Inscrição Estadual Substituto</td><td><input type='text' name='nr_insc_estadual_substituto' value='{$matrix['inscricao-estadual-substituto']}'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Regime Tributário:</td><td><input type='text' name='regime_tributario' value='{$matrix['regime-tributario']}'>
											&nbsp; 
											Telefone: <input type='text' name='telefone' value='{$matrix['telefone']}'>
										</td>
									</tr>
								<tr>
									<td class='alinha-direita'>Emite Nota-fiscal ?:</td>
									<td> Sim <input type='radio' name='emite-nota' value='sim'"; 
									
									if($matrix['emite-nota']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='emite-nota' value='nao'"; 
									
									if($matrix['emite-nota']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>									
								<tr>
									<td class='alinha-direita'>É cliente ?:</td>
									<td> Sim <input type='radio' name='eh-cliente' value='sim'"; 
									
									if($matrix['eh-cliente']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='eh-cliente' value='nao'"; 
									
									if($matrix['eh-cliente']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>
								<tr>
									<td class='alinha-direita'>É Fornecedor ?:</td>
									<td> Sim <input type='radio' name='eh-fornecedor' value='sim'"; 
									
									if($matrix['eh-fornecedor']=='sim'){
										echo " checked = 'checked' ";
									}
									
									echo">&nbsp;Não  <input type='radio' name='eh-fornecedor' value='nao'"; 
									
									if($matrix['eh-fornecedor']=='nao'){
										echo " checked = 'checked' ";
									}
									
									echo"></td>
								</tr>
								</table>
							</fieldset>
							<fieldset>
								<legend>Endereço</legend>
								<table>
									<tr>
										<td class='alinha-direita'>Logradouro:</td><td><input type='text' style='width:500px' name='logradouro' value='{$matrix['logradouro']}'></td>
										<td class='alinha-direita'>Número:</td><td><input type='text' name='nr_lote' value='{$matrix['numero']}'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>Complemento:</td><td><input type='text' name='complemento' style='width:380px;' value='{$matrix['complemento']}'></td>
										<td class='alinha-direita'>Bairro: </td><td><input type='text' name='bairro' value='{$matrix['bairro']}'></td>
										<td class='alinha-direita'>CEP:</td><td><input type='text' name='cep' value='{$matrix['cep']}'></td>
									</tr>
									<tr>
										<td class='alinha-direita'>País</td>
										<td>
											<select name='pais'>
											
												<option value='' "; 
												if($matrix['pais']==''){echo "selected='selected'";}
												echo ">selecione...</option>
											
												<option value='Argentina'"; 
												if($matrix['pais']=='Argentina'){echo "selected='selected'";}
												echo ">Argentina</option>
												
												<option value='Bolivia'"; 
												if($matrix['pais']=='Bolivia'){echo "selected='selected'";}
												echo ">Bolivia</option>
												
												<option value='Brasil'"; 
												if($matrix['pais']=='Brasil'){echo "selected='selected'";}
												echo ">Brasil</option>
												
												<option value='Estados_Unidos'"; 
												if($matrix['pais']=='Estados_Unidos'){echo "selected='selected'";}
												echo ">Estados Unidos</option>
												
												<option value='Japao'"; 
												if($matrix['pais']=='Japao'){echo "selected='selected'";}
												echo ">Japão</option>
												
												<option value='Paraguai'"; 
												if($matrix['pais']=='Paraguai'){echo "selected='selected'";}
												echo ">Paraguai</option>
												
												<option value='Portugal'"; 
												if($matrix['pais']=='Portugal'){echo "selected='selected'";}
												echo ">Portugal</option>
												
												<option value='Uruguai'"; 
												if($matrix['pais']=='Uruguai'){echo "selected='selected'";}
												echo ">Uruguai</option>
											</select>
											&nbsp;
											UF:
											<select name='uf'>
												<option value=''"; 
												if($matrix['uf']==''){echo "selected='selected'";}
												echo ">selecione..</option>
												
												<option value='df'"; 
												if($matrix['uf']=='df'){echo "selected='selected'";}
												echo ">Distrito Federal</option>
												
												<option value='go'"; 
												if($matrix['uf']=='go'){echo "selected='selected'";}
												echo ">Goiás</option>
												
												<option value='ba'"; 
												if($matrix['uf']=='ba'){echo "selected='selected'";}
												echo ">Bahia</option>
												
												<option value='mg'"; 
												if($matrix['uf']=='mg'){echo "selected='selected'";}
												echo ">Minas Gerais</option>
											</select>
											&nbsp;
											Município:<input type='text' name='municipio' style='width:200px' value='{$matrix['municipio']}'>							
										</td>
									</tr>
								</table>
							</fieldset>
							
							<fieldset>
								<legend>Logotipo</legend>
								<table>
									<tr>
										<input type='file'>
									</tr>
								</table>
							</fieldset>
							
							<fieldset>
								<input type='hidden' name='tipo' value='juridica'>
								<input type='hidden' name='id' value='{$matrix['id']}'>
								<input type='hidden' name='situacao' value='{$matrix['situacao']}'>
								<table>
									<input type='submit' name='submit' value='Atualizar'>&nbsp;<input type='reset' name='reset' value='Limpar'>
								</table>
							</fieldset>
						
						</form>
						</div>
				
				";
				
			}
		}
	}
	
}

?>