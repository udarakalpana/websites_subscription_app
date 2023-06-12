<?php


namespace App\Filter;

class GetSubscribeData
{

    public function extractSubscribeData($subscribe)
    {
        $subscribeData = $subscribe['subscribe'];
        return $subscribeData[0];
    }
}
