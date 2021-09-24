<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week2/Les5VoorbereidingOpdracht2_film_naar_minuten.php');

final class Les5VoorbereidingOpdracht2Test extends TestCase
{
    function setUp():void {
        // $this->markTestSkipped('Nog niet bezig met deze les.');
    }
    
    function testFilmNaarMinuten() {
        $this->assertEquals(minutenNaarDuur(120), "02:00");
        $this->assertEquals(minutenNaarDuur(89), "01:29");
    }
}