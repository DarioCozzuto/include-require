
<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  
<?php
//Include e require sono identici, eccetto per gli errori:
//Include produce un warning(E_WARNING) e lo script continua
//Require produce l'errore fatale(E_COMPILE_ERROR) e lo script si blocca
 include 'noFileExists.php';
echo "I have a $color $car.";

include 'noFileExists.php';
echo "I have a $color $car.";

?>
</body>
</html>
