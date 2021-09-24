<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/week2/Les5Opdracht2_SubsetArray.php');

final class Les5Opdracht2Test extends TestCase
{

    function setUp():void {
        $this->markTestSkipped('Nog niet bezig met deze les.');
    }

    function testFilmPlaatje () {
        
        $films = [
            [
              'title' => 'A Wrinkle In Time',
              'year' => 2018,
              'director' => 'Ava DuVernay',
              'stars' => ['Storm Reid', 'Oprah Winfrey'],
              'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjQ5MTI3MV5BMl5BanBnXkFtZTgwMjQ2MTAyNDM@._V1_UX182_CR0,0,182,268_AL_.jpg'
            ],
            [
              'title' => 'Black Panther',
              'year' => 2018,
              'director' => 'Ryan Coogler',
              'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
              'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
            ],
            [
              'title' => 'Tenet',
              'year' => 2020,
              'director' => 'Christopher Nolan',
              'stars' => ['John David Washington', 'Elizabeth Decki'],
              'imageURL' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg'
            ],
            [
              'title' => 'Us',
              'year' => 2018,
              'director' => 'Jordan Peele',
              'stars' => ['Lupita Nyong\'o', 'Winston Duke'],
              'imageURL' => 'https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg'
            ]
        ];

        $expected = [
            [
            'title' => 'Tenet',
            'year' => 2020,
            'director' => 'Christopher Nolan',
            'stars' => ['John David Washington', 'Elizabeth Decki'],
            'imageURL' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg'
          ],
          [
            'title' => 'Us',
            'year' => 2018,
            'director' => 'Jordan Peele',
            'stars' => ['Lupita Nyong\'o', 'Winston Duke'],
            'imageURL' => 'https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg'
          ]
        ];
        global $subset_films;
        $result = $subset_films;
        $this->assertEquals($expected, $result);
    }
}