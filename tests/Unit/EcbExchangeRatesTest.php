<?php 

use EcbExchangeRates\EcbExchangeRates;
$GLOBALS['ezb_rates'] = new EcbExchangeRates;
    

it('json data has exchange rate values', function () {

     $this->assertJson($GLOBALS['ezb_rates']->exchange_rates_json);

});

it('array has exchange rate values', function () {

    $this->assertIsArray($GLOBALS['ezb_rates']->exchange_rates_array);

});

it('exchange rate data contain USD data', function () {

    $this->assertArrayHasKey('USD', $GLOBALS['ezb_rates']->exchange_rates_array);

});