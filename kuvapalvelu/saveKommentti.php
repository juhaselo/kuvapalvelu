<?php
require_once("config/config.php");
   $datat['kayttajanimi']  = $_SESSION['name'];
   $datat['kommentti']  = $_POST['kommentti'];       
      
  echo("Olet kirjautunut : ". $_SESSION['name']);
  echo( $_POST['kommentti'] );    
        $stm = $DBH->prepare("INSERT INTO Kv_Kommentit(Kayttajanimi, Kommentti) VALUES(:kayttajanimi,:kommentti)");
        $stm->execute($datat);

?>
