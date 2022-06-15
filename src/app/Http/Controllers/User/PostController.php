<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    /**
     * 投稿リスト
     */
    public function index(int $id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // ユーザーIDと一致する投稿データを取得
        $posts = $this->post->getAllPostsByUserId($id);
        return view('user.list.index', compact('posts'));
    }
}
