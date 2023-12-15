<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_2</title>
</head>
<body>
   <?php
    $votiStudenti = array(
        'mario' => 8,
        'marco' => 4,
        'simone' => 9,
        'gabriele' => 9,
    );
    
    // Calcolo della media dei voti
    $totaleVoti = array_sum($votiStudenti);
    $numeroStudenti = count($votiStudenti);
    $mediaVoti = $totaleVoti / $numeroStudenti;
    
    // Stampa dei voti e della media
    echo "Voti degli studenti:\n";
    foreach ($votiStudenti as $nome => $voto) {
        echo '<pre>', "$nome: $voto\n";
    }
    
    echo '<pre>', "\nMedia dei voti: $mediaVoti\n";
    ?>
</body>
</html>