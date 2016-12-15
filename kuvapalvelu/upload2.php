
<!DOCTYPE html>
<html>
<body>

<form action="saveImg.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <label>Kuvan nimi: <input type="text" required name="kuvanimi"></label>
    <br>
    <label>Kuvateksti: <input type="text" required name="kuvateksti"></label>
    <br>
    <label>Sijainti: <input type="text" required name="gps"></label>
    <br>
    <input type="submit" value="Lataa kuva" name="submit">
    <input type="hidden" value="<?php echo $_SESSION['uID']; ?>" name="kaytid">
</form>
<a href="/kuvapalvelu/logged_in.php">Takaisin etusivulle</a>
</body>
</html>
