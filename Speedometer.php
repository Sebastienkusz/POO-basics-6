<?php


class Speedometer
{
    const MILEINKM = 0.621;

    public function convertKmToMiles($distance) : float
    {
        return $distance * self::MILEINKM;
    }

    public function convertMilesToKm($distance) : float
    {
        return $distance / self::MILEINKM;
    }
}