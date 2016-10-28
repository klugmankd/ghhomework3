<?php

namespace Vendor\Engine;


interface FuelSupply
{
    /**
     * @param string $fuel
     * @return array
     */
    public function fuelSupplyStart($fuel);
    
    /**
     * @return bool
     */
    public function fuelSupplyStop();
}