<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_8</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di prodotti (categoria => [codice => nome]) e stampa i nomi dei prodotti in ogni categoria.</h3>
    <?php

        $prodotti = [
            'informatica' => [
                ['codice' => 1234,'nome' => 'pc fisso','prezzo' => 1250], 
                ['codice' => 5678,'nome' => 'portatile','prezzo' => 900], 
                ['codice' => 9101,'nome' => 'mouse','prezzo' => 60], 
                ['codice' => 1213,'nome' => 'tastiera','prezzo' => 150], 
            ],

            'elettronica' => [
                ['codice' => 1415,'nome' => 'lavatrice','prezzo' => 900], 
                ['codice' => 1617,'nome' => 'asciugatrice','prezzo' => 900], 
                ['codice' => 1819,'nome' => 'lavastoviglie','prezzo' => 499], 
                ['codice' => 2021,'nome' => 'televisore','prezzo' => 400], 
            ],

            'cucina' => [
                ['codice' => 2223,'nome' => 'piatti','prezzo' => 10], 
                ['codice' => 2425,'nome' => 'coltelli','prezzo' => 50], 
                ['codice' => 2627,'nome' => 'posate','prezzo' => 20], 
                ['codice' => 2829,'nome' => 'tavolo','prezzo' => 300], 
            ]
        ];

        // $row = $prodotti['cucina'];
        // $primo_prodotto = $row[0]['codice'];

        // echo $primo_prodotto;exit;

        foreach ($prodotti as $categoria => $listaProdotti) {
            echo "$categoria:<br>";
            foreach ($listaProdotti as $prodotto) {
                echo "Codice prodotto: {$prodotto['codice']}, Nome: {$prodotto['nome']},";
            }
            echo "<br>";
        }
    ?>


</body>
</html>