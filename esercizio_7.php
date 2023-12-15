<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_7</title>
</head>
<body>
    <?php

        function formattaNumero($numero) {
            // Arrotonda il numero a 2 cifre decimali
            $numero = round($numero, 2);
            return number_format($numero, 2, ",", ".");
        }

        $città = [
            'Roma' => 2872800,
            'Milano' => 1366180,
            'Napoli' => 975260,
            'Torino' => 872367,
            'Palermo' => 678492,
        ];

        $città_da_cercare = 'Milano';

        // verifica se la città è presente
        if (array_key_exists($città_da_cercare, $città)) {
            $numero_popolazione = formattaNumero($città[$città_da_cercare]);
            echo "La città di $città_da_cercare è presente nell'array con una popolazione di $numero_popolazione abitanti.\n";
        } else {
            echo "La città di $città_da_cercare non è presente nell'array.\n";
        }

    ?>

</body>
</html>