# Assignments 

- [Assignments](#assignments)
  - [Waar ga je aan het werk?](#waar-ga-je-aan-het-werk)
  - [Hoe ga je aan het werk?](#hoe-ga-je-aan-het-werk)
  - [Werken aan opdrachten na Les 2](#werken-aan-opdrachten-na-les-2)
  - [Wat zie ik?](#wat-zie-ik)
  - [Vragen?](#vragen)

Deze repository bevat de opdrachten die je moet doen voor WTIS.

## Waar ga je aan het werk?

De opdrachten leven in de `src folder. Dus bij week1 ziet dat er als volgt uit:

```bash
├── src
│   ├── week1
│   │   ├── Les2Opdracht1_Variabelen.php
│   │   ├── Les2Opdracht2_LengteString.php
│   │   └── Les2Opdracht3_Substr.php
```

## Hoe ga je aan het werk?

Elke opdracht heeft een eigen bestandje waarin je kunt werken. Elke opdracht heeft ook een bijbehorende automatische test. Daar hoef je normaliter maar 1 ding mee te doen.

Elke keer als je commit en je werk pusht draaien deze tests om te kijken of het gelukt is.

Je kunt die test ook zelf draaien door op Ctrl+Shift+B te drukken (Cmd+Shift+B op macOS). 

## Werken aan opdrachten na Les 2

In alle tests na die van Les 2 staat namelijk dat de test wordt geskipped: `$this->markTestSkipped('Nog niet bezig met deze les.');` Dit moet je even uit zetten.

Dus bijvoorbeeld bij de test van Les5 ziet dat er zo uit:

```php
final class Les5Opdracht1Test extends TestCase
{
    function testFilmTabel () {

        $this->markTestSkipped('Nog niet bezig met deze les.');

        $film = [
            'title' => 'Black Panther',
```

En dat moet je dan aanpassen door een comment er van te maken of de regel weg te halen.

```php
final class Les5Opdracht1Test extends TestCase
{
    function testFilmTabel () {

        // $this->markTestSkipped('Nog niet bezig met deze les.');

        $film = [
            'title' => 'Black Panther',
```

## Wat zie ik?

Het resultaat van het draaien van een test ziet er als volgt uit:

```bash
PHPUnit 9.5.9 by Sebastian Bergmann and contributors.

Warning:       Your XML configuration validates against a deprecated schema.
Suggestion:    Migrate your XML configuration using "--migrate-configuration"!

EFEFEFEFEFFFSS                                                    14 / 14 (100%)

Time: 00:00.050, Memory: 20.00 MB

There were 5 errors:

1) Les2Opdracht1Test::testAdres
Error: Geen adres variabele

/app/tests/week1/Les2Opdracht1Test.php:14

2) Les2Opdracht1Test::testPostcode
Error: Geen postcode variabele

/app/tests/week1/Les2Opdracht1Test.php:29

3) Les2Opdracht1Test::testGeslacht
Error: Geen geslacht variabele

/app/tests/week1/Les2Opdracht1Test.php:43

4) Les2Opdracht1Test::testIsStudent
Error: Geen isStudent variabele

/app/tests/week1/Les2Opdracht1Test.php:57

5) Les2Opdracht1Test::testLeeftijd
Error: Geen leeftijd variabele

/app/tests/week1/Les2Opdracht1Test.php:71

--

There were 7 failures:

1) Les2Opdracht1Test::testAdresIsString
Failed asserting that null is of type "string".

/app/tests/week1/Les2Opdracht1Test.php:21

2) Les2Opdracht1Test::testPostcodeIsString
Failed asserting that null is of type "string".

/app/tests/week1/Les2Opdracht1Test.php:35

3) Les2Opdracht1Test::testGeslachtIsString
Failed asserting that null is of type "string".

/app/tests/week1/Les2Opdracht1Test.php:49

4) Les2Opdracht1Test::testIsStudentIsBoolean
Failed asserting that null is of type "bool".

/app/tests/week1/Les2Opdracht1Test.php:63

5) Les2Opdracht1Test::testLeeftijdIsBoolean
Failed asserting that null is of type "int".

/app/tests/week1/Les2Opdracht1Test.php:77

6) Les2Opdracht2Test::testPrintOutStringAndLength
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'<h1>Mijn input: <em>10</em></h1>'
+''

7) Les2Opdracht3Test::testLast3Characters
Failed asserting that 'dam' matches expected null.

/app/tests/week1/Les2Opdracht3Test.php:9

ERRORS!
Tests: 14, Assertions: 7, Errors: 5, Failures: 7, Skipped: 2.
```

Eigenlijk wordt hier van elke opdracht aangegeven wat er mist. Kijk bijvoorbeeld naar de volgende 2 regels:

```bash
1) Les2Opdracht1Test::testAdres
Error: Geen adres variabele
```

```bash
1) Les2Opdracht1Test::testAdresIsString
Failed asserting that null is of type "string".
```

Die geven aan dat er:

1. geen adres variabele bestaat en,
2. dat null geen string is (null geeft aan dat er niets gedefinieerd is).

Als je deze opdracht gedaan hebt zal dat er niet meer staan en zijn de resultaten bijvoorbeeld als volgt:

```bash
PHPUnit 9.5.9 by Sebastian Bergmann and contributors.

Warning:       Your XML configuration validates against a deprecated schema.
Suggestion:    Migrate your XML configuration using "--migrate-configuration"!

..........FFSS                                                    14 / 14 (100%)

Time: 00:00.047, Memory: 20.00 MB

There were 2 failures:

1) Les2Opdracht2Test::testPrintOutStringAndLength
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'<h1>Mijn input: <em>10</em></h1>'
+''

2) Les2Opdracht3Test::testLast3Characters
Failed asserting that 'dam' matches expected null.

/app/tests/week1/Les2Opdracht3Test.php:9

FAILURES!
Tests: 14, Assertions: 12, Failures: 2, Skipped: 2.
```

Nog maar 2 tests die gefixt moeten worden!

## Vragen?

Mocht je hier vragen over hebben of kom je er niet uit. Neem even contact op met de studentenassistenten.