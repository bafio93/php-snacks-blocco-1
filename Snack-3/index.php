<?php
// Creiamo un array di array...
$data = [
    "01/01/2020" => [
        [
            "title" => "First title",
            "author" => "by Bafs",
            "article" => "FIRST OF 1/1"
        ],
        [
            "title" => "Second title",
            "author" => " by Bafs",
            "article" => "SECOND OF 1/1"
        ]
    ],
    "02/01/2020" => [
        [
            "title" => "Third title",
            "author" => "by Sbaf39",
            "article" => "MINE FIRST OF YEAR (2/1)"
        ],
        [
            "title" => "Fourth title",
            "author" => "by Bafs",
            "article" => "THIRD, OF 2/1"
        ]
    ],
    "03/01/2020" => [
        [
            "title" => "Fifth title",
            "author" => "by Sbaf39",
            "article" => "ONLY ONE OF 3/1!"
        ]
    ]
];
// Cerchiamo di stampare ogni data con i relativi post...
foreach ($data as $giorno => $v_giorno) {
    echo "<h1>".($giorno)."</h1>";
    // Ora cerchiamo di innestare dentro questo ciclo un secondo per leggere gli articoli...
    foreach ($data[$giorno] as $n) {
        echo "<h2>".$n["title"]."</h2>";
        echo "<p><em>".$n["author"]."</em></p>";
        echo "<p>".$n["article"]."</p>";
    }
}
