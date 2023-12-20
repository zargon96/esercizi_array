<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_9</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di studenti (classe => [matricola => nome]) e stampa i nomi degli studenti per ogni classe.</h3>
    <h5>modifica aggiungere la funzione che restituisca i nomi e cognomi ripetuti se ci sono.</h5>
    <?php
        function contaElementiRipetuti($array, $chiave) {
            $contatore = [];

            foreach ($array as $studenti) {
                foreach ($studenti as $studente) {
                    $valore = $studente[$chiave];

                    if (isset($contatore[$valore])) {
                        $contatore[$valore]++;
                    } else {
                        $contatore[$valore] = 1;
                    }
                }
            }

            return $contatore;
        }

        function stampaElementiRipetuti($contatore, $chiave) {
            echo "Risultati per $chiave ripetuti:<br>";
            foreach ($contatore as $valore => $conteggio) {
                if ($conteggio > 1) {
                    echo "$valore: $conteggio<br>";
                }
            }
        }

        $classi = [
            'classe A' => [
                1 => ['nome' => 'marco', 'cognome' => 'rossi'],
                2 => ['nome' => 'mario', 'cognome' => 'verdi'],
                3 => ['nome' => 'gervasio', 'cognome' => 'giallo'],
                4 => ['nome' => 'pippo', 'cognome' => 'viola'],
            ],

            'classe B' => [
                1 => ['nome' => 'marco', 'cognome' => 'rossi'],
                2 => ['nome' => 'giovanni', 'cognome' => 'blu'],
                3 => ['nome' => 'gervasio', 'cognome' => 'nero'],
                4 => ['nome' => 'gervasio', 'cognome' => 'bianco'],
            ]
        ];

        $nomi_contati = contaElementiRipetuti($classi, 'nome');
        $cognomi_contati = contaElementiRipetuti($classi, 'cognome');

        stampaElementiRipetuti($nomi_contati, 'nome');
        stampaElementiRipetuti($cognomi_contati, 'cognome');
    ?>




</body>
</html>