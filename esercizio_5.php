<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_4</title>
</head>
<body>
    <?php
        
        $parole = [
            'casa' => 4,
            'albero' => 6,
            'computer' => 8,
            'libro' => 5,
            'contemporaniamente' => 18,
        ];

        // Trova la lunghezza massima delle parole
        $lunghezzaMassima = max($parole);

        // trova le parole con la lunghezza massima
        $paroleLunghe = array_keys($parole, $lunghezzaMassima);

        echo "Parole più lunghe:\n";
        foreach ($paroleLunghe as $parola) {
            echo '<pre>', "$parola\n";
        }
    ?>


</body>
</html>