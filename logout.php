<?php
include('header.php');
include('dbcon.php');
?> 

<?php
   session_start();
   session_destroy();
    header("location:login.php");
   
?>
<?php
include('footer.php');
?>