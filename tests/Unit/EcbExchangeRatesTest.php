<?php 

use EcbExchangeRates\EcbExchangeRates;


it('has exchange rate values', function () {

    $ezb_rates = new EcbExchangeRates;
    $this->assertJson($ezb_rates->exchange_rates_json);

});