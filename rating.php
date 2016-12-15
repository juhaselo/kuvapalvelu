
<?php

require_once("config/config.php");
$kysely = $DBH->prepare("SELECT ROUND(AVG(Tahdet),0) AS keskiarvo FROM Kv_Arvostelut WHERE Kv_Arvostelut.KuvanID = ".$kuvaid); 
$kysely->execute();
  while ($rivi = $kysely->fetch()) {
 $rating=($rivi["keskiarvo"]);
}
?>

<form method="POST" action="saveRating.php">
<fieldset class="rating">
    <legend>Arvostele:</legend>
    <?php for ($i = 5; $i > 0; $i--): ?>
    <input type="radio" name="rating" id="<?php echo $kuvaid.$i; ?>" value="<?php echo $i; ?>" <?php if($i == $rating) echo 'checked'; ?>   data-kuva="<?php echo $kuvaid; ?>" /><label for="<?php echo $kuvaid.$i; ?>"></label>
    <?php endfor; ?>
</fieldset>
</form>
