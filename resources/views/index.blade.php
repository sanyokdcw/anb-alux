<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>ANB</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="inner_container">
            <img class="logo" src="assets/Logo.png" alt="">
            <nav class="nav">
                <div class="nav_link" style="cursor:pointer" onclick="scrollDCW('.ab_us_section')"><span>О</span> нас <img src="/assets/vline.png" alt=""></div>
                <div class="nav_link" style="cursor:pointer" onclick="scrollDCW('.section_services')">Услуги</div>
                <div class="nav_link" style="cursor:pointer" onclick="scrollDCW('.buyings')">Закупки</div>
                <div class="nav_link" style="cursor:pointer" onclick="scrollDCW('.news')">Новости</div>
                <div class="nav_link" style="cursor:pointer" onclick="scrollDCW('.news')">Статьи</div>
            </nav>
            <div class="number">
            <a href="tel:{{setting('kontakty.telephone')}}" style="text-decoration:none; color: black">
             {{setting('kontakty.telephone')}}
            </a>
            </div>
        </div>
    </div>
</header>

<header class="mobile-header">
    <div class="mobile-header__wrapper">
        <img class="logo" src="assets/Logo.png" alt="">
        <img class="burger" src="/assets/menu.png" alt="" onclick="showBurger()">
    </div>
    <div class="mobile-nav" id="menu">
        <div class="mobile-nav-link" style="cursor:pointer" onclick="scrollDCW('.ab_us_section')"><span>О</span> нас <img src="/assets/vline.png" alt=""></div>
        <div class="mobile-nav-link" style="cursor:pointer" onclick="scrollDCW('.section_services')">Услуги</div>
        <div class="mobile-nav-link" style="cursor:pointer" onclick="scrollDCW('.buyings')">Закупки</div>
        <div class="mobile-nav-link" style="cursor:pointer" onclick="scrollDCW('.news')">Новости</div>
        <div class="mobile-nav-link" style="cursor:pointer" onclick="scrollDCW('.news')">Статьи</div>
    </div>
</header>

<section class="intro">
    <div class="intro__wrapper container">
        <div class="intro_inner">
            <div class="intro_text">{{  __('content.banner')  }}
            </div>
            <button class="ab_button shine" style="font-weight: bold">{{  __('content.button')  }}</button>
        </div>
    </div>

</section>

<section class="ab_us_section" data-aos="fade-up">
    <div class="ab_us container">
        <div class="ab_us_left">
            <div class="ab_us_title">{{  __('content.about')  }}
                <div class="line"></div>
            </div>
            <div class="ab_us_paragraph">{{$about->title}}</div>
            </span>
            <img class="ab_us_pic" src="storage/{{$about->image}}" alt="" style="max-height: 300px">
        </div>

        <div class="ab_us_right">
            <div class="first_text">
                {!!$about->description_top!!}
            </div>
            <div class="sec_text">
                    {!!$about->description_bottom!!}  
            </div>
            <div class="ab_us_button_wrap">
                <button class="ab_button shine">{{  __('content.button')  }}</button>
            </div>

        </div>
    </div>
    <div class="block_wrap container" data-aos="fade-up">
        @foreach ($badges as $badge)
        <div class="block">
            <div class="block_item" style="height: auto; margin: 30px 0;">
                <div class="icon_and_num" style="display: flex; align-items:center; justify-content: center">
                    <img class="block_icon" src="storage/{{$badge->icon}}" alt="">
                    <div class="block_num" style="margin-left: 10px">{{$badge->number}}</div>
                </div>
                <div class="block_text" style="color: black; font-weigth: bold !important;     width: 150px;
    margin: auto;
    text-align: center;">{!!$badge->title!!}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="section_services" data-aos="fade-zoom-in">
    <div class="container">
        <div class="services">
            <h1 class="section__title">{{  __('content.services')  }}</h1>
            <div class="services__wrapper">
                @foreach ($services as $service)
                <div class="services__item">
                    <img src="storage/{{$service->image}}" class="services__img" alt="">
                    <div class="services__name">
                        <h1>
                            {{$service->title}}
                        </h1>
                    </div>
                    <div class="services__text">{{$service->description}}</div>
                        <div class="services__btn-block">
                            <a href="#" class="services__btn shine">{{  __('content.button')  }}</a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>

<section class="buyings" data-aos="fade-up" style="margin-bottom: 20px">
    <div class="buyings_title">{{  __('content.procurement')  }}</div>
    <div class="block_wrap container">
        @foreach ($procurements as $procurement)
        <div class="block buy_block">
            <div class="buy_title">{{$procurement->date}}</div>
            <div class="buy_text">{{$procurement->description}}</div>
            <div class="buy_about_wrap">
                <a class="buy_about" href="#">{{  __('content.button')  }}<img src="assets/arrow_right.png" alt=""></a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section class="news" data-aos="zoom-in">
    <div class="news_title">{{  __('content.articles')  }}</div>
    <div class="news_wrap container">
        @foreach ($articles as $article)   
        <div class="news_item">
            <div class="news_item_wrapper">
                <div class="news__img-block" style="height: 200px;">
                    <img class="news_img" src="/storage/{{$article->image}}" alt="" style="object-fit:cover;">
                </div>
                <div class="news_inner_title" style="font-weight: bold;">
                {{$article->tile}}

                </div>
                <div class="news_text" style="margin: 20px 0">{{$article->description}}
                </div>
            </div>

                <div class="news__btn-wrap">
                    <a href="#" class="ab_button shine" style="margin-top:0; padding: 16px 32px">{{  __('content.buttons')  }}</a>
                </div>
        </div>
        @endforeach
    </div>
    <div class="two_circles">
        <div class="circle prev"><img src="assets/stroke_left.png" alt=""></div>
        <div class="circle next"><img src="assets/stroke_right.png" alt=""></div>
    </div>
</section>
<footer class="footer">
    <div class="footer_wrap container">
        <img class="logo logo_footer" src="assets/Logo.png" alt="">
        <div class="footer_link">
            <div class="footer_link_block">
                <div class="footer_link_item" style="cursor:pointer" onclick="document.querySelector('.ab_us_section').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.company')  }}</div>
                <div class="footer_link_item"
                style="cursor:pointer" onclick="document.querySelector('.section_services').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.services')  }}</div>
                <div class="footer_link_item" style="cursor:pointer" onclick="document.querySelector('.buyings').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.procurement')  }}</div>
            </div>
        </div>
        <div class="footer_link">
            <div class="footer_link_block">
                <div class="footer_link_item" style="cursor:pointer" onclick="document.querySelector('.news').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.articles')  }}</div>
                <div class="footer_link_item" style="cursor:pointer" onclick="document.querySelector('.news').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.paper')  }}</div>
                <div class="footer_link_item" style="cursor:pointer" onclick="document.querySelector('.ab_us_section').scrollIntoView({
  behavior: 'smooth'
});">{{  __('content.contact')  }}</div>
            </div>
        </div>
        <div class="footer_info_block">
            <div class="footer_info">
                <img src="assets/footer_icons/phone_icon.png" alt="">
                <div class="footer_info_text">             <a href="tel:{{setting('kontakty.telephone')}}" style="text-decoration:none; color: black">
             {{setting('kontakty.telephone')}}
</a></div>
            </div>

            <div class="footer_info">
                <img src="assets/footer_icons/mail_icon.png" alt="">
                <div class="footer_info_text">
                             <a href="mailto:{{setting('kontakty.email')}}" style="text-decoration:none; color: black">
             {{setting('kontakty.email')}}
</a>
                </div>
            </div>
        </div>
        <div class="footer_info third">
            <img src="assets/footer_icons/address_icon.png" alt="">
            <div class="footer_info_text">{{  __('content.adress')  }}</div>
        </div>
        <div class="social_media">
            <div class="social_media_title">{{  __('content.social')  }}</div>
            <img class="social_media_icon" src="assets/footer_icons/fb_icon.png" alt="">
            <img class="social_media_icon" src="assets/footer_icons/insta_icon.png" alt="">
            <img class="social_media_icon" src="assets/footer_icons/linked_in_icon.png" alt="">
        </div>
    </div>

</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="/js/jquery.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
