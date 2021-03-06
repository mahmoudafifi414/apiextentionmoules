<?php

namespace ClientConsumer;

use API\ApiInterface;

class ClientController implements Clientnterface
{
    private $apiSpecified;

    //(open/close) principle so we can add more API and client code not affected
    //also (dependency Inversion) principle so i do not depend on low module but abstraction
    public function __construct(ApiInterface $api)
    {
        $this->apiSpecified = $api;
    }

    public function createShipment(): string
    {
        /*this is function for example to show how can call the functions with SOLID to not dependent on
        low level modules
        */
        //also open close principle here
        return $this->apiSpecified->createShipment();
    }

    public function trackShipment(): string
    {
        /*this is function for example to show how can call the functions with SOLID to not dependent on
        low level modules
        */
        //also open close principle here
        return $this->apiSpecified->trackShipment();
    }
}


