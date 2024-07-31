# ecb-exchange-rates
PHP class for the implementation, fetching and Json parsing of the daily exchange rates to EUR published by the ECB. The reference rates are usually updated once at around 16:00 CET every working day, except on target closing days. For further information see: <a href="https://www.ecb.europa.eu/stats/eurofxref">https://www.ecb.europa.eu/stats/eurofxref</a>

## Composer
`composer require sw-ffm/ecb-exchange-rates`

## Usage
```
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

```




