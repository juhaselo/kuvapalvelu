<?php
require_once("config/config.php");
   $datat['kayttajaid']  = $_SESSION['uID'];
   $datat['kommentti']  = $_POST['kommentti'];  
$datat['kuvaid'] = $_POST['kuvaID'];
$url = "Kommentoi.php?kuvaID=" . $_POST['kuvaID'];
      
  echo("Olet kirjautunut : ". $_SESSION['name']);
print_r($datat);   
        $stm = $DBH->prepare("INSERT INTO Kv_Kommentit(KayttajaID, Kommentti, kuva_id) VALUES(:kayttajaid, :kommentti, :kuvaid)");
        $stm->execute($datat);
        //redirect('Kommentoi.php?kuvaID=8')
        redirect($url);
            
//INSERT INTO `Juha`.`Kv_Kommentit` (`komID`, `Kayttajanimi`, `Kommentti`, `kuva_id`) VALUES (NULL, //'Juha', 'Kuvassa on koiranpentu 2', '6');

?>

