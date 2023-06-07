<?php


namespace App\Filter;

class GetSubscribeData
{

    public function extractSubscribeData($subscribe)
    {
        $subscribeData = $subscribe['subscribe'];
        $data =  $subscribeData[0];

        return $data;
    }
}
