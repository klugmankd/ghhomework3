<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $carburetor = new Vendor\Engine\Carburetor('HB1234F', 'Custom', 2001, 6, 8, 300, 1.3, 'Petrol');
    $injector = new Vendor\Engine\Injector('FG4325L', 'Custom', 2013, 8, 10, 250, 1.9, 'Gas');