<?php
// Headeri kutsutaan config
include("includes/iheader.php");
?>

 
<main class="sisalto">
    
    
    
<section>
<aside>
    
<?php
 include("includes/ihaku.php");

?>
<h1>Profiili</h1>
<h1><?php
$omakysely = $DBH->prepare("SELECT Kayttaja FROM `Kv_Profiilit` WHERE ProID=18"); 
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
Käyttäjätunnus : <?php
$omakysely = $DBH->prepare("SELECT Kayttaja FROM `Kv_Profiilit` WHERE ProID=18"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Kayttaja"]);
}
?>

<br>
Sähköposti : <?php
$omakysely = $DBH->prepare("SELECT Email FROM `Kv_Profiilit` WHERE ProID=18"); 
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
<h1>Arvostelut</h1>
ARVOSTELU : <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
<h1>Kommentit</h1>
      

    <form action="saveKommentti.php" method="post">
    <textarea rows="4" cols="50" name="kommentti">Kommenttisi tähän.</textarea>
        <br><input type="submit" value="Lähetä kommentti" name="lahkommentti">

    </form>    
      
<br>Aijemmat kommentit:
     <br>     <textarea rows="4" cols="50" disabled>Hieno kuva !</textarea>
   
    

    
    </aside>            

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
