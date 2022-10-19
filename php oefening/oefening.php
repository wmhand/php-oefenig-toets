<?php

$message = "";
session_start();
if (isset($_POST['submit'])){

    if (!empty($_POST['naam']) && !empty($_POST['email']) &&!empty($_POST['klas']) &&!empty($_POST['workshop']) && !empty($_POST['voorwaarden'])){
        $naam = filter_input(INPUT_POST, 'naam', FILTER_VALIDATE_INT) ;
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ;
        $klas = $_POST['klas'];
        $workshop = $_POST['workshop'];
        $voorwaarden = $_POST['voorwaarden'];

        if (!$naam && !$email){
            $message = "vul een correcte email en naam in";
        }
        else{
            $_SESSION['klas'] = $klas;
            $_SESSION['workshop'] = $workshop;

            $_SESSION['naam'] = $naam;
            $_SESSION['email'] = $email;
            header("Location: result.php");
        }
    }else{
        $message = "vul alles in";
    }









}





?>






<form method="post">
  naam:  <input name="naam">
<br>
   email: <input name="email">
<br>
    klas: <input name="klas">
<br>

    <label>workshops</label>
  drones <input type="radio" name="workshop">
    <br>
    raspbarry pi <input type="radio" name="workshop">
    <br>
    security <input type="radio" name="workshop">
<br>
    <input type="checkbox" name="voorwaarden"> ik ga akkoord met de voorwaarden
<br>

<button type="submit" name="submit" >inschrijven</button>

</form>
<?php
echo $message;
?>
