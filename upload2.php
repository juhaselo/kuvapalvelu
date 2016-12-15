 <form action="saveImg.php" method="post" enctype="multipart/form-data">
    Valitse ladattava kuva:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <label>Kuvan nimi: <input type="text" required name="kunimi"></label>
    <br>
    <label>Kuvateksti: <input type="text" required name="kuteksti"></label>
    <br>
    <!--<label>Sijainti: --><input type="hidden" required name="gps" value="NULL"><!--</label>-->
    <br>
     
    <input type="submit" value="Lataa kuva" name="submit" class="link_box">
  
</form>