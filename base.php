<?php
      require_once 'config.php'; 
      require_once 'lib/DbManager.php';
     require_once 'lib/funzioni.php';
	 
			$idPagina = GetVal["idPagina"];
			
             
			$dbMan = new DbManager(DB_HOST, DB_NAME,DB_USER, DB_PASS);
			
              $sSQL= "SELECT * FROM `pagine` ";//WHERE idpagina='".$idPagina."'"; 	 
		      $dbMan->Esegui($sSQL);
			  echo "<div id=\"menu\">"
			  while($risultato = $dbMan->Recupera())
			  {
				echo "<div class="sep button">";
				echo "<a href='index.php?idPagina="
								  .$risultato['idpagina']
								  ."'>"
								  .$risultato['titolopag']
								  ."</a>";
			
				
				echo "</div>";	
			  }
              
			   echo "</div>";			
?>