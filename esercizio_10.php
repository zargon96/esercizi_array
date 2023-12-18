<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_10</title>
</head>
<body>
    <?php

        // Dichiarazione dell'array associativo di studenti (matricola => nome)
        $studenti = [
            'A123' => 'Mario Rossi',
            'B456' => 'Luca Bianchi',
            'C789' => 'Anna Verdi',
            'D012' => 'Giovanni Neri',
        ];

        // Stampa lo stato iniziale
        echo "Stato iniziale degli studenti:\n";
        foreach ($studenti as $matricola => $nome) {
            echo "$matricola: $nome\n";
        }

        // Ordina l'array associativo in modo alfabetico rispetto alle chiavi (le matricole)
        ksort($studenti);

        // Stampa lo stato ordinato
        echo "\nStato ordinato degli studenti:\n";
        foreach ($studenti as $matricola => $nome) {
            echo "$matricola: $nome\n";
        }

    ?>

</body>
</html>