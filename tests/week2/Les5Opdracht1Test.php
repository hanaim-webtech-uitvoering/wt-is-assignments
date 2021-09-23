<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week2/Les5Opdracht1_PrintUitArray.php');

final class Les5Opdracht1Test extends TestCase
{
    function testFilmTabel () {
        $film = [
            'title' => 'Black Panther',
            'year' => 2018,
            'director' => 'Ryan Coogler',
            'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
            'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
          ];
        $html = "<table>
            <tr>
            <td>Black Panther</td>
            <td>2018</td>
            <td>Ryan Coogler</td>
            <td>Chadwick Boseman, Michael B. Jordan</td>
            </tr>
        </table>";

        // replace all variations of spaces
        $expected = preg_replace('/\s+/', '', $html);
        $result = filmTabel($film);
        $result = preg_replace('/\s+/', '', $result);
        $this->assertEquals($expected, $result);
    }

    function testFilmPlaatje () {
        $film = [
            'title' => 'Black Panther',
            'year' => 2018,
            'director' => 'Ryan Coogler',
            'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
            'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
          ];
        $result = filmPlaatje($film);
        $expected = "<img src=\"https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg\" alt=\"Poster\">";
        $this->assertEquals($expected, $result);
    }
}