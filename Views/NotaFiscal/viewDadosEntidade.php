<?php

	include("Utils/LayoutUtils.php");

	$layout = new LayoutUtils("nf");

	$layout->imprimeCabecalho();

			
	echo "
	
		<div id='conteudo'>
			<br /><br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br /><br /><br />
		</div>	
	
	";		

	$layout->imprimeRodape();
	
	$layout->__destruct();
				
?>