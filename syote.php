<?php
// Headeri kutsutaan config
include("includes/iheader.php");
?>

 
<main class="sisalto">
    
    
    
<section>
<aside>
   
<h1>
<?php
$omakysely = $DBH->prepare("SELECT Etunimi FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Etunimi"]);
}
?>
    <?php
$omakysely = $DBH->prepare("SELECT Sukunimi FROM Kv_Profiilit WHERE '".$_SESSION['email']."' = Kv_Profiilit.Email"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo"" .htmlspecialchars($rivi["Sukunimi"]);
}
?>n syöte</h1>


<?php
$omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku FROM `Kv_Kuvat` WHERE KaytID = ".$_SESSION['uID']." ORDER BY kuvaPvm DESC LIMIT 15;"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br> <img src='".$rivi["Polku"]."' class='kuva'></img>";    
 echo"<br><b>Nimi:</b> " . ($rivi["Nimi"]) . "<br><b>Kuvateksti:</b> " .$rivi["Kuvateksti"]."<br><br>"; 

}
?>
  
    </aside>            

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
