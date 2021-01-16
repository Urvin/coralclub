<?php


namespace urvin\coralclub;


class FingersHelper
{
    protected const FINGERS_NUM = 8;
    protected const FINGERS_HALF_NUM = 4;

    /**
     * Returns finger index (1-5) for incoming number
     * @param int $number
     * @return int
     */
    public static function getFingerIndex(int $number): int
    {
        return static::FINGERS_HALF_NUM - abs(($number - 1) % static::FINGERS_NUM - static::FINGERS_HALF_NUM) + 1;
    }
}