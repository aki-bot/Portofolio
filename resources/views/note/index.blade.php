@extends('layouts.front')
@section('title','My Note')
@section('content')

<div class="drawer drawer--right">
    <header role="banner">
        <!-- ハンバーガーボタン -->
        <button type="button" class="drawer-toggle drawer-hamburger">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
        <!-- ナビゲーションの中身 -->
        <nav class="drawer-nav" role="navigation">
          <ul class="drawer-menu">
            <li class="drawer-brand">Daichi Akiyama</li>
            <li><a href="{{ action('ProfileController@index') }}" class="drawer-menu-item">Home</a></li>
            <li><a href="{{ action('NoteController@index') }}" class="drawer-menu-item">Note</a></li>
          </ul>
        </nav>
    </header>
</div>
<main role="main">
    <!-- Page content -->
{{-- <h1　class="">戻らない１日をもっと大切に</h1> --}}
</main>


<div class="container">
    <hr color="#c0c0c0">
    @if (!is_null($headline))
        <div class="row">
            <div class="headline col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="caption mx-auto">
                            <div class="image">
                                @if ($headline->image_path)
                                    <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                @endif
                            </div>
                            <div class="title p-2">
                                <h1>{{ str_limit($headline->title, 70) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{--formタグには①actionで実際にどこに保存して次のリンク先はどうするのかを指定②methodでgetかpostかを指定（一緒にURLを送りたくないのでここはほぼpost③enctypeは一般的なフォームでは特には指定しない。使う時にはデータをURLエンコードして送信）--}}
                        <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        <form action="{{ action('LikesController@create') }}" method="post" enctype="multipart/form-data">
                            {{--ここでnoteのIDを渡している--}}
                            <input type="hidden" name="note_id" value="{{ $headline->id }}">
                            <button class="border-0 bg-transparent"><i class="far fa-heart"></i></button>
                            {{--countで$feadlineにある--}}
                            {{  count($headline->likes) }}
                            
                            @csrf
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    @endif


    <hr color="#c0c0c0">    
    {{-- <div class="row"> --}}
        <div class="posts col-md-8 mx-auto mt-3">
            @foreach($posts as $post)
                <div class="post">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ $post->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="title">
                                {{ str_limit($post->title, 150) }}
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($post->body, 1500) }}
                                <form action="{{ action('LikesController@create') }}" method="post" enctype="multipart/form-data">
                                    {{--ここでnoteのIDを渡している--}}
                                    <input type="hidden" name="note_id" value="{{ $post->id }}">
                                    <button class="border-0 bg-transparent"><i class="far fa-heart"></i></button>
                                    {{  count($post->likes) }}
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <div class="image col-md-6 text-right mt-4">
                            @if ($post->image_path)
                                <img src="{{ asset('storage/image/' . $post->image_path) }}">
                            @endif
                        </div>
                    </div>
                </div>
                <hr color="#c0c0c0">
            @endforeach
        </div>
    </div>
</div>
<footer>
    <div class="container text-center">
      <p class="footer-title">＠Daichi Akiyama</p>
    </div>
  </footer>
@endsection

{{--scriptを書く--}}
@section('js')
<!-- ドロワーメニューの利用宣言 -->
    <script>
    $(document).ready(function() {
    $('.drawer').drawer();
    });
    </script>
@endsection