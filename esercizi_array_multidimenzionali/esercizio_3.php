<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_3</title>
</head>
<body>
    <h5>Scrivere un programma PHP che dichiara una matrice multidimensionale di dati personali (nome, cognome, età) e stampa i dati di ogni persona.</h5>
    <?php

        $dati_personali = [
          'ABCD' => ["Nome" => "Mario", "Cognome" => "Rossi", "Età" => 30],
          'EFGH' => ["Nome" => "Anna", "Cognome" => "Verdi", "Età" => 25],
          'ILMN' => ["Nome" => "Luca", "Cognome" => "Bianchi", "Età" => 28],
        ];

        echo "Dati personali:\n";
        foreach ($dati_personali as $matricola => $persona) {
            echo "matricola: $matricola Nome: " . $persona["Nome"] . ", Cognome: " . $persona["Cognome"] . ", Età: " . $persona["Età"] . "\n";
        }

    ?>

</body>
</html>