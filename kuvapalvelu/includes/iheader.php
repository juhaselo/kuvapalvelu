<?php
require_once("config/config.php");  //Miten hakemistopolut?
SSLon();
//echo("iheader4");
//var_dump($_SESSION);
/* Näytetään rekisteröinti, kirjaudu tai kirjauttaneen käyttäjätieto*/


// Oletukseen nyt rekisteröintiin(sivulle) 
?>
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
        <?php if($_SESSION['loggedIn'] =='Yes'){ ?>
        <div class="menu">

            <?php 
  
        echo("Olet kirjautunut : ". $_SESSION['name']. " " .$_SESSION['email']."");
       unset ($_SESSION['message']);
            ?>
            <!--On kirjautunut -->

              

              <!-- Otsikko -->
                <header>
                    <section>
                        <div class="drop_nav">
                            <h1 class="heading_nav">Kuvapalvelu</h1>
                        </div>
                    </section>
                     </header>
                       <nav> <!-- Navigaatio -->
                         <section>
                        <div class="drop_nav">
                            <button class="button_nav">Valikko</button>
                            <div class="drop_content">
                                <a href="Profile.php">Oma profiili</a>
                                <a href="#">Asetukset</a>
                            </div>
                        </div>

                        <div class="drop_nav">
                            <button class="button_nav">Syöte</button>
                            <div class="drop_content">
                                <a href="syote.php">Viimeaikaiset syötteet</a>
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
                         </div>
                            
                              <div class="drop_nav">
                            <a href="logout.php"><button class="button_nav"> Kirjaudu ulos</button></a>
                                            </div>                
                             <div class="haku">
<div class="drop_nav">
<?php
    include("haku.php");
?>
    </div>
    </div>
                             
                           </section>                        
                           
                       </nav> 
                      </div>

        <?php
        
    }else{
    ?>
            <!--Ei ole kirjautunut -->
            <div class="menu">
               <?php
 //include("includes/ihaku.php");
      //echo($_SESSION['message']."rererere");
                ?>
                    <header>
                        <section>
                            <h1 class="heading_nav">Kuvapalvelu</h1>
                        </section>
                    </header>
                    <nav>
                <section>
                                    
                    
                    <div class="drop_nav">
                            <a href="register.php"><button class="button_nav"> Rekisteröidy</button></a>
                     </div> 
                    
                                <div class="drop_nav">
                           <a href="Login.php"> <button class="button_nav">Kirjaudu</button></a>
                     </div> 
                     
<div class="haku">
        <div class="drop_nav">
        <?php
        include("haku.php");
        ?>
        </div>
 </div>
                    
                        </section>
                    </nav>
                        </div>
                   
                       
               <!-- <div>
                        <a href="register.php" class="button_nav">Rekisteröidy</a>
                        <a href="Login.php" class="button_nav">Kirjaudu</a>
                    </div>-->
                                                                          
            <?php    
    }
?>