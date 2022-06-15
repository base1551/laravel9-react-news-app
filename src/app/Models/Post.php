<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    use HasFactory;
    /**
     * 関連テーブル
     */
    protected $table = 'posts';

    /**
     * 複数代入可能な属性
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'body',
        'publish_flg',
        'view_counter',
        'favorite_counter',
        'delete_flg',
        'created_at',
        'updated_at'
    ];

    /**
     * ユーザーIDに紐づいた投稿リストを全て取得する
     *
     * @param int $user_id ユーザーID
     */
    public function getAllPostsByUserId(int $user_id)
    {
        return $this->where('user_id', $user_id)->with('category')->get();
    }

    /**
     * Categoryモデルとリレーション
     */
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
