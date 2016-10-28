<?php

namespace Vendor\Engine;

class Engine
{

    /**
     * @var string $number
     * @var string $model
     * @var int $year
     * @var int $consumption
     * @var int $maxPressure
     * @var int $maxTemperature
     * @var float $maxVolume
     */
    protected $number;
    protected $model;
    protected $year;
    protected $consumption;
    protected $maxTemperature;
    protected $maxVolume;
    protected $maxPressure;

    /**
     * @param bool $fuelSupplyResult
     * @return bool
     */
    public function engineMove($fuelSupplyResult)
    {
        $isEngineRun = FALSE;
        if ($fuelSupplyResult) {
            return $isEngineRun;
        } elseif (!$fuelSupplyResult) {
            return !$isEngineRun;
        }
    }

    /**
     * @param int $pressure
     * @param int $temperature
     * @param int $volume
     * @return bool
     */
    public function engineCrash($pressure, $temperature, $volume)
    {
        $isEngineCrash = FALSE;
        if ($pressure > $this->getMaxPressure() ||
            $temperature > $this->getMaxTemperature() ||
            $volume > $this->getMaxVolume()) {
            $isEngineCrash = TRUE;
        }
        return $isEngineCrash;
    }

    /**
     * @return int
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getMaxPressure()
    {
        return $this->maxPressure;
    }

    /**
     * @return int
     */
    public function getMaxTemperature()
    {
        return $this->maxTemperature;
    }

    /**
     * @return int
     */
    public function getMaxVolume()
    {
        return $this->maxVolume;
    }

    /**
     * @param int $consumption
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param int $maxPressure
     */
    public function setMaxPressure($maxPressure)
    {
        $this->maxPressure = $maxPressure;
    }

    /**
     * @param int $maxTemperature
     */
    public function setMaxTemperature($maxTemperature)
    {
        $this->maxTemperature = $maxTemperature;
    }

    /**
     * @param float $maxVolume
     */
    public function setMaxVolume($maxVolume)
    {
        $this->maxVolume = $maxVolume;
    }
}