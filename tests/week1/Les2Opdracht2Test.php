<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week1/Les2Opdracht2_LengteString.php');

final class Les2Opdracht2Test extends TestCase
{
    function testPrintOutStringAndLength(): void
    {
        $expected = "<h1>Mijn input: <em>10</em></h1>";
        $this->expectOutputString($expected);
        printOutStringAndLength("Mijn input");
    }
}