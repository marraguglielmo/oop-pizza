<?php

require_once __DIR__ . '/Model/Pizza.php';

$margherita = new Pizza('margherita', 6.00, ['pomodoro', 'mozzarella', 'basilico']);

var_dump($margherita)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <div class="container">
        <h1>Pizzeria</h1>
        <div class="container">
            <div class="nome-pizza">
                <h3><?php $margherita->getFullInfo() ?></h3>
            </div>
            <ul>
                <?php foreach ($margherita->ingredienti as $ingrediente) : ?>
                    <li>
                        <?php echo $ingrediente ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>

</html>