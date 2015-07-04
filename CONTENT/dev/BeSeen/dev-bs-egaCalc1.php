<?php require '/srv/http/TEMPLATES/dev-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>

<div class="container">
<h1>Economic Growth Accelerator Calculator</h1>

<?php 
require '/srv/http/PHP/EGA_calc/php/EGA_Calc.php';
$EGA_CALCULATOR = new EGA_Calc(htmlspecialchars($_SERVER['PHP_SELF']));
?>
</div>


<?php require '/srv/http/TEMPLATES/footer.php'; ?>