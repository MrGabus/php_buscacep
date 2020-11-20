<?php

namespace  gabri\php_buscacep;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipcode(string $zipCode): array{
        $zipcode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");
        
        return (array) json_decode($get);
    }
}