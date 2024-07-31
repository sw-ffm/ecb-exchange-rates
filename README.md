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

## Data structure
```
{
  "USD": "1.0828",
  "JPY": "162.76",
  "BGN": "1.9558",
  "CZK": "25.457",
  "DKK": "7.4621",
  "GBP": "0.84380",
  "HUF": "395.78",
  "PLN": "4.2908",
  "RON": "4.9749",
  "SEK": "11.6125",
  "CHF": "0.9533",
  "ISK": "149.90",
  "NOK": "11.8175",
  "TRY": "35.9085",
  "AUD": "1.6635",
  "BRL": "6.0874",
  "CAD": "1.4977",
  "CNY": "7.8194",
  "HKD": "8.4589",
  "IDR": "17634.43",
  "ILS": "4.0822",
  "INR": "90.6250",
  "KRW": "1485.96",
  "MXN": "20.3317",
  "MYR": "4.9749",
  "NZD": "1.8289",
  "PHP": "63.218",
  "SGD": "1.4491",
  "THB": "38.629",
  "ZAR": "19.7400",
  "EUR": "1",
  "data_timestamp": "2024-07-31",
  "system_timestamp": "2024-07-31"
}
```


