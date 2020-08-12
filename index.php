<?php 
	require_once 'menu.php'; 
   Carica();
   $id_pagina = $_GET["idPagina"];
   if($id_pagina == "")
	   $id_pagina ="home";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
		<title>  </title>
		<!--<meta http-equiv="Content-type" content="text/html;charset=utf-8" /> 
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="robots" content="index, follow" />-->
		<link rel="stylesheet" type="text/css" media="all" href="css/stile.css" />
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<div id="contenitore">
		
			<div id="testata">
				<a><img src="img/testata.jpg" alt="" border="0"></a>
			</div>
			<div id="contenuto">
				<div id="menu">
					<?php
					     
						 StampaMenu();
					?>
				</div>
				<div id="bandawhite">
					&nbsp;
				</div>
				<div id="corpo">
					<div id="immagine">
					<?php
					StampaImmagine($id_pagina);
					?>
					</div>
					<div id="testo">
						<h1>
						<?php
						 StampaTitoloh1($id_pagina);
						?>
						</h1>
						<p>
						<?php
						StampaContenuto($id_pagina);
						?>
						</p>
					</div>
				</div>
				<div id="bandawhite">
					&nbsp;
				</div>
				<div id="footer2">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Istituto produzione puzzle | Via dell'incastro 23 50100 Firenze  P.I. 1234567890
				</div>
			</div>
		</div>	
	</body>
</html>