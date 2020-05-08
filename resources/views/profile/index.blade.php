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
                            <li><a class="drawer-menu-item" href="#contact">Contact</a></li>
                            <hr color="#c0c0c0" width="30%">
                            <li><a href="{{ action('NoteController@index') }}" class="drawer-menu-item">Note</a></li>
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
    <div class="detail" id="about">
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
<img class="portofolio1 img-fluid" src="/img/スクリーンショット 2020-05-06 22.16.14.png" data-toggle="modal" data-target="#exampleModalScrollable">
<h6 class="seikabutu">-制作日-2020/04/15　<span class="tag">画像をクリック</span></h6>
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
            AlegríaCocktails<br>
            <br>
        【サイトについて】<br>
            雰囲気に合ったカクテルを探すことができるWebアプリケーション<br>
            <br>
        【経緯】<br>
            僕がアルバイトをしているところではカクテルやウイスキー、ワインなど多くの種類のお酒を提供しています。<br>
            そのため様々な種類のお酒を知ることができました。<br>
            しかし、実際に来てくださるお客様の中には、お酒が好きで詳しい方や普段から飲まないことからあまり詳しくない方など人によって違います。<br>
            このサイトでは自分に合ったカクテルを見つけることによって、友達と過ごす時間も、特別な人と過ごす時間もより良い時間になればいいなと思い開発しました。<br>
            <br>
        【感想】<br>
            初めて開発したことから完成させることで精一杯で、デザイン性が優れているものではありませんが、開発の流れやPHPの仕組みを理解することができました。<br>
            またプログラミングをしてみて難しいと感じると同時にその楽しさも感じることができました。<br>
            まだまだ理解不足なことが多くありますが、楽しみにながら進めていきたいと思います。<br>
            <br>
        【主な使用言語】<br>
            PHP / HTML / CSS<br>
            <br>
        【URL】<br>
            <a href="https://sheltered-inlet-31794.herokuapp.com/">https://sheltered-inlet-31794.herokuapp.com/</a>
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
<img class="portofolio2 img-fluid" src="/img/スクリーンショット 2020-05-06 22.17.40.png" data-toggle="modal" data-target="#example2ModalScrollable">
<h6 class="seikabutu">-制作日-2020/05/05　<span class="tag">画像をクリック</span></h6>
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
            WELCOME TO MY PORTOFOLIO<br>
            <br>
        【サイトについて】<br>
            ポートフォリオをまとめたWebサイト<br>
            <br>
        【経緯】<br>
            Webに適したPHPの言語では「Webアプリケーション」と「Webサイト」を作ることができます。<br>
            そのため、1つ目の成果物では「Webアプリケーション」を開発したことから、次は「Webサイト」を作ることによってPHPに対する理解を深めたいと考え作り始めました。<br>
            またこれまでの学生生活では、自分が思っていたよりもいろんな人と関われたり、その人たちの価値観に触れることができました。<br>
            そして僕のこれまでの経験のなかで、僕に力を貸してくれた人に感謝の気持ちをWebサイトを通して伝えたいと思ったことが作成するきっかけとなりました。<br>
            <br>
        【感想】<br>
            1つ目のWebアプリケーションでは、完成させることに必死でJavaScriptやjQueryを使い文字に動きを入れてみたりすることができませんでした。<br>
            なので今回は前回で得たことをできる限り活かしながら、新しいことに取り組んでいきました。<br>
            また開発を進めていくうちに、最初に比べてエラーが出たときの対処の仕方や検索の仕方などプログラミングをする上で大切にことを意識しながらできたことは良かったです。<br>
            何事も興味のあることに対して、昨日よりできることが少しでも増えるように意識しながら行動していきたいと思いました。<br>
        <br>
        【主な使用言語】<br>
            PHP / HTML / CSS / JaveScript<br>
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
                <div class="contact-title form-essential seattle-form__col-label">
                    <label for="company-name" class="col-form-label contact-this text-center">名前
                        <span class="tag required" style="margin: 0;">必須</span></label>
                </div>
            <div class="contact-title">
              {{--value="{{ old('name') }}" --}}
                <span class="relative"><br>
                    {{--wpcf7-form-control wpcf7-text wpcf7-validates-as-required (Contact Form7にて指定されているclass名)--}}
                <span class="wpcf7-form-control-wrap company-name"><input type="text" required name="name" size="40" class="form-content seattle-form__input" aria-required="true" aria-invalid="false"></span><br>
                </span>
            </div>
                <div class="contact-title form-essential seattle-form__col-label">
                    <label for="text" class="col-form-label contact-this">メールアドレス
                        <span class="tag required" style="margin: 0;">必須</span></label>
                </div>
                <div class="contact-title">
                    <span class="relative"><br>
                        {{--old関数についてはバリデーションをする際に他の項目でバリデーションが合った時に正常な内容を保存しておくために使う--}}
                        <span class="wpcf7-form-control-wrap email">
                            <input type="text" required name="mail" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-content seattle-form__input" aria-required="true" aria-invalid="false"></span><br>
                    </span>
                </div>
                <div class="contact-title form-essential seattle-form__col-label">
                    <label for="phone-number" class="col-form-label contact-this">電話番号</label>
                </div>
                <div class="contact-title">
                    <span class="relative"><br>
                        <span class="wpcf7-form-control-wrap phone-number">
                            <input type="text" name="phon" size="40" class="wpcf7-form-control wpcf7-text form-content seattle-form__input" aria-invalid="false"></span><br>
                            
                    </span>
                </div>
                <div class="contact-title form-essential seattle-form__col-label label-align-top">
                    <label for="textarea" class="col-form-label contact-this">お問い合わせ内容
                        <span class="tag">必須</span>
                    </label>
                </div>
                <div class="contact-title">
                  {{--requiredで仮に入力データがなければ入力してくださいと指示を出すことができる--}}
                    <span class="relative inquiry-type"><br>{{--wpcf7-form-control特に変わらず--}}{{--wpcf7-textarea特に変わらず--}}{{--form-controlこれでレイアウトがきれいなる--}}{{-- aria-invalid="false"変化なし--}}{{--inquiry-content変化なし--}}
                        <span class="wpcf7-form-control-wrap">
                            <textarea name="body" required cols="40" rows="10" class="text-content"></textarea></span><br>
                    </span>
                </div>
                        {{ csrf_field() }}
                <div class="contact-title">
                    {{-- <a class="btn btn-primary" role="button">送信</a> --}}
                    <input type="submit" class="btn btn-primary" role="button">
                </div>
                @csrf
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