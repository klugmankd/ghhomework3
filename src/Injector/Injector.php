<?php

namespace Vendor\Engine\Injector;

use Vendor\Engine\Engine as Eng;
use Vendor\Engine\FuelSupply;

class Injector extends Eng implements FuelSupply
{

    /**
     * @param string $number
     * @param string $model
     * @param int $year
     * @param int $consumption
     * @param int $maxPressure
     * @param int $maxTemperature
     * @param float $maxVolume
     * @param string $fuel
     */
    public function __construct($number, $model, $year, $consumption,
                                $maxPressure, $maxTemperature, $maxVolume, $fuel)
    {
        $this->setNumber($number);
        $this->setModel($model);
        $this->setYear($year);
        $this->setConsumption($consumption);
        $this->setMaxPressure($maxPressure);
        $this->setMaxTemperature($maxTemperature);
        $this->setMaxVolume($maxVolume);
        $properties = $this->fuelSupplyStart($fuel);
        if ($properties['fuelSupplyResult'] && !$this->engineCrash($properties['pressure'],
                $properties['temperature'],
                $properties['volume'])) {
            $this->engineMove($fuel);
        }
    }

    public function __destruct()
    {
        $this->engineMove($this->fuelSupplyStop());
    }
    /**
     * @param string $fuel
     * @return array
     */
    public function fuelSupplyStart($fuel)
    {
        $pressure = 0;
        $temperature = 0;
        $volume = 0;
        if ($fuel == 'Petrol') {
            // injector fuel reprocessing process
            $params = array(
                'fuelSupplyResult' => TRUE,
                'pressure' => $pressure,
                'temperature' => $temperature,
                'volume' => $volume);
            return $params;
        } elseif ($fuel == 'Gas') {
            // injector fuel reprocessing process
            $params = array(
                'fuelSupplyResult' => TRUE,
                'pressure' => $pressure,
                'temperature' => $temperature,
                'volume' => $volume);
        } else {
            $params = array(
                'fuelSupplyResult' => FALSE,
                'pressure' => NULL,
                'temperature' => NULL,
                'volume' => NULL);;
        }
        return $params;
    }

    /**
     * @return bool
     */
    public function fuelSupplyStop()
    {
        // fuel supply stop process
        return false;
    }
}