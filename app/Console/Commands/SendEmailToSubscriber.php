<?php

namespace App\Console\Commands;

use App\Filter\GetMailData;
use App\Models\WebsitesSubscribe;
use App\Services\SendMailService;
use Illuminate\Console\Command;

class SendEmailToSubscriber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to subscribe users';

    /**
     * Execute the console command.
     */
    public function handle(SendMailService $sendMailService, GetMailData $getMailData)
    {
        $websiteSubscribeData = WebsitesSubscribe::all();

        foreach ($websiteSubscribeData as $subscribeData) {
            $SubscribeUserData = $getMailData->subscribedUsersData($subscribeData);
            $SubscribePostData = $getMailData->postForSubscribeUsers($subscribeData);

            if ($SubscribeUserData && $SubscribePostData) {
                $response = $sendMailService::sendEmail($SubscribeUserData, $SubscribePostData);
                $responseMessage = $response->getData('success_message');
                $this->info($responseMessage['success_message']);
            }
        }
    }
}
