<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_6</title>
</head>
<body>
    <?php
        $matricola_studenti = [
            'mario' => 1234,
            'marco' => 5678,
            'simone' => 9109,
            'gabriele' => 1213,
        ];

        $matricola_da_cercare = 5678;

        $matricola_trovata = array_search($matricola_da_cercare, $matricola_studenti);
        
        //var_dump($matricola_studenti); exit();

        if ($matricola_trovata !== false) {
            echo "Lo studente con matricola $matricola_da_cercare è: $matricola_trovata\n";
        } else {
            echo "Lo studente con matricola $matricola_da_cercare non è stato trovato.\n";
        }
    ?>

</body>
</html>