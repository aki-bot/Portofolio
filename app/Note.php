<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    //モデルにあるメゾット8行めで指定してあるから使える
    //ノートから見て「俺はlikeをたくさん持っている」
    //likesテーブルが持っているnote_id=自分のidのこと、にあるlikesの情報を持ってきてくれる
    //いくつか投稿されているnoteから見て複数のlikesがあることをLaravelの機能では自動的に持ってきてくれる
    //select * from likes　where note_id=noteModelのidのこと
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
