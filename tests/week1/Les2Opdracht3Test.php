<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week1/Les2Opdracht3_Substr.php');

final class Les2Opdracht3Test extends TestCase
{
    function testLast3Characters () {
        $this->assertEquals(last3Characters('Hello Amsterdam'), 'dam');
    }
}