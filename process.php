<?php
  session_start();
  foreach($_POST as $val) {

      //echo "$val<br />";

  }
  $msg = 'Saved to database.';
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['lname'] = $_POST['lname'];
  $_SESSION['name'] = $_POST['fname'] . ' ' . $_POST['lname'];
  header('Location: form.php?msg='.$msg);
?>