<?php
//MVCのMに該当するファイルのことで、Controllerと連携してデータベースにファイルを保存したり、表示したりする
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //idのやりとりだからバリデーションとは関係ない
    protected $guarded = array('id');

    // // 以下を追記
    // public static $rules = array(
    //     'name' => 'required',
    //     'mail' => 'required',
    //     'body' => 'required',
    // );
}
