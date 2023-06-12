<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use App\Http\Requests\Websites\WebsitesSubscribeRequest;
use App\Models\WebsitesSubscribe;
use Illuminate\Http\JsonResponse;
use App\Filter\GetSubscribeData;

class WebsitesSubscribeController extends Controller
{
    public function subscribe(WebsitesSubscribeRequest $request, GetSubscribeData $getSubscribeData): JsonResponse
    {
        $validSubscribe = $request->validated();

        $data = $getSubscribeData->extractSubscribeData($validSubscribe);

        WebsitesSubscribe::create([
            'user_id' => $data['user_id'],
            'website_id' => $data['website_id'],
            'website_name' => $data['website_name'],
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'subscribed'
        ]);
    }
}
