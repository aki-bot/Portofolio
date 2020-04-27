<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Note;


class NoteController extends Controller
{
    public function add(){
        return view('admin.note.create');
    }

    public function create(Request $request)
    {
    $this->validate($request, Note::$rules);

    $notes = new Note;
    $form = $request->all();

    // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
    if (isset($form['image'])) {
      $path = $request->file('image')->store('public/image');
      $notes->image_path = basename($path);
    } else {
        $notes->image_path = null;
    }

    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    // フォームから送信されてきたimageを削除する
    unset($form['image']);

    // データベースに保存する
    $notes->fill($form);
    $notes->save();

    return redirect('admin/note/add');
}

public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Note::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Note::all();
      }
      return view('admin.note.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $notes = Note::find($request->id);
      if (empty($notes)) {
        abort(404);    
      }
      return view('admin.note.edit', ['note_form' => $notes]);
  }

  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Note::$rules);
      // News Modelからデータを取得する
      $notes = Note::find($request->id);
      // 送信されてきたフォームデータを格納する
      $note_form = $request->all();
      if (isset($note_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $notes->image_path = basename($path);
        unset($note_form['image']);
      } elseif (0 == strcmp($request->remove, 'true')) {
        $notes->image_path = null;
      }
      unset($note_form['_token']);
      unset($note_form['remove']);

      // 該当するデータを上書きして保存する
      $notes->fill($note_form)->save();

      return redirect('admin/note');
    }

      public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $notes = Note::find($request->id);
      // 削除する
      $notes->delete();
      return redirect('admin/note');
  } 
      

}