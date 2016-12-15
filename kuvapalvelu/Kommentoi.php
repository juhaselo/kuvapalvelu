<?php
// Headeri kutsutaan config
include("includes/iheader.php");
require_once("config/config.php");
?>
    

    
 
<main class="sisalto">
    
    
<section>
<aside>
    
    <h1>Lisää kuvia palveluun</h1>
          
    <div class="haku">
<div class="drop_nav">
<?php
    include("haku.php");
?>
    </div>
    </div>
<hr>

    <br>
    <a class="link_box" href="/kuvapalvelu/addpicform.php" target="_blank">Lataa kuva</a>
    <br>
    
    
      
    
<h1>Käyttäjän syöte:</h1>
   
    

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
?>  
    
        <br><h1>Kommentit</h1>
    <figure>
        <h1>Kuva jota kommentoidaan</h1>
              <?php  
    $omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku FROM `Kv_Kuvat` WHERE KuvatID=".$_GET['kuvaID']); 
        $omakysely->execute();
    $rivi = $omakysely->fetch();
        // print_r($rivi);
        //echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
        //echo" <figcaption><h3>".$rivi["Nimi"]."</h3></figcaption>";
         echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"]; 
    
?>
<br>
    </figure>

    <form action="saveKommentti.php" method="post">
    <textarea rows="4" cols="50" name="kommentti">Kommenttisi tähän.</textarea>
        <br><input type="submit" value="Lähetä kommentti" name="lahkommentti">
        <br><input type="hidden" value="<?php echo $_GET['kuvaID']; ?>" name="kuvaID">
        <br><input type="hidden" value="<?php echo $_SESSION['uID']; ?>" name="kayttajaID">

    </form>    
      
<br>Aijemmat kommentit:
     <br>     <textarea rows="4" cols="50" disabled>Hieno kuva !</textarea>
   
   <br> 
    
    
    <figure>
            

        <?php
$omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku FROM `Kv_Kuvat`"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"];
 echo"<a href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">kommentoi</a>";

}
?>  
   
        </figure>  
    
    

    
    </aside>            

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
