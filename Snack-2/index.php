<?php
// Prendiamo in GET i parametri:
$name = $_GET["name"];
$age = intval($_GET["age"]);
$mail = $_GET["mail"];
// Eseguiamo i controlli: devono valere tutte le condizioni contemporaneamente => AND.
if ( (strlen($name)>3) and (($age)>0) and (strstr($mail,"@")) and (strstr($mail,".")) ) {
    echo "BENVENUTO!";
} else {
    echo "ACCESSO NEGATO!";
}
 ?>
