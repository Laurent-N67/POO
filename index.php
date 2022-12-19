<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

require "product.php";
require "order.php";

$P1 = new Product("test", "test", "salut");
$P1->setVat(10);
$P1->setQuantity(7);
$P1->setPriceHT(120);
$P1->getCalculPriceTTC()."<br>";
$P1->getTotalPriceTTC()."<br>";
echo $P1;


?>

<section>
    
    <div>
        <?php
        
        ?>
    </div>
</section>

</body>
</html>