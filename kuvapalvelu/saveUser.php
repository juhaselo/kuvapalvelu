<?php
require_once("config/config.php");
//require_once('includes/iheader.php');
//$_SESSION['message'] ='testii';
if(isset($_POST['save'])){ // Onko painettu submit nappa 
   //$_SESSION['message'] ='testii2';
    //echo("ffffff");
$datat['sahkoposti']  = $_POST['sahkoposti'];       //Talletetaan annetut arvot assosiitiviiseen taulukkoon
   $datat['etunimi']  = $_POST['etunimi']; 
   $datat['sukunimi']  = $_POST['sukunimi']; 
   $datat['syntaika']  = $_POST['syntaika'];
   //$phpdate = strtotime( $_POST['syntaika'] );
   //$datat['syntaika'] = date( 'Y-m-d H:i:s', $phpdate ); 
    
   $datat['ktunnus']  = $_POST['ktunnus'];
   $datat['salasana']  = hash('sha512', $_POST['givenPw']."abc");
     //$datat['salasana'] = md5($datat['salasana'].'!!'); 
    // Talletetaan kantaan $DBH
    // ONKO Email oikeanlainen tarkistus palvilemella phpn avulla
    if(filter_var($datat['sahkoposti'], FILTER_VALIDATE_EMAIL)) { 
        //1 PUTTUU: kts lab note sivu 8
        // ONko annettu email jo käytössä ja onko email oikeanlainen  email
        $data['sahkoposti'] = $datat['sahkoposti'];
        $STH = $DBH->prepare("SELECT * FROM Kv_Profiilit WHERE Email=:sahkoposti");
        $STH->execute($data);
        $row = $STH->fetch();  //Löytyiko sama email osoite?
        if($STH->rowCount() == 0){ //Jos ei niin rekisteröidään
            try{
                $stm = $DBH->prepare("INSERT INTO Kv_Profiilit(Email, Etunimi, Sukunimi, Syaika, Kayttaja, Salasana) VALUES(:sahkoposti,:etunimi,:sukunimi,:syntaika,:ktunnus,:salasana)");
                if($stm->execute($datat)){

                    // Rekisteröinti onnistui - voisi laittaa samalla kirjautuneeksi
                    //echo("Rekisteröintyminen ok");
                    // Annetut tiedot myös session taulukkoon
                    $_SESSION['name'] = $datat['name'];
                    $_SESSION['email'] = $datat['email'];
                    $_SESSION['loggedin'] ='yes';
                    $_SESSION['message'] ='OK nyt voit kirjautua '.$_SESSION['email'];
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
           // Email on jo käytössä
            $_SESSION['message'] ='Sähköposti on jo käytössä';
            redirect('index.php'); 

        }
    }else{
        // Annettu tieto hylättiin palvelimella, tieto session muuttujaan
        $_SESSION['message'] ='Väärä email';
        redirect('index.php');  
    }
}