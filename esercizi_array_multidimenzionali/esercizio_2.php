<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_2</title>
</head>
<body>
    <h5>Scrivere un programma PHP che dichiara una matrice multidimensionale di stringhe e la stampa.</h5>
    <?php

        $matrice = [
            ["A", "B", "C"],
            ["D", "E", "F"],
            ["G", "H", "I"],
        ];
        $row = $matrice[1][1];
        print_r($row);exit;
        echo "Matrice multidimensionale di stringhe:\n";
        foreach ($matrice as $riga) {
            foreach ($riga as $elemento) {
                echo "$elemento ";
            }
            echo "\n";
        }

    ?>

</body>
</html>