<?php
session_start();
?>
<?php
session_unset();        // remove all session variables
session_destroy();      // destroy the session 
header("location:login.php");
?>