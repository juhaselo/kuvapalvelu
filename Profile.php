<?php
// Headeri kutsutaan config
require_once("config/config.php");
?>

     <?php
    include_once('includes/iheader.php');
    ?>
    
    
<main class="sisalto">

   
<h1><?php
/*$omakysely = $DBH->prepare("SELECT Kayttaja FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Kayttaja"]);
}*/
?>Profiili</h1>
	
Yksilöllinen tunniste: 
<?php
$omakysely = $DBH->prepare("SELECT proID FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["proID"]);
}
?>


<br>
Käyttäjätunnus:
    
    
    <?php
    $omakysely = $DBH->prepare("SELECT * FROM Kv_Profiilit WHERE "."'".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Kayttaja"]);
}
    
    
//$omakysely = $DBH->prepare("SELECT Kayttaja FROM `Kv_Profiilit` WHERE ProID=18"); 
//$omakysely->execute();
  //while ($rivi = $omakysely->fetch()) {
 //echo"" .htmlspecialchars($rivi["Kayttaja"]);
//}
?>

<br>
Sähköposti: <?php
$omakysely = $DBH->prepare("SELECT Email FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
echo"" .htmlspecialchars($rivi["Email"]);
}
    
    
    
?>
<br>
Etunimi: 
<?php
$omakysely = $DBH->prepare("SELECT Etunimi FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Etunimi"]);
}
?>
    
<br>
Sukunimi: 
<?php
$omakysely = $DBH->prepare("SELECT Sukunimi FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Sukunimi"]);
}
?>
<br>
Syntymäaika: 
<?php
$omakysely = $DBH->prepare("SELECT Syaika FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Syaika"]);
}
?>
<br>   
Kuvia ladattu yhteensä:
<?php
$omakysely = $DBH->prepare("SELECT COUNT(Nimi) AS Yhteensakuvia FROM Kv_Kuvat WHERE KaytID = ".$_SESSION['uID']); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo($rivi["Yhteensakuvia"]);
}
?> kpl
     
    
    
    
<br>
<h1>Käyttäjän kuvat</h1>


<?php
$omakysely = $DBH->prepare("SELECT * FROM `Kv_Kuvat` WHERE KaytID = ".$_SESSION['uID']);
    //$omakysely = $DBH->prepare("SELECT * FROM `Kv_Kuvat` WHERE kaytID = 18"); 
     
      
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
   // print_r($rivi);
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
// echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 //echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"];   
   echo("<figure>");
//echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
   echo"<br/> <a href='".$rivi["Polku"]."' data-lightbox='galleriaetusivu'><img src='".$rivi["Polku"]."' class='kuva'></a>";   
 echo"<figcaption><h3>" . ($rivi["Nimi"]) . "</h3></figcaption>";
echo"<br><a class='link_box' href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">Kommentoi</a>";
    $kuvaid = $rivi["kuvatID"];
      include("rating.php"); 
   echo("</figure>");    
      
}
?>
</main>

  <?php  
include("includes/ifooter.php");
?>