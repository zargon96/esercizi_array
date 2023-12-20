<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_5</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di prodotti (categoria => [nome, prezzo]) e stampa i prodotti in ogni categoria.</h3>
    <?php

        $prodotti = [
            'informatica' => [
                ['nome' => 'pc fisso','prezzo' => 1250], 
                ['nome' => 'portatile','prezzo' => 900], 
                ['nome' => 'mouse','prezzo' => 60], 
                ['nome' => 'tastiera','prezzo' => 150], 
            ],

            'elettronica' => [
                ['nome' => 'lavatrice','prezzo' => 900], 
                ['nome' => 'asciugatrice','prezzo' => 900], 
                ['nome' => 'lavastoviglie','prezzo' => 499], 
                ['nome' => 'televisore','prezzo' => 400], 
            ],

            'cucina' => [
                ['nome' => 'piatti','prezzo' => 10], 
                ['nome' => 'coltelli','prezzo' => 50], 
                ['nome' => 'posate','prezzo' => 20], 
                ['nome' => 'tavolo','prezzo' => 300], 
            ]
        ];

       
        // $cucina = $prodotti['cucina'];
        // $primo_prodotto = $cucina[0]['nome'];

        // echo $primo_prodotto;exit;

        echo "Prodotti per categoria:\n";
        foreach ($prodotti as $categoria => $listaProdotti) {
            echo "$categoria:\n";
            foreach ($listaProdotti as $prodotto) {
                echo "  Nome: {$prodotto['nome']}, Prezzo: {$prodotto['prezzo']} euro\n";
            }
            echo "\n";
        }
    ?>


</body>
</html>