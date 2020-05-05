//drawerによってサイドメニューが出るような動きのあるheaderになっている
$(document).ready(function() {
$('.drawer').drawer();

});

//以下のコードで文字にアニメーションがつく
function scrollChk(){
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height()-200;
  
      $('.scroll-animation').not('.active').each(function(){
          var pos = $(this).offset().top;
  
          if (scroll > pos - windowHeight){
              $(this).addClass("active");
          }
      });
  }
  $(window).scroll(function (){
      scrollChk();
  });
  $('body').on('touchmove', function() {
      scrollChk();
  });
  //function()で様々な処理を一つにまとめて、名前をつけることができる。一つにまとめるメリットは同じコードを書く必要がなくなることや効率良くコードを書くことができる
  //scrollChk関数名
  //varはjavascriptの変数の宣言方法。「var 変数名＝値」。
  //$()の使い方

/*-----
Spanizer
- Wraps letters with spans, for css animations
-----*/
(function($) {
  var s,
  spanizeLetters = {
    settings: {
      letters: $('.js-spanize'),
    },
    init: function() {
      s = this.settings;
      this.bindEvents();
    },
    bindEvents: function(){
      s.letters.html(function (i, el) {
        //spanizeLetters.joinChars();
        var spanizer = $.trim(el).split("");
        return '<span>' + spanizer.join('</span><span>') + '</span>';
      });
    },
  };
  spanizeLetters.init();
})(jQuery);