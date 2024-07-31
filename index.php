<?php

use EcbExchangeRates\EcbExchangeRates;

require './vendor/autoload.php';

$ezb = new EcbExchangeRates;

// Json-Data
print $ezb->exchange_rates_json . PHP_EOL;

// Array-Data
var_dump($ezb->exchange_rates_array);

