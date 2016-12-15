
<?php

include_once "config/config.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Ladattu " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Ei ole kuva tiedosto";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Kuva on jo ladattuna palvelussa.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Liian suuri kuva koko";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Vain  JPG, JPEG, PNG & GIF päätteiset tiedostot ovat sallittuja.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Tiedostoa ei voitu ladata";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " on lisätty.";
        
           $datat['kunimi']  = $_POST['kunimi'];       
         $datat['kuteksti']  = $_POST['kuteksti']; 
         $datat['gps']  = $_POST['gps']; 
        $datat['polku']  = $target_file;
        
         $stm = $DBH->prepare("INSERT INTO Kv_Kuvat(Nimi, Kuvateksti, Sijainti, Polku) VALUES(:kunimi,:kuteksti,:gps,:polku)");
        $stm->execute($datat);
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
