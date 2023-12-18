<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_8</title>
</head>
<body>
    <?php
        $prodotti = [
            'prodotto1' => 10,
            'prodotto2' => 5,
            'prodotto3' => 8,
        ];

        // Stampa lo stato iniziale
        echo "Stato iniziale degli stock:\n";
        foreach ($prodotti as $codice => $quantita) {
            echo "$codice: $quantita\n";
        }

        // Prodotto da aggiornare
        $prodotto_da_aggiornare = 'prodotto2';

        // Nuova quantità da assegnare
        $nuova_quantita = 12;

        // Aggiorna la quantità del prodotto specificato
        $prodotti[$prodotto_da_aggiornare] = $nuova_quantita;

        // Stampa lo stato aggiornato
        echo "\nStato degli stock dopo l'aggiornamento:\n";
        foreach ($prodotti as $codice => $quantita) {
            echo "$codice: $quantita\n";
        }

    ?>

</body>
</html>