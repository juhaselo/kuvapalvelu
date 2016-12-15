<?php
require_once('includes/iheader.php');

if(isset($_POST['savepic'])){ // Onko painettu submit nappa 
   $datat['kunimi']  = $_POST['knimi'];       //Talletetaan annetut arvot assosiitiviiseen taulukkoon
   $datat['kuteksti']  = $_POST['kuteksti']; 
   $datat['gps']  = $_POST['gps']; 
   $datat['polku']  = $_POST['polku'];
        if(filter_var($datat['sahkoposti'], FILTER_VALIDATE_EMAIL)) { 
              
        
        
        try{
        $stm = $DBH->prepare("INSERT INTO Kv_Kuvat(Nimi, Kuvateksti, Sijainti, Polku) VALUES(:kunimi,:kteksti,:gps,:polku)");
        if($stm->execute($datat)){
          
            // Rekisteröinti onnistui - voisi laittaa samalla kirjautuneeksi
            //echo("Rekisteröintyminen ok");
            // Annetut tiedot myös session taulukkoon
            //$_SESSION['name'] = $datat[name];
          //  $_SESSION['email'] = $datat[email];
        //    $_SESSION['loggedin'] ='yes';
           $_SESSION['message'] ='Kuvasi on nyt ladattu palveluun tunnuksella '.$_SESSION['email'];
            redirect('index.php');
            }else{
         $_SESSION['message'] = "Rekisteröinti ei onnistunut";
            redirect('index.php');
            
        }
    }catch(PDOException $e){
        $_SESSION['message'] = 'Tietokanta ongelma'; //.$e.getMessage()");
             redirect('index.php');
         }
         }else{
   
    // Annettu tieto hylättiin palvelimella, tieto session muuttujaan
    $_SESSION['message'] ='Kuvaa ei voitu ladata';
    redirect('index.php');
         }
}

