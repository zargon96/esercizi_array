<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_6</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di temperature giornaliere (giorno => [minima, massima]) e stampa la temperatura media per ogni giorno.</h3>
    <?php

        $temperature = [
            'lunedi' => [20,30],
            'martedi' => [25,35],
            'mercoledi' => [23,40],
            'giovedi' => [20,45],
            'venerdi' => [18,35],
            'sabato' => [27,48],
            'domenica' => [22,32],
        ];

        foreach ($temperature as $chiave => $valore) {
            $media = array_sum($valore) / count($valore);
            echo "Giorno: " . $chiave . ", Temperatura media: " . $media . "<br>";
        }

    ?>


</body>
</html>