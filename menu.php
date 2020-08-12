<?php
     session_start();    
	require_once 'config.php'; 
      require_once 'lib/DbManager.php';
     require_once 'lib/funzioni.php';
	
		function Carica()
		{
			$dbMan = new DbManager(DB_HOST, DB_NAME,DB_USER, DB_PASS);
			
              $sSQL= "SELECT * FROM `pagine`"; 	
            		  
		      $dbMan->Esegui($sSQL);
			  while($risultato = $dbMan->Recupera())
			  {
				  //in array di $risultato 0 ci sarà chi siamo ecc
				$array[$risultato['idpagina']]= $risultato;
			  }
			  $_SESSION['array'] = $array;
		}
 function StampaMenu()
 {   
	foreach($_SESSION['array'] as $side=>$direc) { 
		
		  echo "<div class=\"sep button\">
			<a href=\"index.php?idPagina=$side\" class=\"attivo\">".
			$side
			."</a>
			</div>";

		
	} 

 } 
 
   function StampaImmagine($idpagina)
   {
	echo "<img src=\"img/".$_SESSION['array'][$idpagina]["imgsfondo"]."\" />";    
   }
    
	function StampaContenuto($idpagina){
          echo $_SESSION['array'][$idpagina]["contenuto"]; 	
	
    }
	
    function StampaTitoloh1($idpagina){
         echo $_SESSION['array'][$idpagina]["titoloh1"]; 	
	
    }
    
	function Stampapeso($idpagina){
          echo $_SESSION['array'][$idpagina]["peso"]; 	
    }

?>