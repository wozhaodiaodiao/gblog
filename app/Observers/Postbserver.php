<?php

namespace App\Observers;

use App\Models\Post;

class Postbserver
{
    /**
     * 保存文章时提取文章描述
     *
     * @param  Post   $post
     *
     * @return void
     */
    public function saving(Post $post)
    {
        $post->excerpt = make_excerpt($post->content);
    }
}
