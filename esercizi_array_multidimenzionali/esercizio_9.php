<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio_9</title>
</head>
<body>
    <h3>Scrivere un programma PHP che dichiara una matrice multidimensionale di studenti (classe => [matricola => nome]) e stampa i nomi degli studenti per ogni classe.</h3>
    <?php

        $classi = [
            'classe A' => [
                1 => 'marco',
                2 => 'mario',
                3 => 'simone',
                4 => 'gabriele',
            ],

            'classe B' => [
                1 => 'marco',
                2 => 'mario',
                3 => 'simone',
                4 => 'gabriele',
            ]
        ];

        foreach ($classi as $classe => $studenti) {
            echo "classe: " . $classe . "<br>";
            foreach ($studenti as $matricola => $nome) {
                echo "Matricola: " . $matricola . ", Nome: " . $nome . "<br>";
            }
            echo "<br>";
        }
    ?>


</body>
</html>