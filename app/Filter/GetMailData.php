<?php

namespace App\Filter;

use App\Models\User;
use App\Models\Posts;

class GetMailData
{
    public function subscribedUsersData($subscribeData)
    {
        return User::find($subscribeData->user_id);
    }

    public function postForSubscribeUsers($subscribeData)
    {
        return Posts::where('user_id', $subscribeData->user_id)->get();
    }
}
