<?php 

declare(strict_types=1);

namespace EcbExchangeRates;

class EcbExchangeRates 
{

    public $exchange_rates_json = null;

    public $exchange_rates_array = null;

    private $exchange_rates_url = "https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";

    
    public function __construct()
    {
        $this->fetchExchangeRatesFromECB();

    }

    public function fetchExchangeRatesFromECB(): void
    {

        $stream = file_get_contents( $this->exchange_rates_url );

        $this->exchange_rates_array = $this->extractExchangeRates($stream);

        if($this->exchange_rates_array){

            $this->exchange_rates_array['EUR'] = '1';
            $this->exchange_rates_array['data_timestamp'] = $this->extractExchangeRatesTimestamp($stream);
            $this->exchange_rates_array['system_timestamp'] = date("Y-m-d");

        }

        $this->exchange_rates_json = json_encode($this->exchange_rates_array);

    }
    
    private function extractExchangeRatesTimestamp(string $rates): string|bool
    {
        $regexp = "/^.*<.*time=\'([0-9\-]+)\'.*>$/m";

        if(preg_match($regexp, $rates, $matches)){

            return $matches[1];

        }

        return false;

    }

    private function extractExchangeRates(string $rates): array|bool
    {
        $regexp = "/^.*<.*\'([A-Z]{3})\'.*\'([0-9\.]+)\'.*\/>$/m";
        $returnArr = [];
        $i=0;

        if(preg_match_all($regexp, $rates, $matches)){

            foreach($matches[1] as $currency){

                $returnArr[$currency] = $matches[2][$i++];

            }

            return $returnArr;

        }

        return false;

    }

}