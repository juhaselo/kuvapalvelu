<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="kuvat/favicon.ico">
    <link rel="stylesheet" type="text/css" href="tyyli.css">
    <meta name="robots" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuva sovellus</title>
</head>

<body>

    <!-- Otsikko -->

    <header>
        <h1>Kuvapalvelu</h1>
    </header>


    <!-- Navigaatio -->

    <nav class="navikaatio">
          <section>
        <h2> </h2>
       
               
    <a href="#" class="button">Kirjaudu</a>
    <a href="#" class="button">Kuvat</a>
    <a href="http://users.metropolia.fi/~juhataps/test/rss.rss" class="button">RSS feedi</a>


        <!-- Kun ei kirjautuneena : -->

        <br>
        <!-- <h2>  Kirjautuneena : <a href="#">Valikko</a> <a href="#">Syöte</a> <a href="#">Kuvat</a></h2> -->
        </section>

    </nav>


    <!-- Sisältö -->
    <main>
      <section class="reki">
        <h1>Rekisteröidy</h1>
<!-- Rekisteröidy lomake -->

        <form action="" method="post">

            <div class="formimuotoilu">Etunimi:</div><input type="text" name="etunimi" required><br>
            <div class="formimuotoilu">Sukunimi: </div><input type="text" name="sukunimi" required><br>
            <div class="formimuotoilu">Sähköposti : </div><input type="email" name="sahkoposti" required><br>
            <div class="formimuotoilu">Käyttäjänimi: </div><input type="text" name="ktunnus" required><br>
            <div class="formimuotoilu">Salasana : </div><input type="password" name="salasana" required><br>
            <div class="formimuotoilu">Syntymäaika : </div><input type="date" name="syntaika" required><br>


            <input type="submit" value="Rekisteröidy">
        </form>
          
         <!-- Kirjaudu lomake--> 
          
          <h1>Kirjaudu sisään</h1>
        <form action="" method="post">
            <div class="formimuotoilu">Käyttäjätunnus:</div> <input type="text" name="ktunnus" required><br>
            <div class="formimuotoilu">Salasana:</div><input type="password" name="salasana" required><br>
            <input type="submit" value="Kirjaudu">
        </form>
          
          
       <!-- Lisää kuva-->
          
          <h1>Lataa kuva palveluun</h1>
          <form action="" method="post">

            <div class="formimuotoilu">Kuvan nimi:</div><input type="text" name="kuvanimi" required><br>
            <div class="formimuotoilu">Kuvateksti: </div><input type="text" name="kuvateksti" required><br>
            <div class="formimuotoilu">GPS koordinaatit </div><input type="email" name="kuvagps" required><br>
            <div class="formimuotoilu">Kuvan sijainti</div><input type="text" name="polku" required><br>
            
            <input type="submit" value="Lataa kuva">
        </form>
          
          
          
          
          
          
    <!-- Hae kuvia lomake-->       
          <?php
require_once("config/config.php");  //Miten hakemistopolut?
 
//Avataan tietokantayhteys
//echo("<p>Avataan tietokantayhteys</p>");
?>



<?php

 require_once("lomake.php");


try {
 
 if(!empty($_GET["haku"])){ 
       // Onko palutettu sivulle nimiketttä NOT tyhjä ?
$haku = $_GET["haku"];
 
//$omakysely = $DBH->prepare("SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%'");
$sql="SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE " . "'".$haku."%'";
//echo($sql);
$omakysely = $DBH->prepare("SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE " . "'".$haku."%'"); 
//$omakysely->bindParam(':haluttuKuva', $haku);
$omakysely->execute();
//echo(testi);
   while ($rivi = $omakysely->fetch()) {
   //echo"<br /> " .htmlspecialchars($rivi["ID"]) . "  " .$rivi["Nimi"] . " ".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." " .$rivi["Polku"]. " ";
   echo"<br /> " .htmlspecialchars($rivi["ID"]) . "  " .$rivi["Nimi"] . " ".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." <img src='".$rivi["Polku"]."'></img>";
   
    
}
     
     

   }


} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
} 



       //SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%';
       //"SELECT * FROM Kuvat WHERE Kuvat.Nimi LIKE 'Testi%'"
?>
          
          
          
          
          
          
          
        </section>

        <p><br></p>

        <!--<section class="reki">
        
        </section> -->

        <p></p>
        <ul>
        <!-- Kuvarivi 1-->
        <li>
		<figure>
            <a href="kuvat/laaja2.jpg"><img src="kuvat/laaja2.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 1</h3></figcaption>
        </figure>
<li>
        <figure>
            <a href="kuvat/normi.jpg"><img src="kuvat/normi.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 2</h3></figcaption>
        </figure>
        <li>
        <figure>
            <a href="kuvat/valmis5.jpg"><img src="kuvat/valmis5.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 3</h3></figcaption>
        </figure>
        
         <!-- Kuvarivi 2-->
        <li>
        <figure class="clear">
            <a href="kuvat/valmis1.jpg"><img src="kuvat/valmis1.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 4</h3></figcaption>
        </figure>
        <li>
        <figure>
           <a href="kuvat/valmis4.jpg"> <img src="kuvat/valmis4.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 5</h3></figcaption>
        </figure>
		</li>
        <li>
        <figure>
           <a href="kuvat/zoomi.jpg"> <img src="kuvat/zoomi.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 6</h3></figcaption>
        </figure>
        </li>
        
        <!-- Kuvarivi 3-->
        
        <li>
        <figure class="clear">
           <a href="kuvat/harjoitus6.jpg"><img src="kuvat/harjoitus6.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 7</h3></figcaption>
        </figure>
		</li>
        <li>
        <figure>
            <a href="kuvat/valmis7.jpg"><img src="kuvat/valmis7.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 8</h3></figcaption>
        </figure>
        </li>
        <li>
        <figure>
            <a href="kuvat/tulostuskuva.jpg"><img src="kuvat/tulostuskuva.jpg" alt="Testikuva" width="400" height="400"></a>
            <figcaption><h3>Kuva 9</h3></figcaption>
        </figure>
		</li>
        </ul>
            </main>

    <!-- Footer -->

    <footer class="clear">
        <section>
        2016 © Team Ahma Juha Selonen, Henriikka Mäkelä, Miikka Lehto
        </section>
    </footer>

</body>

</html>
