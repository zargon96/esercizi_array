<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_7</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di studenti (matricola => [nome, cognome]) e cerca lo studente con una matricola specifica.</h3>
    <?php

        $studenti = [
            'ABCD' => ["nome" => "mario", "cognome" => "rossi",],
            'EFGH' => ["nome" => "anna", "cognome" => "verdi",],
            'ILMN' => ["nome" => "luca", "cognome" => "bianchi",],
        ];

        // $row = $studenti['ABCD'];
        // $primo_studente = $row["nome"];
        // echo $primo_studente;exit;

        $matricola_da_cercare = 'EFGH';

        if (array_key_exists($matricola_da_cercare, $studenti)) {
            $studente = $studenti[$matricola_da_cercare];
            echo "Matricola: " . $matricola_da_cercare . ", Nome: " . $studente['nome'] . ", Cognome: " . $studente['cognome'];
        } else {
            echo "Studente con matricola " . $matricola_da_cercare . " non trovato.";
        }

    ?>


</body>
</html>