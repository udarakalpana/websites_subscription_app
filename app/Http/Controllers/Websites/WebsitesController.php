<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use App\Models\Websites;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    public function show()
    {
        $websites =  Websites::all();
        return response()->json([
            'websites' => $websites
        ]);
    }
}
