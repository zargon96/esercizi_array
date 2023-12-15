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

        echo '<pre>', "Temperatura massima registrata: $temperaturaMassima °";
    ?>

</body>
</html>