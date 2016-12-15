<?php
// Headeri kutsutaan config
require_once("config/config.php");
include("includes/iheader.php");

?>

 <?php 

// Teerekisteröinti lomake kts mitä kenttiä
// 2 Lomakkeen kenttien ehdot annetuille datoille http://www.w3schools.com/tags/att_input_pattern.asp
// 3 Salasana ja sen varmistus samoja

?> 
<main class="sisalto">
<h2>Rekisteröidy</h2>
<form action="saveUser.php" method="post">

            <div class="formimuotoilu">Sähköposti : </div><input type="email" name="sahkoposti" required placeholder="Sähköposti"><br>
            <div class="formimuotoilu">Etunimi:</div><input type="text" name="etunimi" required placeholder="Etunimi"><br>
            <div class="formimuotoilu">Sukunimi: </div><input type="text" name="sukunimi" required placeholder="Sukunimi"><br>
           <div class="formimuotoilu">Syntymäaika : </div><input type="text" name="syntaika" required placeholder="1.12.2016" pattern="^([1-9]|[12][0-9]|3[01])\.([1-9]|[1][0-2])\.[0-9]{4}$"><br>
            <div class="formimuotoilu">Käyttäjänimi: </div><input type="text" name="ktunnus" required placeholder="Käyttäjänimi"><br>
            <div class="formimuotoilu">Salasana : </div><input type="password" name="givenPw" required placeholder="Salasana"><br>
            <div class="formimuotoilu">Salasana uudelleen : </div><input type="password" name="givenPwAgain" required placeholder="Salasana uudelleen"><br>
            <input type="submit" value="Rekisteröidy" name="save"> <input type="reset" value="Tyhjennä lomake">
        </form>
<script>

var salasana = document.querySelector('input[name="givenPw"]');
var varmistus = document.querySelector('input[name="givenPwAgain"]'); 
var fillPattern = function(){
    varmistus.pattern= this.value;
    
}
salasana.addEventListener('keyup', fillPattern);
    
</script>
<!-- 
^([1-9]|[12][0-9]|3[01])\.([1-9]|[1][0-2])\.[0-9]{4}$
$phpdate = strtotime( $_POST['syntaika'] );
$datat['Syaika'] = date( 'Y-m-d H:i:s', $phpdate );

^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$ 

^(\d{2})\.(\d{2}\.)(\d{4})$0[1-9]|1[0-2]
-->
   </main>
    
  <?php  
include("includes/ifooter.php");
?>

   


  