sess

<p>

    <?php
session_start();
    echo $_SESSION['naam'] . " " .  $_SESSION['email']. "<br> " .  $_SESSION['klas'].  "<br> " .  $_SESSION['workshop']   ;

    ?>



</p>
