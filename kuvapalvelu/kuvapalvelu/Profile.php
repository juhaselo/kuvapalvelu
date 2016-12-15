<?php
// Headeri kutsutaan config
require_once("config/config.php");
?>

     <?php
    include_once('includes/iheader.php');
    ?>
    
    
<main class="sisalto">

   
<h1><?php
$omakysely = $DBH->prepare("SELECT Kayttaja FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Kayttaja"]);
}
?> Profiili</h1>
	
Yksilöllinen tunniste : 
<?php
$omakysely = $DBH->prepare("SELECT proID FROM `Kv_Profiilit` WHERE ProID=18"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["proID"]);
}
?>


<br>
Käyttäjätunnus :
    
    
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
Sähköposti : <?php
$omakysely = $DBH->prepare("SELECT Kayttaja FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
echo"" .htmlspecialchars($rivi["Email"]);
}
    
    
    
?>
<br>
Etunimi : <?php
$omakysely = $DBH->prepare("SELECT Etunimi FROM `Kv_Profiilit` WHERE ProID=18"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Etunimi"]);
}
?>
<br>
Sukunimi : 
<?php
$omakysely = $DBH->prepare("SELECT Sukunimi FROM `Kv_Profiilit` WHERE ProID=18"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Sukunimi"]);
}
?>
<br>
Syntymä aika: 
<?php
$omakysely = $DBH->prepare("SELECT Syaika FROM `Kv_Profiilit` WHERE ProID=18"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Syaika"]);
}
?>
<br>
<h1>Käyttäjän kuvat</h1>


<?php
$omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku FROM `Kv_Kuvat`"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"];                 
}
?>
</main>

  <?php  
include("includes/ifooter.php");
?>

<!--
SELECT proID FROM `Kv_Profiilit` WHERE ProID=18
SELECT Email FROM `Kv_Profiilit` WHERE ProID=18
SELECT Etunimi FROM `Kv_Profiilit` WHERE ProID=18
SELECT Sukunimi FROM `Kv_Profiilit` WHERE ProID=18
SELECT Syaika FROM `Kv_Profiilit` WHERE ProID=18
SELECT Kayttaja FROM `Kv_Profiilit` WHERE ProID=18
-->