<?php
   include('header.php');
   ?>
 <?php
   include('database.php');
   ?>

   <?php

   if (isset($_GET['id'])) {
       $newid = $_GET['id'];
     

$query = "DELETE FROM `students` WHERE `id` = '$newid'";

$result = $mysqli->query($query);
if ($result) {
  header('location:index.php?delete_msg=successfully deleted');

}
else{
  die("Query Failed: " . mysqli_error($connection));
}
 }
?>

     <?php
   include('footer.php');
?>