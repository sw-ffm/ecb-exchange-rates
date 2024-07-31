<?php 

$GLOBALS['ezb_rates'] = new EcbExchangeRates\EcbExchangeRates;


it('Data array has exchange rate values', function () {
    
    $this->assertIsArray($GLOBALS['ezb_rates']->exchange_rates_array);
    
});

it('Exchange rate data contain US-Dollar rate', function () {
    
    $this->assertArrayHasKey('USD', $GLOBALS['ezb_rates']->exchange_rates_array);
    
});

it('JSON data has exchange rate values', function () {

    $this->assertJson($GLOBALS['ezb_rates']->exchange_rates_json);

});