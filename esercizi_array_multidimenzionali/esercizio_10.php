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

        
        // $row = $negozi['milano']['negozio_1'];
        // echo $row;exit();

        foreach($negozi as $citta => $negozio){
            echo "città:<br> " . $citta . "<br>";
            foreach ($negozio as $nome => $via) {
                echo "nome: " . $nome . "<br> via: " . $via . "<br>";
            }
            echo "<br>";
        }
    ?>


</body>
</html>