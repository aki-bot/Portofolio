@extends('layouts.admin')
@section('title', 'お問い合わせの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お問い合わせ一覧</h2>
        </div>
        <div class="row">
            
            {{-- <div class="col-md-8">
                <form action="{{ action('Admin\ContactController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div> --}}
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="15%">名前</th>
                                <th width="20%">メールアドレス</th>
                                <th width="20%">電話番号</th>
                                <th width="50%">内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $contact)
                                <tr>
                                    <th>{{ $contact->id }}</th>
                                    <td>{{ str_limit($contact->name, 100) }}</td>
                                    <td>{{ str_limit($contact->mail, 100) }}</td>
                                    <td>{{ str_limit($contact->phon, 100) }}</td>
                                    <td>{{ str_limit($contact->body, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection