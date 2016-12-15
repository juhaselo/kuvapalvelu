<?php
// Headeri kutsutaan config
include("includes/iheader.php");
require_once("config/config.php");
?>
    

    
 
<main class="sisalto">
    
    
<section>
<aside>
    

    
    
    <figure>
            

        <?php
$omakysely = $DBH->prepare("SELECT * FROM `Kv_Kuvat` ORDER BY `Kv_Kuvat`.`kuvaPvm` DESC"); 
$omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
 //echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 //echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"];
 //echo"<a href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\"> kommentoi</a>";
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
   
        </figure>  
    
    

    
    </aside>            

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
