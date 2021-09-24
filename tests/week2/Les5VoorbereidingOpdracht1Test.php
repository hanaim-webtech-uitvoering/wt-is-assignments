<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week2/Les5VoorbereidingOpdracht1_arrays.php');

final class Les5VoorbereidingOpdracht1Test extends TestCase
{
    function setUp():void {
        $this->markTestSkipped('Nog niet bezig met deze les.');
    }
    
    function testMaakArray () {
        global $eenTMTien;
        $this->assertIsArray($eenTMTien);
        $this->assertCount(10, $eenTMTien);
        $this->assertContains(5, $eenTMTien);
    }
    
    function testZesTMVijftien () {
        global $zesTMVijftien;
        $this->assertIsArray($zesTMVijftien);
        $this->assertCount(11, $zesTMVijftien);
        $this->assertContains(15, $zesTMVijftien);

    }
    
    function testSamengevoegd() {
        global $samengevoegd;
        $this->assertContains(15, $samengevoegd);
        $this->assertContains(1, $samengevoegd);
        $this->assertCount(20, $samengevoegd);
        $this->assertIsArray($samengevoegd);
    }
    
    function testFilm() {
        global $film;
        $this->assertIsArray($film);
        $this->assertNotEmpty($film['titel']);
        $this->assertNotEmpty($film['jaar']);
        $this->assertNotEmpty($film['regisseur']);
        $this->assertNotEmpty($film['hoofdrolspelers']);
        $this->assertIsArray($film['hoofdrolspelers']);
    }
}