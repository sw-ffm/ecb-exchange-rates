<?php

use EcbExchangeRates\EcbExchangeRates;

require './vendor/autoload.php';

$ezb_rates = new EcbExchangeRates;

// Json-Data
echo $ezb_rates->exchange_rates_json . PHP_EOL;

// Array-Data
var_dump($ezb_rates->exchange_rates_array);

// Cache Data
/* $caching_file = __DIR__ . '/cache/DailyExchangeRates.json';
if($caching_file){
    if($ezb_rates->cacheData($caching_file)){
        echo "File saved";
    }
}  */
