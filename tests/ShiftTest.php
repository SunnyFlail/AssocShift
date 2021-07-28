<?php

use PHPUnit\Framework\TestCase;

class ShiftTest extends TestCase
{

    public function arrayProvider()
    {
        return [
            'Emptying an array' => [
                'a', ['a' => 'b'], 'b', 0
            ],
            'Getting from an array' => [
                'a', ['a'=>1, 'b'=>2, 'c'=>3], 1, 2
            ]
        ];
    }

    /**
     * @dataProvider arrayProvider
     */
    public function testShifting(string $key, array $array, mixed $expectedValue, int $expectedLength)
    {
        $value = array_assoc_shift($key, $array);
        $this->assertEquals(
            $expectedValue,
            $value,
            "Doesn't shift proper variable"
        );
        $length = count($array);
        $this->assertEquals(
            $expectedLength,
            $length,
            "Doesn't update array length"
        );
    }

}