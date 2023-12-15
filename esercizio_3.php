<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_2</title>
</head>
<body>
    <?php
        
        $prodotti = [
            'Prodotto_1' => 45,
            'Prodotto_2' => 60,
            'Prodotto_3' => 30,
            'Prodotto_4' => 75,
            'Prodotto_5' => 50,
        ];
        
        echo "Prodotti con prezzo superiore a 50 €:\n";
        foreach ($prodotti as $nome => $prezzo) {
            if ($prezzo > 50) {
                echo '<pre>', "$nome: $prezzo €\n";
            }
        }
    ?>
</body>
</html>