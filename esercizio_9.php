<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_9</title>
</head>
<body>
    <?php

        $mesi = [
            1 => 'Gennaio',
            2 => 'Febbraio',
            3 => 'Marzo',
            4 => 'Aprile',
            5 => 'Maggio',
            6 => 'Giugno',
            7 => 'Luglio',
            8 => 'Agosto',
            9 => 'Settembre',
            10 => 'Ottobre',
            11 => 'Novembre',
            12 => 'Dicembre',
        ];

        // Stampa lo stato iniziale
        echo "Stato iniziale dei mesi:\n";
        foreach ($mesi as $numero => $nome) {
            echo "$numero: $nome\n";
        }

        // Ordina l'array associativo in modo crescente rispetto ai valori (i nomi dei mesi)
        asort($mesi);

        // Stampa lo stato ordinato
        echo "\nStato ordinato dei mesi:\n";
        foreach ($mesi as $numero => $nome) {
            echo "$numero: $nome\n";
        }

    ?>
</body>
</html>

