<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W8NXFS6');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>One Apps</title>
  <meta name="description" content="ONE App - Satu aplikasi untuk semua media KLY. Menambah wawasan dengan game seru dan hadiah menarik sekaligus sebagai referensi berita anti hoaks di Indonesia.">
  <meta name="keywords" content="koin oneapp, aktivitas berhadiah oneapp, oneapp, one, aplikasi one, koin,berita hari ini, berita harian, berita terkini, berita terbaru">
  <meta property="og:title" content="One Apps">
  <meta property="og:description" content="ONE App - Satu aplikasi untuk semua media KLY. Menambah wawasan dengan game seru dan hadiah menarik sekaligus sebagai referensi berita anti hoaks di Indonesia.">
  <meta property="og:image" content="{{ asset('img/index/oneapps_logoshare.jpg') }}">
  <link rel="icon" href="{{ asset('img/index/favicon.ico') }}">
  <!--Style-->
  <link rel="stylesheet" href="{{ asset('css/index/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/index/source/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('css/index/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index/media1024.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index/media768.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index/media480.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index/media320.css') }}"/>
  <!--js-->
  <script type="text/javascript">
    var url_asset = '{{ asset('') }}';
  </script>
  <script src="{{ asset('js/index/vendor/jquery-1.9.1.min.js') }}"></script>
  <script>window.jQuery || document.write('<script src="{{ asset("js/index/vendor/jquery-1.9.1.min.js") }}"><\/script>')</script>
  <script src="{{ asset('js/index/vendor/modernizr-2.6.2.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/index/source/jquery.fancybox.js?v=2.1.5') }}"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="{{ asset('js/index/owl.carousel.min.js') }}"></script>
  <!--CDN link for  TweenMax-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="{{ asset('js/index/js_lib.js') }}"></script>
  <script src="{{ asset('js/index/js_run.js') }}"></script>

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8NXFS6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]--> 

  <!-- header -->
  <header id="mainHeader">
    <div class="wrapper relative">
      <div class="header-menu">
        <div class="main-menu">
          <div class="logo"><a href="#"><img src="{{ asset('img/index') }}/logo_one.png"></a></div>
          <ul class="menunya" id="menu_desktop">
            <li><a href="#banner_home" class="scrolling" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-menu', 'feature_position': 'tentang-one'});">Tentang ONE</a></li>
            <li><a href="#unggulan_home" class="scrolling" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-menu', 'feature_position': 'fitur-unggulan'});">Fitur Unggulan</a></li>
            <li><a href="#download_home" class="scrolling" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-menu', 'feature_position': 'donwload'});">Download</a></li>
          </ul>
        </div><!--end.main-menu-->
        <div class="box_menu" id="triggerVisit" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-menu', 'feature_position': 'visit-kly'});"><span>VISIT KLY</span> <img src="{{ asset('img/index') }}/rectangle_menu.png"></div>
      </div><!--end.header-menu-->

      <div class="popup_menu">
        <div class="close_popup" id="close_trigger"><img src="{{ asset('img/index') }}/close-bt.png"></div>
        <div class="overflow_menu">
          <div class="menu_list1">
            <h3 class="title_menu">Media Sosial</h3>
            <ul class="main_menu1">
              <!-- <li><a href="#" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'media-sosial-facebook'});"><img src="{{ asset('img/index') }}/icon_fb.png"><span>Facebook</span></a></li> -->
              <li><a href="https://www.instagram.com/kly.id/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'media-sosial-instagram'});"><img src="{{ asset('img/index') }}/icon_instagram.png"><span>Instagram</span></a></li>
              <!-- <li><a href="#" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'media-sosial-twitter'});"><img src="{{ asset('img/index') }}/icon_twitter.png"><span>Twitter</span></a></li> -->
            </ul>
          </div>

          <div class="menu_list2">
            <h3 class="title_menu">Jaringan</h3>
            <ul class="main_menu2">
              <li><a href="https://www.liputan6.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-liputan6'});"><img src="{{ asset('img/index') }}/icon_lip6.png"><span>Liputan 6</span></a></li>
              <li><a href="https://www.brilio.net/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-brilio'});"><img src="{{ asset('img/index') }}/icon_brilio.png"><span>Brillio</span></a></li>
              <li><a href="https://www.merdeka.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-merdeka'});"><img src="{{ asset('img/index') }}/icon_merdeka.png"><span>Merdeka</span></a></li>
              <li><a href="https://www.bola.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-bolacom'});"><img src="{{ asset('img/index') }}/icon_bola.png"><span>Bola.com</span></a></li>
              <li><a href="https://www.fimela.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-fimela'});"><img src="{{ asset('img/index') }}/icon_fimela.png"><span>Fimela</span></a></li>
              <li><a href="https://www.otosia.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-otosia'});"><img src="{{ asset('img/index') }}/icon_otosia.png"><span>Otosia</span></a></li>
              <li><a href="https://www.bola.net/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-bolanet'});"><img src="{{ asset('img/index') }}/icon_bolanet.png"><span>Bola.net</span></a></li>
              <li><a href="https://www.kapanlagi.com/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-kapanlagi'});"><img src="{{ asset('img/index') }}/icon_kapanlagi.png"><span>KapanLagi</span></a></li>
              <li><a href="https://www.dream.co.id/" target="_blank" onclick="dataLayer.push({'event': 'click', 'feature_name': 'menu', 'feature_location': 'section-visit-kly', 'feature_position': 'jaringan-dream'});"><img src="{{ asset('img/index') }}/icon_dream.png"><span>Dream</span></a></li>
            </ul>
          </div><!--end.menu-list2-->
        </div>
      </div><!--end.popup_menu-->
    </div><!--end.wrapper-->
  </header>

  <!-- end of header -->
  <!-- middle -->
  <div id="middle-content" class="homePage">
    <section id="banner_home">
     <div class="wrapper">
      <div class="banner_section">
        <div class="left_banner">
          <div class="content_left_banner relative">
            <div class="images_kotak1"><img src="{{ asset('img/index') }}/rectangle_banner.png"></div>
            <div class="owl-carousel">
              <div class="item">
                <h1>Satu Aplikasi untuk Semua Media KLY</h1>
                <div class="media_image"><img src="{{ asset('img/index') }}/media_image.png"></div>
              </div>
              <div class="item">
                <h1>Mainkan Game Seru, Raih Hadiahnya!</h1>
                <span class="sub_banner">Dipenuhi game unik penguji kemampuan yang adiktif dan banjir hadiah</span>
              </div>
              <div class="item">
                <h1>Referensi Berita Anti Hoaks di Indonesia</h1>
                <span class="sub_banner">Stop jadi penyebar atau korban berita bohong. Ayo baca ONE App !</span>
              </div>
            </div>
            <div class="rows_bt"><a href="#download_home" class="bt-purple scrolling" onclick="dataLayer.push({'event': 'click', 'feature_name': 'button-cta', 'feature_location': 'section-home', 'feature_position': 'download-android'});">Download</a></div>
          </div><!--end.content_left_banner-->
        </div><!--end.left_banner-->

        <div class="right_banner">
          <div class="banner_section banner_section">
            <div class="banner_orang"><img src="{{ asset('img/index') }}/orang_banner.png"></div>
            <div class="banner_orang_light blink-image"><img src="{{ asset('img/index') }}/orang_banner_light.png"></div>
            <div class="banner_orang_joystick anim_floating"><img src="{{ asset('img/index') }}/orang_banner_joystick.png
              "></div>
            <div class="banner_orang_coin anim_floating2"><img src="{{ asset('img/index') }}/orang_banner_coin.png"></div>
            <div class="banner_orang_star anim_floating3"><img src="{{ asset('img/index') }}/orang_banner_star.png"></div>
          </div>
        </div><!--end.right_banner-->
      </div><!--end.banner_section-->
     </div><!--end.wrapper-->
    </section>
    <section id="kenapa_home" class="section_pad">
      <div class="wrapper">
        <div class="title_section"><h3>Kenapa One App?</h3></div>
        <div class="section_why relative">
          <div class="rectangle_kenapa"><img src="{{ asset('img/index') }}/rectangle_kenapa.png"></div>

          <div class="row-list row-why">
            <div class="sliderFlip">
              <div class="item">
                 <div class="cols3">
                  <div class="article_card">
                    <div class="thumb_images thumb_height">
                      <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri1.png">
                      </div>
                    </div>
                    <div class="front_article_card">
                      <div class="front_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri1.png">
                            <div class="caption_img">
                                <div class="relative">
                                  <h4>NO<br/>HOAX</h4>
                                  <div class="trigger_card"><img src="{{ asset('img/index') }}/arrow_flip.png" onclick="dataLayer.push({'event': 'click', 'feature_name': 'why-one-app', 'feature_location': 'section-home', 'feature_position': 'nohoax'});"></div>
                                </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.front_content-->
                    </div><!--end.front_article_card-->
                    <div class="back_article_card">
                      <div class="back_card_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                          <div class="overlay_bg">
                            <p>Kami menyajikan berita-berita terkini dan terpercaya. Get Hoax Free, Get Reward, adalah salah satu unggulan di ONE App.</p>
                          </div>
                            <img src="{{ asset('img/index') }}/galeri1.png">
                            <div class="caption_img">
                              <div class="relative">
                                <div class="trigger_card"><img src="{{ asset('img/index') }}/arrow_flip_back.png"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.back_card_content-->
                    </div><!--end.back_article_card-->
                  </div><!--end.article_card-->
                </div><!--end.cols3-->
              </div><!--end.item-->
              <div class="item">
                <div class="cols3">
                  <div class="article_card">
                    <div class="thumb_images thumb_height">
                      <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri2.png">
                      </div>
                    </div>
                    <div class="front_article_card">
                      <div class="front_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri2.png">
                            <div class="caption_img">
                              <div class="relative">
                                <h4>ALL IN<br />ONE</h4>
                                <div class="trigger_card"  onclick="dataLayer.push({'event': 'click', 'feature_name': 'why-one-app', 'feature_location': 'section-home', 'feature_position': 'allinone'});"><img src="{{ asset('img/index') }}/arrow_flip.png"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.front_content-->
                    </div><!--end.front_article_card-->
                    <div class="back_article_card">
                      <div class="back_card_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                            <div class="overlay_bg purpleov">
                              <p>Sebagai salah satu bagian dari KLY (Kapan Lagi Youniverse), konten-konten yang ada di ONE App bersumber dari bersumber dari media-media ternama seperti Liputan6, Merdeka, KapanLagi, Fimela, Bola.net, Bola.com, Brilio, Otosia, dan Dream.co.id.</p>
                            </div>
                            <img src="{{ asset('img/index') }}/galeri2.png">
                            <div class="caption_img">
                              <div class="relative">
                                <div class="trigger_card"><img src="{{ asset('img/index') }}/arrow_flip_back.png"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.back_card_content-->
                    </div><!--end.back_article_card-->
                  </div><!--end.article_card-->
                </div><!--end.cols3-->
              </div><!--end.item-->
              <div class="item">
                <div class="cols3">
                  <div class="article_card">
                    <div class="thumb_images thumb_height">
                      <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri3.png">
                      </div>
                    </div>
                    <div class="front_article_card">
                      <div class="front_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                            <img src="{{ asset('img/index') }}/galeri3.png">
                            <div class="caption_img">
                              <div class="relative">
                                <h4>KOIN &<br />REWARD</h4>
                                <div class="trigger_card"  onclick="dataLayer.push({'event': 'click', 'feature_name': 'why-one-app', 'feature_location': 'section-home', 'feature_position': 'koinreward'});"><img src="{{ asset('img/index') }}/arrow_flip.png"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.front_content-->
                    </div><!--end.front_article_card-->
                    <div class="back_article_card">
                      <div class="back_card_content">
                        <div class="thumb_images">
                          <div class="images_inside">
                          <div class="overlay_bg redov">
                            <p>User mendapatkan reward berupa koin yang dikumpulkan melalui berbagai cara seperti bermain games-games seru yang ada di ONE App dan nantinya koin tersebut dapat ditukarkan dengan penawaran menarik dari ONE App;</p>
                          </div>
                            <img src="{{ asset('img/index') }}/galeri3.png">
                            <div class="caption_img">
                              <div class="relative">
                                <div class="trigger_card"><img src="{{ asset('img/index') }}/arrow_flip_back.png"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--end.thumb_images-->
                      </div><!--end.back_card_content-->
                    </div><!--end.back_article_card-->
                  </div><!--end.article_card-->
                </div><!--end.cols3-->
              </div><!--end.item-->
            </div><!--end.sliderFlip-->
          </div><!--end.row-list-->
        </div><!--end.section_why-->
      </div><!--end.wrapper-->
    </section><!--end.kenapa_home-->

    <section id="unggulan_home" class="section_pad">
      <div class="wrapper">
        <div class="title_section"><h3>Fitur Unggulan</h3></div>
        <div class="section_unggulan">
          <div class="box_gradient">
            <div class="slider_offside">
              <div class="unggulanSLider">
                <div class="item" data-hash="zero">
                  <div class="content_slider">
                    <div class="left_box">
                      <div class="banner_unggulan_left relative">
                        <div class="hp_unggulan"><img src="{{ asset('img/index') }}/hp_unggulan.png"></div>
                        <div class="hp_unggulan_light blink-image"><img src="{{ asset('img/index') }}/hp_unggulan_light.png"></div>
                        <div class="hp_unggulan_coin anim_floating"><img src="{{ asset('img/index') }}/hp_unggulan_coin.png"></div>
                      </div><!--end.banner_unggulan_left-->
                    </div><!--end.left_box-->
                    <div class="right_box">
                      <div class="caption_unggulan">
                        <h3>KOIN & REWARD</h3>
                        <p>"Rasakan sensasi membaca berita yang berbeda dan raih koin sebanyak-banyaknya"</p>
                        <div class="row_bt">
                          <a href="#zero" class="prev-bt icon_carousel"><i class="fa fa-caret-left"></i></a>
                          <a href="#one" class="next-bt icon_carousel"><i class="fa fa-caret-right"></i></a>
                        </div><!--end.rows_bt-->
                      </div><!--end.caption_unggulan-->
                    </div><!--end.right_box-->
                  </div><!--end.content_slider-->
                </div>

                <div class="item" data-hash="one">
                  <div class="content_slider">
                    <div class="left_box">
                      <div class="banner_unggulan_left relative">
                        <div class="hp_unggulan"><img src="{{ asset('img/index') }}/hp_unggulan.png"></div>
                        <div class="hp_unggulan_light blink-image"><img src="{{ asset('img/index') }}/hp_unggulan_light.png"></div>
                        <div class="hp_unggulan_coin anim_floating"><img src="{{ asset('img/index') }}/hp_unggulan_doodle.png"></div>
                      </div><!--end.banner_unggulan_left-->
                    </div><!--end.left_box-->
                    <div class="right_box">
                      <div class="caption_unggulan">
                        <h3>Menu Kurasi</h3>
                        <p>"Nikmati sajian konten pilihan dalam gengaman"</p>
                        <div class="row_bt">
                          <a href="#zero" class="prev-bt icon_carousel"><i class="fa fa-caret-left"></i></a>
                          <a href="#two" class="next-bt icon_carousel"><i class="fa fa-caret-right"></i></a>
                        </div><!--end.rows_bt-->
                      </div><!--end.caption_unggulan-->
                    </div><!--end.right_box-->
                  </div><!--end.content_slider-->
                </div>

                <div class="item" data-hash="two">
                  <div class="content_slider">
                    <div class="left_box">
                      <div class="banner_unggulan_left relative">
                        <div class="hp_unggulan"><img src="{{ asset('img/index') }}/hp_unggulan.png"></div>
                        <div class="hp_unggulan_light blink-image"><img src="{{ asset('img/index') }}/hp_unggulan_light.png"></div>
                        <div class="hp_unggulan_coin anim_floating"><img src="{{ asset('img/index') }}/hp_unggulan_joystick.png"></div>
                      </div><!--end.banner_unggulan_left-->
                    </div><!--end.left_box-->
                    <div class="right_box">
                      <div class="caption_unggulan">
                        <h3>Games</h3>
                        <p>“Mainkan permainan yang ada di ONE App dan raih koin di dalamnya”</p>
                        <div class="row_bt">
                          <a href="#one" class="prev-bt icon_carousel"><i class="fa fa-caret-left"></i></a>
                          <a href="#three" class="next-bt icon_carousel"><i class="fa fa-caret-right"></i></a>
                        </div><!--end.rows_bt-->
                      </div><!--end.caption_unggulan-->
                    </div><!--end.right_box-->
                  </div><!--end.content_slider-->
                </div>

                <div class="item" data-hash="three">
                  <div class="content_slider">
                    <div class="left_box">
                      <div class="banner_unggulan_left relative">
                        <div class="hp_unggulan"><img src="{{ asset('img/index') }}/hp_unggulan.png"></div>
                        <div class="hp_unggulan_light blink-image"><img src="{{ asset('img/index') }}/hp_unggulan_light.png"></div>
                        <div class="hp_unggulan_coin anim_floating"><img src="{{ asset('img/index') }}/hp_unggulan_multichannel.png"></div>
                      </div><!--end.banner_unggulan_left-->
                    </div><!--end.left_box-->
                    <div class="right_box">
                      <div class="caption_unggulan">
                        <h3>Multichannel</h3>
                        <p>“Semua informasi berita dari publisher ternama dalam satu genggaman”</p>
                        <div class="row_bt">
                          <a href="#two" class="prev-bt icon_carousel"><i class="fa fa-caret-left"></i></a>
                          <a href="#four" class="next-bt icon_carousel"><i class="fa fa-caret-right"></i></a>
                        </div><!--end.rows_bt-->
                      </div><!--end.caption_unggulan-->
                    </div><!--end.right_box-->
                  </div><!--end.content_slider-->
                </div>

                <div class="item" data-hash="four">
                  <div class="content_slider">
                    <div class="left_box">
                      <div class="banner_unggulan_left relative">
                        <div class="hp_unggulan"><img src="{{ asset('img/index') }}/hp_unggulan.png"></div>
                        <div class="hp_unggulan_light blink-image"><img src="{{ asset('img/index') }}/hp_unggulan_light.png"></div>
                        <div class="hp_unggulan_coin anim_floating"><img src="{{ asset('img/index') }}/hp_unggulan_komentar.png"></div>
                      </div><!--end.banner_unggulan_left-->
                    </div><!--end.left_box-->
                    <div class="right_box">
                      <div class="caption_unggulan">
                        <h3>Komentar</h3>
                        <p>“Sampaikan kontribusimu melalui kolom komentar di setiap artikel yang ada”</p>
                        <div class="row_bt">
                          <a href="#three" class="prev-bt icon_carousel"><i class="fa fa-caret-left"></i></a>
                          <a href="#zero" class="next-bt icon_carousel"><i class="fa fa-caret-right"></i></a>
                        </div><!--end.rows_bt-->
                      </div><!--end.caption_unggulan-->
                    </div><!--end.right_box-->
                  </div><!--end.content_slider-->
                </div>

              </div>
            </div><!--end.slider-offside-->
          </div>
        </div><!--end.section_unggulan-->
      </div><!--end.wrapper-->
    </section><!--end.unggulan_home-->


    <section id="download_home" class="section_pad">
      <div class="wrapper">
        <div class="left_banner">
          <div class="banner_section relative">
            <div class="orang_download"><img src="{{ asset('img/index') }}/orang_download.png"></div>
            <div class="orang_download_light blink-image"><img src="{{ asset('img/index') }}/orang_download_light.png"></div>
            <div class="orang_download_joystick anim_floating"><img src="{{ asset('img/index') }}/orang_download_joystick.png"></div>
            <div class="orang_download_coin anim_floating2"><img src="{{ asset('img/index') }}/orang_download_coin.png"></div>
          </div>
        </div><!--end.leftbanner-->
        <div class="right_banner">
          <div class="contet_right_download relative">
            <div class="images_kotak2"><img src="{{ asset('img/index') }}/rectangle_banner.png"></div>
            <h1>#GenggamFakta dan #BanjirHadiah hanya di ONE App</h1>
            <div class="list_download">
              <a href="#" class="download_app" onclick="dataLayer.push({'event': 'click', 'feature_name': 'button-download', 'feature_location': 'section-download', 'feature_position': 'download-android'});" ><img src="{{ asset('img/index') }}/app_store.png"></a>
              <a href="#" class="download_app" onclick="dataLayer.push({'event': 'click', 'feature_name': 'button-download', 'feature_location': 'section-download', 'feature_position': 'download-ios'});"><img src="{{ asset('img/index') }}/google_play.png"></a>
            </div>
          </div><!--end.contet_right_download-->
        </div><!--end.right_banner-->
      </div><!--end.wrapper-->
    </section><!--end.unggulan_home-->
  </div>  
  <!-- end of middle -->
  
  <footer id="footer">
      <p>Copyright © 2018 One App All rights reserved.</p>
  </footer>
</body>
</html>