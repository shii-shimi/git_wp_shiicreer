jQuery(function () {
    const fade_bottom = 50; // 画面下からどの位置でフェードさせるか(px)
    const fade_move = 100; // どのぐらい要素を動かすか(px)
    const fade_time = 1500; // フェードの時間(ms)
    // フェード前のcssを定義
   jQuery(".profile").css({
      opacity: 0,
      transform: "translateY(" + fade_move + "px)",
      transition: fade_time + "ms",
    });
    // スクロールまたはロードするたびに実行
   jQuery(window).on("scroll load", function () {
      const scroll_top = jQuery(this).scrollTop();
      const scroll_bottom = scroll_top + jQuery(this).height();
      const fade_position = scroll_bottom - fade_bottom;
      jQuery(".profile").each(function () {
        const this_position = $(this).offset().top;
        if (fade_position > this_position) {
          jQuery(this).css({
            opacity: 1,
            transform: "translateY(0)",
          });
        }
      });
    });
  });

 jQuery(function () {
    const fade_bottom = 50; // 画面下からどの位置でフェードさせるか(px)
    const fade_move = 100; // どのぐらい要素を動かすか(px)
    const fade_time = 1000; // フェードの時間(ms)
    // フェード前のcssを定義
    jQuery(".img").css({
      opacity: 0,
      transform: "translateY(" + fade_move + "px)",
      transition: fade_time + "ms",
    });
    // スクロールまたはロードするたびに実行
    jQuery(window).on("scroll load", function () {
      const scroll_top = $(this).scrollTop();
      const scroll_bottom = scroll_top + $(this).height();
      const fade_position = scroll_bottom - fade_bottom;
      jQuery(".img").each(function () {
        const this_position = jQuery(this).offset().top;
        if (fade_position > this_position) {
          jQuery(this).css({
            opacity: 1,
            transform: "translateY(0)",
          });
        }
      });
    });
  });

  

 jQuery(function() {
    jQuery('.hamburger').click(function() {
        jQuery(this).toggleClass('active');
 
        if (jQuery(this).hasClass('active')) {
            jQuery('.globalMenuSp').addClass('active');
        } else {
            jQuery('.globalMenuSp').removeClass('active');
        }
        jQuery('.menuclose').on('click', function(event) {
          jQuery('.hamburger').removeClass('active');
          jQuery('.globalMenuSp').removeClass('active');
        });
    });
});



jQuery(function () {
  const fade_bottom = 50; // 画面下からどの位置でフェードさせるか(px)
  const fade_move = 100; // どのぐらい要素を動かすか(px)
  const fade_time = 1500; // フェードの時間(ms)
  // フェード前のcssを定義
 jQuery(".consept").css({
    opacity: 0,
    transform: "translateY(" + fade_move + "px)",
    transition: fade_time + "ms",
  });
  // スクロールまたはロードするたびに実行
  jQuery(window).on("scroll load", function () {
    const scroll_top = $(this).scrollTop();
    const scroll_bottom = scroll_top + jQuery(this).height();
    const fade_position = scroll_bottom - fade_bottom;
    jQuery(".consept").each(function () {
      const this_position = jQuery(this).offset().top;
      if (fade_position > this_position) {
        jQuery(this).css({
          opacity: 1,
          transform: "translateY(0)",
        });
      }
    });
  });
});





$('ul li a').click(function() {
  var imgSrc = $(this).children().attr('src');
  $('.bigimg').children().attr('src', imgSrc);
  $('.modal').fadeIn();
  $('body,html').css('overflow-y', 'hidden');
  return false
});

$('.close-btn').click(function() {
  $('.modal').fadeOut();
  $('body,html').css('overflow-y', 'visible');
  return false
});
