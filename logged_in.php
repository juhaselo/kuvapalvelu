<?php
// Headeri kutsutaan config
include("includes/iheader.php");
require_once("config/config.php");
?>
    

 
<main class="sisalto">
    
    
<section>
<aside>
   <h1>Tervetuloa kuvapalveluun</h1> 
  <p>Palvelussamme on tällä hetkellä<b>
       <?php
$omakysely = $DBH->prepare("SELECT COUNT(Nimi) AS maara FROM Kv_Kuvat"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo($rivi["maara"]);
}
?> 
</b>kuvaa. Olet kirjautuneena käyttäjällä:<b>
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
?></b>
    </p>
    <h1>Lisää kuvia palveluun</h1>
          
    <div class="haku">
<div class="drop_nav">

    </div>
    </div>
    
    <?php
    include("upload2.php");
?>
<br>
 <!--<hr>
    <a class="link_box" href="/kuvapalvelu/upload2.php" target="_blank">Lataa kuva</a>-->
    <br>
    
    <h1>Olet ladannut nämä 
    <?php
$omakysely = $DBH->prepare("SELECT COUNT(Nimi) AS Yhteensakuvia FROM Kv_Kuvat WHERE KaytID = ".$_SESSION['uID']); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo($rivi["Yhteensakuvia"]);
}
?>    
        
        
        kuvaa palveluun:</h1>
    
    <?php
$omakysely = $DBH->prepare("SELECT * FROM `Kv_Kuvat` WHERE KaytID = ".$_SESSION['uID']);
   
  
      
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 echo("<figure>");
//echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
  echo"<br/> <a href='".$rivi["Polku"]."' data-lightbox='galleriaetusivu'><img src='".$rivi["Polku"]."' class='kuva'></img></a>";  
 echo"<figcaption><h3>" . ($rivi["Nimi"]) . "</h3></figcaption>";
echo"<br><a class='link_box' href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">Kommentoi</a>";
    $kuvaid = $rivi["kuvatID"];
      include("rating.php"); 
   echo("</figure>");    
}
?>


<figure>
<figcaption><h3>Kuva 1</h3></figcaption>
        </figure>
<?php    
//include("rating.php");
?>

<!--<br>
    <br><h1>Kommentit</h1>

    <form action="saveKommentti.php" method="post">
    <textarea rows="4" cols="50" name="kommentti">Kommenttisi tähän.</textarea>
        <br><input type="submit" value="Lähetä kommentti" name="lahkommentti">

    </form>    
      
<br>Aijemmat kommentit:
     <br>     <textarea rows="4" cols="50" disabled>Hieno kuva !</textarea>-->
   
    
    
    

    
    </aside>            

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
