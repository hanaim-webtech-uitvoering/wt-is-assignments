<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require('src/assignment.php');

final class AssignmentTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertSame(
            [0, 1, 2,3 ],
            createArray()
        );
    }
}