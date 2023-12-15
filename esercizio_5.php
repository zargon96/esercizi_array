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
            'contemporaneamente',
        ];

        // trova la lunghezza massima tra le lunghezze delle parole
        $lunghezza_massima = max(array_map('strlen', $parole));

        // trova le parole con la lunghezza massima
        $paroleLunghe = array_filter($parole, function ($parola) use ($lunghezza_massima) {
            return strlen($parola) === $lunghezza_massima;
        });

        echo "Parole più lunghe:\n";
        foreach ($paroleLunghe as $parola) {
            echo '<pre>', "$parola\n";
        }
    ?>



</body>
</html>