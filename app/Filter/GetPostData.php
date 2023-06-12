<?php

namespace App\Filter;

class GetPostData
{
    public function extractPostsData($post)
    {
        $postData = $post['post'];
        return $postData[0];
    }
}
