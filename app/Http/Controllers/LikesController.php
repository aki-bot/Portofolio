<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
//ログインしていればこのAuthが必要になる
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    //5行目で始まるRequestが型の名前（これの変数が$requestということ）
    public function create(Request $request){

        $like = new Like;

        $form = $request->all();
        // \Debugbar::info($form);
        // dd($form);
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // データベースに保存する
        $like->fill($form);
        $like->save();
        //一ページのWebページにお問い合わせフォームをつ
        //指定するviewがなければredilect
        return redirect('note/index');
    }
}
