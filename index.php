<?php
    include_once __DIR__ . '/models/Product.php';


    function product($number, $multiplier){
        if ( !is_integer($multiplier) || !is_integer($number) ){
            throw new UnexpectedValueException('Given values cannot be other than an integer ', 6672);
        }
        return $number * $multiplier;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits and exceptions</title>
</head>
<body>
    <h1>
        Traits:
    </h1>
    <?php

    try {
        var_dump(product(2,'dqwdw'));
    } catch (Exception $e) {
        echo 'Eccezione> ' . $e->getMessage() . ' with code: '. $e->getCode();
    }

    ?>


</body>
</html>