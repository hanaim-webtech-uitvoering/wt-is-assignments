<?php
/*
Maak nu zelf een functie die:

- Altijd de laatste drie karakters van een string teruggeeft.
- Eén input-parameter heeft (de string).
- Hint: Je moet `strlen` gebruiken.
*/

function last3Characters($string) {
    // Schrijf hier je broncode
    //START
    return substr($string, strlen($string)-3, strlen($string));
    //END
}