<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week1/Les2Opdracht1_Variabelen.php');

final class Les2Opdracht1Test extends TestCase
{
    function testAdres(): void
    {
        global $adres;
        if (isset($adres)) {
            $this->assertNotEmpty($adres);
        } else {
            throw new Error("Geen adres variabele");
        }
    }

    function testAdresIsString(): void
    {
        global $adres;
        $this->assertIsString($adres);
    }

    function testPostcode() {
        global $postcode;
        if (isset($postcode)) {
            $this->assertNotEmpty($postcode);
        } else {
            throw new Error("Geen postcode variabele");
        }
    }

    function testPostcodeIsString() {
        global $postcode;
        $this->assertIsString($postcode);
    }

    function testGeslacht() {
        global $geslacht;
        if (isset($geslacht)) {
            $this->assertNotEmpty($geslacht);
        } else {
            throw new Error("Geen geslacht variabele");
        }
    }

    function testGeslachtIsString() {
        global $geslacht;
        $this->assertIsString($geslacht);
    }

    function testIsStudent() {
        global $isStudent;
        if (isset($isStudent)) {
            $this->assertNotEmpty($isStudent);
        } else {
            throw new Error("Geen isStudent variabele");
        }
    }

    function testIsStudentIsBoolean() {
        global $isStudent;
        $this->assertIsBool($isStudent);
    }

    function testLeeftijd() {
        global $leeftijd;
        if (isset($leeftijd)) {
            $this->assertNotEmpty($leeftijd);
        } else {
            throw new Error("Geen leeftijd variabele");
        }
    }

    function testLeeftijdIsBoolean() {
        global $leeftijd;
        $this->assertIsInt($leeftijd);
    }
    
}