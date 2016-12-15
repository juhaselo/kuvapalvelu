<head>
    <link href="css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="tyyli.css">
</head>

<aside>
<a class='link_box' href="/kuvapalvelu/logged_in.php">Takaisin etusivulle</a>
<br>

<?php
require_once("haku.php");
       $button = $_GET [ 'hae' ];
       $search = $_GET [ 'haku' ]; 
 
        if( strlen( $search ) <= 1 ){
            echo "Et syöttänyt hakusanaa tai hakusanasi on liian lyhyt";
        }else{ 
            echo "Hait hakusanalla <b> $search </b> <hr size='1' > </ br > ";
        
                    include("config/config.php");
                    $kysely = $DBH->prepare("SELECT * FROM Kv_Kuvat WHERE Kv_Kuvat.Nimi LIKE '%$search%';");
                    $kysely->execute();
                   
           
                echo "Haun tulokset:<br>";
                    while ($rivi = $kysely->fetch()) {
                       echo("<figure>");
                           // echo"<br/> <img src='".$rivi["Polku"]."' class='kuva'></img>";
                        echo"<br/> <a href='".$rivi["Polku"]."' data-lightbox='galleriaetusivu'><img src='".$rivi["Polku"]."' class='kuva'></img></a><br>";
                            echo"<figcaption><h3>" . ($rivi["Nimi"]) . "</h3></figcaption>";
							echo"<br><a class='link_box' href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">Kommentoi</a>";							
                            //echo"<br><a href=\"Kommentoi.php?kuvaID=" . $rivi["kuvatID"] . "\">Kommentoi</a>";
                             echo("</figure>"); 
                        
                         //echo"<br /> " .htmlspecialchars($rivi["kuvatID"]) . "  " .$rivi["Nimi"] . " //".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." <img class='kuva' src='".$rivi["Polku"]."'></img>";
                        
}
        }
?>
</aside>
<script src="js/main.js"></script>
<script src="js/jquerymin.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/arvostelu.js"></script>