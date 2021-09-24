<?php


// Maak een array: `$eenTMTien` die gevuld is met de getallen 1 t/m 10.
//START
$eenTMTien = [1,2, 3,4,5,6,7,8,9,10];
//END

// Maak een array: `$zesTMVijftien` die gevuld is met de getallen 6 t/m 15.
//START
$zesTMVijftien = [6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
//END

// Maak een array: `$samengevoegd` door de array uit onderdeel 1 en 2 samen te voegen 
// (je krijgt dus een array met de getallen 1 t/m 15 en met duplicaten).
// Kijk of je eruit komt door array_merge te gebruiken.

//START
$samengevoegd = array_merge($eenTMTien, $zesTMVijftien);
//END

/*

Maak een array: `$film` die je zou kunnen gebruiken voor het detailoverzicht van je beroepsproduct met daarin de volgende keys:
titel;
jaar;
regisseur;
hoofdrolspelers.
*/
//START
$film = [
    'titel' => 'Pipi Langkous',
    'jaar' => '1967',
    'regisseur' => 'Piet Hendrik',
    'hoofdrolspelers' => ['Pipi', 'Vader van Pipi']
];
//END