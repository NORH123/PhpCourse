<?php
//variables 
$title ="Learning Php 7.4";
$name="Norh";
$num =20;
$float =8.22;
$bool=true;
$bool2=false;
$nothing =null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> </title>
</head>
<body>
    <?php 
    echo '<h1> wlecome to '. $name .'</h1>' ;
    echo $num;
    echo '<br>';
    echo $float;
    ?> 
   
</body>
</html>