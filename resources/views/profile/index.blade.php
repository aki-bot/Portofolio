@extends('layouts.front')
@section('title','Welcome to my portofolio')
@section('content')




            <div class="Home-wrapper" id="home">
                <section class="mast">
                    <header class="mast__header">
                            
                                <h2 class="mast__title js-spanize background-title" style="font-family: serif;">Welcome to my portofolio.</h2> 
                                <h2 class="mast__title js-spanize background-title2" style="font-family: serif;">-Daichi Akiyama-</h2>
                            <div class="col-sm-6 col-12">
                                <p class="mast__text js-spanize background-title3" style="font-family: serif;">
                                Thanks to all who have helped me so far.
And I expect the opportunity of encounters in the future.
May today be a happy day
                                </p>
                            </div>
                        
                    </header>
                </section>
            </div>
        
    


<div class="container">
    <div class="row">
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
                            <li><a class="drawer-menu-item" href="#home">Home</a></li>
                            <li><a class="drawer-menu-item" href="#about">About</a></li>
                            <li><a class="drawer-menu-item" href="#portfolio">Portfolio</a></li>
                            <li><a class="drawer-menu-item" href="#service">Service</a></li>
                            <li><a href="{{ action('NoteController@index') }}" class="drawer-menu-item">Note</a></li>
                            <li><a class="drawer-menu-item" href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <!-- ドロワーメニューの利用宣言 -->
                <script src="{{ asset('/js/front.js') }}" ></script>
            </header>
        </div>
    </div>      
</div>




{{-- <div class="conteiner" id="about"> --}}
    {{--animatedは必ず必要。次のコードでアニメーションを指定している。最後のコードで細かい指示を出している--}}
    <div class="detail">
        <h1 class="scroll-animation text-fadein contact-title service-title about-title"><span>ABOUT</span></h1>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img class="about-img img-fluid" src="/img/IMG_0979.JPG"class="backgroun-img">
        </div>

        <div class="col-md-6 col-sm-12 about-detail">
            <h2 class="about-a">Introduction</h2>
                <div class="about-p-wrapper py-3">
                    <p>秋山大地</p>
                    <p>1998年11月21日生まれ</p>
                    <p>スポーツ推薦で高校に進学</p>
                    <p>現在大学4年生</p>
                </div>
                <div class="skill-wrapper">
                    <h2 class="about-a">Skill</h2>
                        <div class="about-p-wrapper py-3">
                            <img src="https://img.icons8.com/ios-filled/50/000000/html-5.png"/>
                            <img src="https://img.icons8.com/ios/50/000000/css3.png"/>                          
                            <img src="https://img.icons8.com/ios/50/000000/sass.png"/>                      
                            <img src="https://img.icons8.com/ios/50/000000/php-logo.png"/>  
                            <img src="https://img.icons8.com/ios/50/000000/javascript.png"/> 
                            <img src="https://img.icons8.com/ios/50/000000/jquery.png"/>
                            <img src="https://img.icons8.com/ios/50/000000/git.png"/>
                        </div>
                </div>
                <div class="qualification-wrapper">
                    <h2 class="about-a">Qualification</h2>
                    <div class="about-p-wrapper py-3">
                        <p>法学検定</p>
                        <p>ファイナンシャルプランナー</p>
                        <p>ITパスポート</p>
                        <p>MicrosoftOfficeSpeciaristExcel</p>
                        <p>ビジネス法務検定</p>
                      
                    </div>
                </div>
        </div>
    </div>
</div>
</div>


<div class="portfolio" id="portfolio">
    <div class="portofoliodayo">
        <h1 class="scroll-animation text-fadein contact-title portfolio-title"><span>PORTFOLIO</span></h1>
    </div>
    <div class="container">
        <div class="row">
    <div class="col-md-6 col-sm-12">
<!-- 切り替えボタンの設定 -->
<img class="portofolio1 img-fluid" src="/img/portofolio1.png" data-toggle="modal" data-target="#exampleModalScrollable">
<h6 class="seikabutu">-制作日-2020/04/15　<span class="tag">クリック</span></h6>
<!-- モーダルの設定 -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Portfolio【No.1】</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--ここに内容を書いていく-->
        【タイトル】<br>
            SaloudsCocktails<br>
        【サイトについて】<br>
            雰囲気に合ったカクテルを探すことができるWebアプリケーション<br>
        【経緯】<br>
            私がしているアルバイトではお酒をよく提供していることから、ウイスキーやワイン、カクテルなど多くのお酒を知ることができました。<br>
            しかし来てくださるお客様の中には普段からお酒を飲む方や全く飲まれない方など人それぞれです。<br>
            そんな中、このサイトを通じて友達との時間や大切な人との特別な時間などその時に合ったお酒でもっと楽しい時間になれば良いなと思いこのサイトをつくりました。<br>
            初めて作ったWebアプリケーションで、デザイン性にはかける部分がありますが、フロントエンドではなくサーバーサイド側を実際に開発をすることで学習を進めました。<br>
        【使用言語】<br>
            PHP / HTML / CSS<br>
        【URL】<br>
            https://peaceful-wave-97097.herokuapp.com/
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
       </div>
    </div>
  </div>
</div>
</div>




<div class="col-md-6 col-sm-12">
<!-- 切り替えボタンの設定 --><!--データターゲットでどこの文を読み込むか決めている-->
<img class="portofolio2 img-fluid" src="/img/スクリーンショット 2020-05-05 0.40.42.png" data-toggle="modal" data-target="#example2ModalScrollable">
<h6 class="seikabutu">-制作日-2020/05/05　<span class="tag">クリック</span></h6>
<!-- モーダルの設定 -->
<!--idが同じだと同じ内容になってしまう-->
<div class="modal fade" id="example2ModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Portfolio[No.2]</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--ここに内容を書いていく-->
        【タイトル】<br>
            Portofolioの紹介サイト<br>
        【サイトについて】<br>
            作成したポートフォリオをまとめたWebサイト<br>
        【経緯】<br>
            PHPを使うことによって「Webアプリケーション」と「Webサイト」を作ることができます。<br>
            そのため一つ目の成果物である「Webアプリケーション」ではなく、「Webサイト」を作ることで、PHPの理解を深めていきたいと考え<br>
            開発を進めていきました。<br>
            また一つ目の成果物では、javascriptやjQueryを使うことなく文字に動的なプログラムを指示することはありませんでした。<br>
            なので、このWebサイトでは文字に動きを加えると同時に、Bootstrapの使い方を意識して開発することで、レスポンシブに関する考えを同時に知ることができました。<br>
        【使用言語】<br>
            PHP / HTML / CSS /　javescript<br>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
       </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


<div class="service-wrapper" id="service">
    <div class="container">
        <h1 class="scroll-animation text-fadein contact-title service-title"><span>SERVICE</span></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 service-detail">
                <h2 class="service-heading text-center">PHP/MySQL</h2>
                <p class="service-detail py-2">
                    サーバーサイド言語であるPHPを使ってデータベースと連結した簡単なWebサイトやサービスを作成することができます。データベースと連結することでデータの保存や保存したデータの表示などを可能にしています。
                </p>
            </div>
            <div class="col-md-4 col-sm-12 service-detail">
                <h2 class="service-heading text-center">Web制作/Desing</h2>
                <p class="service-detail py-2">
                    Webページの作成やホームページのデザインをすることができます。使用している言語は主にHTM、CSSのマークアップ言語であり、JavaScriptなどの言語を使用することで、動的なWebページ作成を可能にしています。
                </p>
            </div>
            <div class="col-md-4 col-sm-12 service-detail">
                <h2 class="service-heading text-center">Wordprees制作</h2>
                <p class="service-detail py-2">
                    Wordpreesを利用したWebサイトの構築が可能になります。掲示板やお問い合わせフォームまたブログの開設をすることができ幅広く対応できます。
                </p>
            </div>
        </div>
      </div>
</div>

<!--ユーザーがフォームに入れた情報をactionに指定されているアドレスに送信する.-->
<form action="{{ action('ContactController@create') }}" method="post" enctype="multipart/form-data">
    <div class="contact-wrapper" id="contact" name="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="scroll-animation text-fadein contact-title"><span>CONTACT</span></h1>
                </div>
            </div>
            {{-- @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
            @endif                 --}}
            <div class="common-flex aline-center form-group">
                <div class="col-4 form-essential seattle-form__col-label">
                    <label for="company-name" class="col-form-label contact-this">名前
                        <span class="tag required" style="margin: 0;">必須</span></label>
                </div>
            <div class="col-8">
              {{--value="{{ old('name') }}" --}}
                <span class="relative"><br>
                <span class="wpcf7-form-control-wrap company-name"><input type="text" required name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control seattle-form__input" aria-required="true" aria-invalid="false"></span><br>
                </span>
            </div>
                <div class="col-4 form-essential seattle-form__col-label">
                    <label for="text" class="col-form-label contact-this">メールアドレス
                        <span class="tag required" style="margin: 0;">必須</span></label>
                </div>
                <div class="col-8">
                    <span class="relative"><br>
                        {{--old関数についてはバリデーションをする際に他の項目でバリデーションが合った時に正常な内容を保存しておくために使う--}}
                        <span class="wpcf7-form-control-wrap email"><input type="text" required name="mail" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control seattle-form__input" aria-required="true" aria-invalid="false"></span><br>
                    </span>
                </div>
                <div class="col-4 form-essential seattle-form__col-label">
                    <label for="phone-number" class="col-form-label contact-this">電話番号</label>
                </div>
                <div class="col-8">
                    <span class="relative"><br>
                        <span class="wpcf7-form-control-wrap phone-number"><input type="text" name="phon" size="40" class="wpcf7-form-control wpcf7-text form-control seattle-form__input" aria-invalid="false"></span><br>
                    </span>
                </div>
                <div class="col-4 form-essential seattle-form__col-label label-align-top">
                    <label for="textarea" class="col-form-label contact-this">お問い合わせ内容
                        <span class="tag">必須</span>
                    </label>
                </div>
                <div class="col-8">
                  {{--requiredで仮に入力データがなければ入力してくださいと指示を出すことができる--}}
                    <span class="relative inquiry-type"><br>{{--wpcf7-form-control特に変わらず--}}{{--wpcf7-textarea特に変わらず--}}{{--form-controlこれでレイアウトがきれいなる--}}{{-- aria-invalid="false"変化なし--}}{{--inquiry-content変化なし--}}
                        <span class="wpcf7-form-control-wrap"><textarea name="body" required cols="40" rows="10" class="form-control"></textarea></span><br>
                    </span>
                </div>
                        {{ csrf_field() }}
                <div class="col-8">
                    {{-- <a class="btn btn-primary" role="button">送信</a> --}}
                    <input type="submit" class="btn btn-primary">
                </div>
</form>
<footer>
    <div class="container">
      <div class="row">
    <div class="col-12 text-center">
    <hr color="#c0c0c0">
  </div>
  </div>
  </div>
    <div class="container text-center">
      <p class="footer-title">＠Daichi Akiyama</p>
    </div>
  </footer>
@endsection