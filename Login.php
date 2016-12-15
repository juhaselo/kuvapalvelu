     <?php
    include_once('includes/iheader.php');
    ?>
    
    
<main class="sisalto">
    <h1>Kirjaudu Palveluun</h1>
   <?php 
//include_once('includes/iheader.php');
// Tultiinko tällesivulle selaimen submit painikkeella ?
        $_SESSION['loggedIn'] ='No';
        $_SESSION['name'] ="";
        $_SESSION['email'] ="";
if(isset($_POST['login'])){
    // Onistuiko Kirjautuminen ?
      $user = login($_POST['givenEmail'],$_POST['givenPw'],$DBH);
    if($user){ // Löydettiinkö
        // Talletetaan hänen tiedot sessioon
        $_SESSION['loggedIn'] ='Yes';
        $_SESSION['name'] =$user->Kayttaja;
        $_SESSION['uID'] =$user->proID;
        $_SESSION['email'] =$user->Email;  
        unset($_SESSION['Message']);
        redirect('logged_in.php');
    }else{
            $_SESSION['Message'] ="Väärä salasana tai email";
    }
    
}if(isset($_POST['cancel'])){
   // Tultiinko sivulle cancel-painikkeella ?
// Palataan etusivulle
    
    unset($_SESSION['Message']);
redirect('index.php');
}

?>

<form method="post">

<div class="formimuotoilu">Sähköposti : </div><input type="text" name="givenEmail" required placeholder="Sähköposti"><br>
<div class="formimuotoilu">Salasana : </div><input type="password" name="givenPw" required placeholder="Salasana"><br>

<input type="submit" value="Kirjaudu" name="login" /> 
<input type="submit" value="Cancel" name="cancel"/>
</form>  
   </main>      
          
  <?php  
include("includes/ifooter.php");
?>
   
          
          
   