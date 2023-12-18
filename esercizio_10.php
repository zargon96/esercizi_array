<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_10</title>
</head>
<body>
    <?php

        $studenti = [
            'A123' => ['nome'=>'mario','cognome'=>'rossi'],
            'B456' => 'marco',
            'C789' => 'simone',
            'D012' => 'gabriele',
        ];


        //ksort Ordina l'array associativo in modo alfabetico rispetto alle chiavi in questo caso:(le matricole)
        ksort($studenti);

        var_dump($studenti['A123']['nome'], $studenti['A123']['cognome']);exit();
    ?>

</body>
</html>