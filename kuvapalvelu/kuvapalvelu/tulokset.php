<?php
require_once("config/config.php");  //Miten hakemistopolut?
 
//Avataan tietokantayhteys
//echo("<p>Avataan tietokantayhteys</p>");
?>



<?php

 require_once("lomake.php");


try {
 
 if(!empty($_GET["haku"])){ 
       // Onko palutettu sivulle nimiketttä NOT tyhjä ?
$haku = $_GET["haku"];
 
//$omakysely = $DBH->prepare("SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%'");
$sql="SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE " . "'".$haku."%'";
//echo($sql);
$omakysely = $DBH->prepare("SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE " . "'".$haku."%'"); 
//$omakysely->bindParam(':haluttuKuva', $haku);
$omakysely->execute();
//echo(testi);
   while ($rivi = $omakysely->fetch()) {
   //echo"<br /> " .htmlspecialchars($rivi["ID"]) . "  " .$rivi["Nimi"] . " ".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." " .$rivi["Polku"]. " ";
   echo"<br /> " .htmlspecialchars($rivi["ID"]) . "  " .$rivi["Nimi"] . " ".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." <img src='".$rivi["Polku"]."'></img>";
   
    
}
     
     

   }


} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
} 



       //SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%';
       //"SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%'"
?>

