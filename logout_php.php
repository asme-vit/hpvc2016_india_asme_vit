<?php
session_start();
?>

<html>
<body>
<?php
session_unset();        // remove all session variables
session_destroy();      // destroy the session 

header("location:login.php");
?>

</body>
</html>