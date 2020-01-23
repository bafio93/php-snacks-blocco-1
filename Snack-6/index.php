<?php
// Usiamo il DB fornitoci:
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
// Stampiamo con un foreach gli insegnanti in un rettangolo grigio, e i PM in uno verde:
foreach ($db as $role => $v_role) {
    // Stampiamo ruolo "selezionato":
    echo "<h1>".$role."</h1>";
    // Innestiamo un if: distinguiamo in due paragrafi colorati:
    if ($role == "teachers") {
        // Mettiamo qui il pessimo stile in linea...
        echo "<div style='background-color:gray'>";
        foreach ($v_role as $n) {
            echo "<p>".$n["name"]." ".$n["lastname"]."</p>";
        }
        echo "</div>";
    } else {
        echo "<div style='background-color:green'>";
        foreach ($v_role as $n) {
            echo "<p>".$n["name"]." ".$n["lastname"]."</p>";
        }
        echo "</div>";
    }
}
 ?>
