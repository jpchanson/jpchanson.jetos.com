<!DOCTYPE html>
<html lang="en">
<head>
  <title>EGA Calculator Widget</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<?php 
require 'php/EGA_Calc.php';
$EGA_CALCULATOR = new EGA_Calc(htmlspecialchars($_SERVER['PHP_SELF']));
?>
</div>

</body>
</html>