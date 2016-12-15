<?php

include_once "config/config.php";
include_once("lataustausta.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Kuvatiedosto " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else {
        echo "Ei ole kuva tiedosto. ";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Kuva on jo ladattuna palvelussa. ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Liian suuri kuva koko. ";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Vain  JPG, JPEG, PNG & GIF päätteiset tiedostot ovat sallittuja. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Tiedostoa ei voitu ladata.<br>";
    echo "<strong>Sivu uudelleenohjautuu 5 sekunnin kuluttua etusivulle.<strong>";
    header("refresh:5;url=logged_in.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Tiedosto ". basename( $_FILES["fileToUpload"]["name"]). " on lisätty.<br>";
        echo "<strong>Sivu uudelleenohjautuu 5 sekunnin kuluttua etusivulle.<strong>";
        
        $datat['kunimi']  = $_POST['kunimi'];       
         $datat['kuteksti']  = $_POST['kuteksti']; 
         $datat['gps']  = NULL;//$_POST['gps']; 
        $datat['polku']  = $target_file;
        $datat['kaytid']= $_SESSION['uID'];
        
         $stm = $DBH->prepare("INSERT INTO Kv_Kuvat(Nimi, Kuvateksti, Sijainti, Polku, kaytID) VALUES(:kunimi,:kuteksti,:gps,:polku,:kaytid)");
        $stm->execute($datat);
        header("refresh:5;url=logged_in.php");
            
    } else {
        echo "Virhe ladattaessa tiedostoa. ";
    }
}
?>
