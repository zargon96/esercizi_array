<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_10</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di negozi (città => [nome => indirizzo]) e stampa gli indirizzi dei negozi in ogni città.</h3>
    <?php

        $negozi = [
            'milano' => [
                'negozio_1' => 'via verdi 10',
                'negozio_2' => 'via rossi 15',
            ],
            'roma' => [
                'negozio_1' => 'via verdi 5',
                'negozio_2' => 'via rossi 2',
            ],
        ];

        foreach($negozi as $chiave => $valore){
            echo "negozio:<br> " . $chiave . "<br>";
            foreach ($valore as $chiave => $via) {
                echo "via: " . $via . "<br>";
            }
        }
    ?>


</body>
</html>