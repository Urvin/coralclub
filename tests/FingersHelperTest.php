<?php

namespace urvin\coralclub\tests;

use PHPUnit\Framework\TestCase;
use urvin\coralclub\FingersHelper;

class FingersHelperTest extends TestCase
{
    public function numberFingerIndexAssertions(): array
    {
        /** number => finger */
        $assertions = array(
            1 => 1,
            4 => 4,
            5 => 5,
            6 => 4,
            8 => 2,
            9 => 1,
            10 => 2,
            11 => 3,
            12 => 4,
            13 => 5,
            14 => 4,
            15 => 3,
            16 => 2,
            17 => 1,
            18 => 2,
            19 => 3,
            20 => 4,
            21 => 5,
            22 => 4,
        );

        return array_map(
            static function ($number, $finger) {
                return [
                    $number,
                    $finger
                ];
            },
            array_keys($assertions),
            $assertions
        );
    }

    /**
     * @dataProvider numberFingerIndexAssertions
     * @param int $index
     * @param int $finger
     */
    public function testGetFingerIndex(int $index, int $finger): void
    {
        $this->assertEquals($finger, FingersHelper::getFingerIndex($index));
    }
}