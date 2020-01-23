<?php
// Creiamo un array contenente alunni di una ipotetica classe:
$classe = [
    [
        "name" => "Fabio",
        "surname" => "Fabis",
        "grades" => [
            "maths" => 8,
            "english" => 7.5,
            "latin" => 3.5
        ]
    ],
    [
        "name" => "Arianna",
        "surname" => "Rianna",
        "grades" => [
            "maths" => 5.5,
            "english" => 9,
            "latin" => 7.5
        ]
    ],
    [
        "name" => "Tiziano",
        "surname" => "Tazio",
        "grades" => [
            "maths" => 5,
            "english" => 7.5,
            "latin" => 7
        ]
    ]
];
// Dovremo ciclare l'array...
foreach ($classe as $alunno => $v_alunno) {
    // Stampiamo a schermo nome e cognome dell'alunno:
    echo "<h4>".$v_alunno["name"]." ".$v_alunno["surname"]."</h4>";
    // Setto una variabile somma, vuota, più un contatore materie, vuoto:
    $sum = 0;
    $classes = 0;
    // Entriamo all'interno dei dati di ogni alunno, vediamo cosa accade:
    foreach ($v_alunno["grades"] as $voto => $v_voto) {
        $sum = $sum + $v_voto;
        $classes = $classes + 1;
    }
    // Ora possiamo valutare la media come:
    $mean = $sum/$classes;
    // Quindi la stampiamo a schermo:
    echo "<p> La media dell'alunno è pari a: ".$mean.".</p>";
}
 ?>
