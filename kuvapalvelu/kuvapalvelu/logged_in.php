<?php
// Headeri kutsutaan config
include("includes/iheader.php");
require_once("config/config.php");
?>
    
<!--
<div class="drop_nav">
    <h1 class="heading_nav"><a href="http://users.metropolia.fi/~juhataps/kuvapalvelu/logged_in.php">Kuvapalvelu</a></h1>
</div> -->
    

    
  <!--  
<div class="drop_nav">
  <button class="button_nav">Valikko</button>
  <div class="drop_content">
    <a href="#">Oma profiili</a>
    <a href="#">Asetukset</a>
  </div>
</div>
    
<div class="drop_nav">
  <button class="button_nav">Syöte</button>
    <div class="drop_content">
        <a href="#">Viimeaikaiset syötteet</a>
        <a href="#">Suosituimmat syötteet</a>
        <a href="#">Seurattavien syötteet</a>
    </div>
</div>
    
<div class="drop_nav">
  <button class="button_nav">Kuvat</button>
    <div class="drop_content">
        <a href="#">Uusimmat kuvat</a>
        <a href="#">Kaikki kuvat</a>
    </div>
</div>-->
    
 
<main class="sisalto">
    
    
<section>
<aside>
<h1>Hae kuvia</h1>
    <?php
 include("includes/ihaku.php");

?>
    
    <h1>Lisää kuvia</h1>
    <?php

 include("addpicform.php");
?>
          
    
    <h1>Käyttäjän syöte hahmotelma :</h1>
    <br>Etunimi Sukunimi<br>
    <figure>
            <a href="kettu.jpeg"><img src="kettu.jpeg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 1</h3></figcaption>
        </figure>
    
    ARVOSTELU : <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <img src="star.jpg" alt="star" width="16" height="16">
    <br><h1>Kommentit</h1>

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
