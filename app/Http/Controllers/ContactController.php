<?php
//ここのコメントアウトを解除すればバリデーションができるコードになっている
//一枚のページにもし内容がなければそのページに止まる指示をするにはjqueryで「何もない場合は指定のページに止まる」ことを指示する
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
  
  
    public function create(Request $request)
  {

      // // 以下を追記
      // // Varidationを行う
      // // $this->validate($request, Contact::$rules);

      $contact = new Contact;
      $form = $request->all();
      // \Debugbar::info($form);
      // dd($form);
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $contact->fill($form);
      $contact->save();
      //一ページのWebページにお問い合わせフォームをつける時には#をつけることによってレダイレクト先を変えることができる
      //スラッシュいらない
      //バリデーションが正常に動作した時の行先
      return redirect('profile/index');
      //('profile/index?contact=contact');
      //?はパラメーターの追加
    
  }
}