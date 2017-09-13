<?php
  session_start();
  foreach($_POST as $key=>$val) {
      // if you echo stuff to the page, you won't be able
      // to do the header redirect because headers will
      // already have been sent.

      //echo "$key = $val<br />";

  }
  $msg = 'Saved to database';
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['lname'] = $_POST['lname'];
  $_SESSION['name'] = $_POST['fname'] . ' ' . $_POST['lname'];
  header('Location: form.php?msg='.$msg);
?>