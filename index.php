<?php
    include_once __DIR__ . '/models/Product.php';

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
        var_dump(new Product('name', 333.3, 16, 22));
    ?>


</body>
</html>