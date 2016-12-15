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
                    
                        //echo"<br /> " .htmlspecialchars($rivi["kuvatID"]) . "  " .$rivi["Nimi"] . " //".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." <img src='".$rivi["Polku"]."'></img>";
                         echo"<br /> " .htmlspecialchars($rivi["kuvatID"]) . "  " .$rivi["Nimi"] . " ".$rivi["Kuvateksti"]. " ".$rivi["Sijainti"]." <img src='".$rivi["Polku"]."'></img>";
                        
}
        }
?>

<html>
<br>
<a href="http://users.metropolia.fi/~juhataps/kuvapalvelu/logged_in.php">Takaisin sivulle</a>
</html>