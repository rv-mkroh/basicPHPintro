<?php
session_start();

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="lib/css/styles.css?v=1.1">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <?php

    $_SESSION['test'] = 'form page';
    if(!empty($_GET['msg']) ) {
      echo "<p>{$_GET['msg']}, {$_SESSION['name']}</p>";
    } else {
      include('formTemplate.php');
    }
          // include('formTemplate.php');

  ?>
  <script src="lib/js/scripts.js"></script>
</body>
</html>