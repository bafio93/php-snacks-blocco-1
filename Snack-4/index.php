<?php
function call_15_rand($min,$max) {
    // Generiamo un array vuoto:
    $risposta = [];
    // Generiamo 15 numeri (suppongo compresi tra 1 e 20):
    $i = 0;
    while ($i < 15) {
        $attuale = random_int($min,$max);
        while (array_search($attuale,$risposta) !== false) {
            $attuale = random_int($min,$max);
        }
        $risposta[$i] = $attuale;
        $i = $i + 1;
    }
    return $risposta;
}
// Vediamo che effettivamente vengano stampati i numeri corretti:
$vettore = call_15_rand(1,20);
foreach ($vettore as $key) {
    echo "<h5>".$key."</h5>";
}
 ?>
