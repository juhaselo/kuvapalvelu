<?php
// Headeri kutsutaan config
include("includes/iheader.php");

?>


<?php
 //include("includes/inotlogged.php");

?>

<!-- Sisältö -->
    <main class="sisalto">
      <section class="reki">
          
          
                      <?php
 include("includes/ihaku2.php");

?>
         
   <!--      <h1>Rekisteröidy</h1>-->
          
<!-- Rekisteröidy lomake -->
<!-- 
        <form action="" method="post">

            <div class="formimuotoilu">Etunimi:</div><input type="text" name="etunimi" required><br>
            <div class="formimuotoilu">Sukunimi: </div><input type="text" name="sukunimi" required><br>
            <div class="formimuotoilu">Sähköposti : </div><input type="email" name="sahkoposti" required><br>
            <div class="formimuotoilu">Käyttäjänimi: </div><input type="text" name="ktunnus" required><br>
            <div class="formimuotoilu">Salasana : </div><input type="password" name="salasana" required><br>
            <div class="formimuotoilu">Syntymäaika : </div><input type="date" name="syntaika" required><br>


            <input type="submit" value="Rekisteröidy">
        </form>
   -->       
         <!-- Kirjaudu lomake--> 
          
      <!--     <h1>Kirjaudu sisään</h1>
        <form action="" method="post">
            <div class="formimuotoilu">Käyttäjätunnus:</div> <input type="text" name="ktunnus" required><br>
            <div class="formimuotoilu">Salasana:</div><input type="password" name="salasana" required><br>
            <input type="submit" value="Kirjaudu">
        </form>
     -->     
          
       <!-- Lisää kuva-->
      <!--     
          <h1>Lataa kuva palveluun</h1>
          <form action="" method="post">

            <div class="formimuotoilu">Kuvan nimi:</div><input type="text" name="kuvanimi" required><br>
            <div class="formimuotoilu">Kuvateksti: </div><input type="text" name="kuvateksti" required><br>
            <div class="formimuotoilu">GPS koordinaatit </div><input type="email" name="kuvagps" required><br>
            <div class="formimuotoilu">Kuvan sijainti</div><input type="text" name="polku" required><br>
            
            <input type="submit" value="Lataa kuva">
        </form>
       -->    
          
          
          
          
          
    <!-- Hae kuvia lomake-->       





          
                  
        </section>

        <p><br></p>

        <!--<section class="reki">
        
        </section> -->

        <p></p>
        <ul>
   
        </ul>
 <!--       
        
<aside>
    <h1>Käyttäjän syöte hahmotelma :</h1>
    <br>Etunimi Sukunimi<br>
    <figure>
            <a href="kuvat/laaja2.jpg"><img src="kuvat/laaja2.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 1</h3></figcaption>
        </figure>
    
    ARVOSTELU : <img src="kuvat/tahti.png" alt="tahti" width="16" height="16">
    <img src="kuvat/tahti.png" alt="tahti" width="16" height="16">
    <img src="kuvat/tahti.png" alt="tahti" width="16" height="16">
    <img src="kuvat/tahti.png" alt="tahti" width="16" height="16">
    <img src="kuvat/tahti.png" alt="tahti" width="16" height="16">
    <br><h1>Kommentit</h1>
<br>Hieno kuva !<br>
</aside>   -->     

</main>



    
  <?php  
include("includes/ifooter.php");
?>

