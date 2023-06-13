<?php

namespace App\Services;

use App\Mail\PostsMail;
use Illuminate\Support\Facades\Mail;
use Exception;

class SendMailService
{
    public static function sendEmail($SubscribeUserData, $SubscribePostData)
    {
        try {
            Mail::to('kalpanaudara058@gmail.com')->send(new PostsMail($SubscribePostData));
            return response()->json([
                'success_message' => 'email send success!'
            ]);
        } catch (Exception $th) {
            return response()->json($th);
        }
    }
}
