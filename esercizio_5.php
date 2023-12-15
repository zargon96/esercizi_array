<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_5</title>
</head>
<body>
    <?php
        
        $parole = [
            'casa',
            'albero',
            'computer',
            'libro',
            'contemporaniamente',
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