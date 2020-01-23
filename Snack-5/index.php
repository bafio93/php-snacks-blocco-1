<?php
// Creiamo un paragrafo di partenza:
$testo_lungo = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
// Esplodo la stringa secondo ".":
$testo_esploso = explode("." , $testo_lungo);
// Ricompongo la stringa aggiungendo <p>:
$testo_rifatto = implode(".</p><p>" , $testo_esploso);
// Stampo:
echo $testo_rifatto;
 ?>
