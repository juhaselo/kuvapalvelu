<?php

require_once ("config/config.php");

$kuvat = getNewestMedia($DBH,9);
$jsonString = json_encode($kuvat);
echo($jsonString);

/*foreach($kuvat as $media){
//HUOM -> notaatio, koska $media on OLIO sisältäen kuvan tiedot!!
//mediat on puolestaan taulukko näistä olioista
                        ?>
                        <li>
                          <figure>
                           <a href="<?php echo("$media->Polku");?>">
                          <img src="<?php echo("$media->Polku");?>"></a>
                            <figcaption>
                                <h3><?php echo($media->Nimi); ?></h3>
                            </figcaption>
                          </figure>
                     </li>  
                    <?php
                     }*/



?>

       