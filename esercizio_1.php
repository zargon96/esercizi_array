<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>esercizio_1</title>
</head>
<body>
   <?php
   $dati_studenti = [
      'nome' => 'mario',
      'cognome' => 'rossi',
      'età' => 20,
   ];
   echo "Dati personali:\n";
   echo "Nome: " . $dati_studenti['nome'] . "\n";
   echo "Cognome: " . $dati_studenti['cognome'] . "\n";
   echo "Età: " . $dati_studenti['età'] . " anni\n";
   ?>
</body>
</html>

