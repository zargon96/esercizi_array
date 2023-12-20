<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_4</title>
</head>
<body>
    <h5>Scrivere un programma PHP che dichiara una matrice multidimensionale di voti degli studenti (nome => voto) e calcola la media dei voti per ogni studente.</h5>
    <?php

        $studenti = [
            'ABCD' => ["Nome" => "Mario", "Cognome" => "Rossi", "Voti" => [18, 25, 27]],
            'EFGH' => ["Nome" => "Anna", "Cognome" => "Verdi", "Voti" => [22, 28, 30]],
            'ILMN' => ["Nome" => "Luca", "Cognome" => "Bianchi", "Voti" => [30, 18, 25]],
        ];

        // $row = $studenti['ABCD'];
        // $primo_studente = $row['Voti'][0];
        // echo $primo_studente;exit;

        echo "Dati personali e media dei voti degli studenti:\n";
        foreach ($studenti as $matricola => $studente) {
            echo "Matricola: $matricola\n";
            echo "Nome: {$studente["Nome"]}\n";
            echo "Cognome: {$studente["Cognome"]}\n";
            echo "Voti: " . implode(", ", $studente["Voti"]) . "\n";

            
            $media = number_format(array_sum($studente["Voti"]) / count($studente["Voti"]), 1);
            echo "Media: $media\n";

            
        }
    ?>


</body>
</html>