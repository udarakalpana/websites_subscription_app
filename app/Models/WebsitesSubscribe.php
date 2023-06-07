<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitesSubscribe extends Model
{
    use HasFactory;

    protected $table = 'websites_subscribe';

    protected $fillable = [
        'user_id',
        'website_id',
        'website_name',
    ];
}
