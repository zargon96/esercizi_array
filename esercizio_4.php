<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_4</title>
</head>
<body>
    <?php
        $temperatureGiornaliere = [
            'Lunedì' => 25,
            'Martedì' => 28,
            'Mercoledì' => 22,
            'Giovedì' => 30,
            'Venerdì' => 27,
        ];

        $temperaturaMassima = max($temperatureGiornaliere);

        // Trova i giorni con la temperatura massima
        $giorniTemperaturaMassima = array_keys($temperatureGiornaliere, $temperaturaMassima);

        echo "Temperatura massima registrata: $temperaturaMassima °, ";
        echo implode(', ', $giorniTemperaturaMassima) . "\n";
    ?>



</body>
</html>