<?php
require_once("config/config.php");
print_r($_SESSION);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kayttaja = $_SESSION["name"];
    $kuvanID = $_POST["kuva"];
    if (!empty($_POST["rating"])) {
        $tahdet = $_POST["rating"];
        echo $kuvanID." ".$tahdet;
        // Tietokantakysely
        try {
            $uusiKysely = "SELECT * FROM Kv_Arvostelut WHERE Kv_Arvostelut.Kayttaja = '".$kayttaja."' AND Kv_Arvostelut.KuvanID = ".$kuvanID;
            echo $uusiKysely;
           $kysely = $DBH->prepare($uusiKysely);
            echo $uusiKysely;
            $kysely->execute();
            $count = $kysely->rowCount();
            echo $count;
            if ($count > 0) {
                $rivi = $kysely->fetch();
                print_r ($rivi);
                $paivitys = "UPDATE Kv_Arvostelut SET Tahdet= ".$tahdet." WHERE Kayttaja = '".$kayttaja."' AND KuvanID = ".$kuvanID;
                
                // Tallennus tietokantaan
                $tallennus = $DBH->prepare($paivitys);
                $tallennus->execute();
                
            } else {
                $uusiLisays = "INSERT INTO Kv_Arvostelut (Kayttaja, KuvanID, Tahdet) VALUES ('".$kayttaja."', ".$kuvanID.",'".$tahdet."');";
                echo $uusiLisays;
                // Tallennus tietokantaan
                $lisays = $DBH->prepare($uusiLisays);
                $lisays->execute();
            }
        
        } catch(PDOException $e) {
            print_r($e);
        }
    }
}

?>