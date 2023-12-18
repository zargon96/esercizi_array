<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_1</title>
</head>
<body>
    <h1>Scrivere un programma PHP che dichiara una matrice multidimensionale di numeri e la stampa.</h1>
    <?php

        $matrice = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ];
            
        echo "Matrice multidimensionale:\n";
        foreach ($matrice as $riga) {
            foreach ($riga as $elemento) {
                echo "$elemento ";
            }
            echo "\n";
        }

    ?>
</body>
</html>