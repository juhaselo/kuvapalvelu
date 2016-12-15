<?php
// Headeri kutsutaan config
include("includes/iheader.php");
require_once("config/config.php");
?>
    

    
 

  <main class="sisalto">
      <section class="reki">  
  
   <aside> 
  
  </aside> 
  <aside> 
      <h1>Kuvan
 <?php  
    $omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku, kaytID FROM `Kv_Kuvat` WHERE KuvatID=".$_GET['kuvaID']); 
   $omakysely->execute();
   $rivi = $omakysely->fetch();
  echo($rivi["Nimi"]); 
    ?>      
    kommentit</h1>
    <figure>
                      
        <?php  
    $omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku, kaytID FROM `Kv_Kuvat` WHERE KuvatID=".$_GET['kuvaID']); 
   // $omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku, kaytID FROM `Kv_Kuvat` WHERE KuvatID= 6"); 
       $omakysely->execute();
   $rivi = $omakysely->fetch();
 //echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
        
//echo"<br/> <a href='".$rivi["Polku"]."' data-lightbox='galleriaetusivu'><img src='".$rivi["Polku"]."' class='kuva'></img></a>";
//echo"<figcaption><h3>" . ($rivi["Nimi"]) . "</h3></figcaption>"; 
// echo"<br/>" . ($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]; 
      echo"<br/> <a href='".$rivi["Polku"]."' data-lightbox='galleriaetusivu'><img src='".$rivi["Polku"]."' class='kuva'></img></a>";
      echo"<figcaption><h3>" . ($rivi["Nimi"]) . "</h3></figcaption>";
         echo"<br/> <b>Kuvan nimi: </b>" . ($rivi["Nimi"]) . " <br><b>Kuvateksti: </b> " .$rivi["Kuvateksti"]."<br><br>"; 
     $kuvaid = $rivi["kuvatID"];
      include("rating.php"); 
      echo("</figure>");
        
    
?>

    <br>
    
    </figure>
</aside> 
      <aside>    
     <section> 
    <form action="saveKommentti.php" method="post" id="txtarea">
    <textarea rows="4" cols="50" id="comment" name="kommentti" placeholder="Kommenttisi tähän." required></textarea>
        <br><input type="submit" value="Kommentoi" name="lahkommentti">
        <br><input type="hidden" value="<?php echo $_GET['kuvaID']; ?>" name="kuvaID">
        <br><input type="hidden" value="<?php echo $_SESSION['uID']; ?>" name="kayttajaID">

    </form>    
     </section> 
  <br>
     </aside>      
    <section>
  <aside>       
<h1>Aiemmat kommentit</h1>
    <!--<textarea rows="4" cols="50" disabled>
         </textarea>-->
    
                    <?php  
    
      
    $omakysely = $DBH->prepare("SELECT * FROM Kv_Kommentit JOIN Kv_Profiilit ON Kv_Profiilit.proID = Kv_Kommentit.KayttajaID WHERE Kv_Kommentit.kuva_id =".$_GET['kuvaID']);
       $omakysely->execute();
  while ($rivi = $omakysely->fetch()) {
 //echo ($rivi["Kommentti"]."<br>");
 echo ("<strong>".$rivi["Etunimi"].": <br></strong><div class='wrap'>".$rivi["Kommentti"]."<br><hr class='hr_comment'></div>");   
            
}
   ?> 
        
   </aside> 
   </section>
   <br> 
    
    
    

    
    
    
    <figure>
            

        <?php
//$omakysely = $DBH->prepare("SELECT kuvatID, Nimi, Kuvateksti, Polku FROM `Kv_Kuvat`"); 
//$omakysely->execute();
  //while ($rivi = $omakysely->fetch()) {
// echo"<br /> " .htmlspecialchars($rivi["Nimi"]) . " " .$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]."<img src='".$rivi["Polku"]."' class='kuva'></img>";
 //echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
 //echo"<br/> Kuvan nimi " . ($rivi["Nimi"]) . " Kuvateksti " .$rivi["Kuvateksti"];
 //echo"<a href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">kommentoi</a>";

//}
?>  
   
        </figure>  
    
    

    
               

</section>
</main>
  <?php  
include("includes/ifooter.php");
?>
