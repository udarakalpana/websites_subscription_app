<?php

namespace App\Http\Controllers\Posts;

use App\Filter\GetPostData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\PostsStoreRequest;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(PostsStoreRequest $request, GetPostData $getPostData)
    {
        $validPost = $request->validated();

        $data = $getPostData->extractPostsData($validPost);

        Posts::create([
            'user_id' => $data['user_id'],
            'website_id' => $data['website_id'],
            'post_title' => $data['post_title'],
            'post_body' => $data['post_body'],
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Post created success!'
        ]);
    }
}
