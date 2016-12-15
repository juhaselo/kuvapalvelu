<?php
require_once("config/config.php");  //Miten hakemistopolut?
//SSLon();
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
        <link href="css/lightbox.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="tyyli.css">
        <meta name="robots" content="none">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuvapalvelu</title>
        
    </head>

    <body>
        <?php if($_SESSION['loggedIn'] =='Yes'){ ?>
        <div class="menu">

            <?php 
  
        /*echo("Olet kirjautunut käyttäjällä: <br><strong>". $_SESSION['name']. "</strong> " .$_SESSION['email']);*/
       unset ($_SESSION['message']);
            ?>
            <!--On kirjautunut -->

              

              <!-- Otsikko -->
                <header>
                    <section>
                        <div class="drop_nav">
                            <div class="heading_nav"><a href="logged_in.php">
                               <!-- <img src="kuvat/kuvapalvelu.jpg" alt="Kuvapalvelu" class="otsikko">-->
                                <h1 class="kuvapalvelu">Kuvapalvelu</h1></a></div>
                        </div>
                    </section>
                     </header>
                       <nav> <!-- Navigaatio -->
                         <section>
                        <div class="drop_nav">
                            <a href="Profile.php"><button class="button_nav">Profiili</button></a>
                            
                        </div>

                        <div class="drop_nav">
                           <a href="syote.php"> <button class="button_nav">Syöte</button></a>
                            
                        </div>

                        <div class="drop_nav">
                            <a href="Kuvat.php"><button class="button_nav">Kuvat</button></a>
                            <!--<div class="drop_content">
                                <a href="#">Uusimmat kuvat</a>
                                Kaikki kuvat
                            </div>-->
                         </div>
                            
                              <div class="drop_nav">
                            <a href="logout.php"><button class="button_nav"> Kirjaudu ulos</button></a>
                                            </div>                
                             <div class="drop_nav">
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
      echo($_SESSION['message']);
                ?>
                    <header>
                        <section>
                            <h1 class="kuvapalvelu" class="heading_nav">Kuvapalvelu</h1>
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
                     
<div class="drop_nav">
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