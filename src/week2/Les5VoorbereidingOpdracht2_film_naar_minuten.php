<?php
/*
   - Eén parameter `$minuten` ontvangt
   - Eén string teruggeeft waarin minuten worden weergegeven in notatie: `uu:mm` (waar `u` uur en `m` minuut betekent).
   - (Hint: gebruik floor())
     Een voorbeeld van hoe deze functie gebruikt kan worden:

   ```php
   <?php
   $uur = minutenNaarUur($film['duration']);
   ?>
   /// hier komt de start van html (html, head, body etc)
   <h1><?=$film['title']?></h1>
   <p>Deze film duurt <?=$uur?></p>
   /// hier de afsluiting
   `
*/

function minutenNaarDuur($duration) {
  // Schrijf hier je broncode
  //START
  $uren = floor($duration / 60);
  $minuten = $duration % 60;
  $urenString = "$uren";
  if ($uren < 10) {
    $urenString = "0$uren";
  }
  $minutenString = "$minuten";
  if ($minuten < 10) {
    $minutenString = "0$minuten";
  }
  return "$urenString:$minutenString";
  //END
}