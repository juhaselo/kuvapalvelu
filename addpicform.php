<!DOCTYPE html>
<html>
<body>
    
    <form action="saveImg.php" method="post" enctype="multipart/form-data">

            <div class="formimuotoilu">Kuvan nimi :</div><input type="text" name="kunimi" required placeholder="Kuvannimi"><br>
            <div class="formimuotoilu">Kuvateksti:</div><input type="text" name="kuteksti" required placeholder="Kuvateksti"><br>
            <div class="formimuotoilu">GPS koordinaatit:</div><input type="text" name="gps" required placeholder="GPS koordinaatit"><br>
                         
        Valitse ladattava tiedosto:
    <input type="file" name="fileToUpload" id="fileToUpload">
        <br><input type="hidden" value="<?php echo $_SESSION['uID']; ?>" name="kaytid">
    <input type="submit" value="Lataa kuva" name="submit">
        </form>

<a href="/kuvapalvelu/logged_in.php">Takaisin etusivulle</a>
</body>
</html>