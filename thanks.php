<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="fonts/TTNorms-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/TTNorms-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/TTNorms-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/TTNorms-Light.ttf" as="font" type="font/ttf" crossorigin>
     <link rel="stylesheet" type="text/css" href="css/user-ui.css"/>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/slick.css"/>

    <script>
        function canUseWebp() {
          let elem = document.createElement('canvas');
          if (!!(elem.getContext && elem.getContext('2d'))) {
              return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
          }
          return false;
          
        }
        window.onload = function () {
        let images = document.querySelectorAll('[data-bg]');
        for (let i = 0; i < images.length; i++) {
            let image = images[i].getAttribute('data-bg');
            images[i].style.backgroundImage = image;
        }
        let isitFirefox = window.navigator.userAgent.match(/Firefox\/([0-9]+)\./);
        let firefoxVer = isitFirefox ? parseInt(isitFirefox[1]) : 0;
        if (canUseWebp() || firefoxVer >= 65) {
            let imagesWebp = document.querySelectorAll('[data-bg-webp]');
            for (let i = 0; i < imagesWebp.length; i++) {
                let imageWebp = imagesWebp[i].getAttribute('data-bg-webp');
                imagesWebp[i].style.backgroundImage = imageWebp;
            }
        }
      };
    </script>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '217310993713908');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=217310993713908&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLXS3LS');</script>
<!-- End Google Tag Manager -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Авторские кухни
      любой сложности</title>
    <meta property="og:image" content="">
  <!-- Разметка JSON-LD, созданная Мастером разметки структурированных данных Google. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Изготовление и установка кухонь в Москве и области с 2006 года",
  "image" : "https://mega-kuhni.ru/img/sliders-photo/4017.jpg",
  "telephone" : "+7(958)577-61-00",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Москва, улица Свободы, 29 ТВЦ Свобода Мебель, пав. 28 (цокольный этаж)"
  },
  "openingHoursSpecification" : {
    "@type" : "OpeningHoursSpecification",
    "opens" : "Укажите допустимую дату и время по стандарту ISO 8601. Например: 2015-07-27 или 2015-07-27T15:30"
  }
}
</script>
</head>
<body data-bg="url(img/lines-w.png)" data-bg-webp="url(img/lines-w.webp)">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLXS3LS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Шапка сайта -->
  <header data-bg="url(img/lines.png)" data-bg-webp="url(img/lines.webp)">
    <div class="header">
      <div class="header__c container">
        <div class="logo">
          <a href="/">
            <picture class="logo__img">
              <source type="image/webp" srcset="img/logo.webp">
              <img src="img/logo.png" alt="">
            </picture>
          </a>
          <div class="logo__desc">
            Изготовление и установка
            кухонь в Москве и области
            с 2006 года
          </div>
        </div>
        <a href="#reviews" class="header__reviews block-ref">
          <div class="header__reviews__img">
            <picture>
              <source type="image/webp" srcset="img/reviews.webp">
              <img src="img/reviews.png" alt="">
            </picture>
          </div>
          <div class="header__reviews__text">
            Смотреть наши <br>
            кухни и отзывы
          </div>
        </a>
        <a href="quiz.php" class="header__calc">
          <span>Калькулятор стоимости</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=+79255675952&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5.%20%D0%A5%D0%BE%D1%87%D1%83%20%D1%83%D0%B7%D0%BD%D0%B0%D1%82%D1%8C%20%D1%81%D1%82%D0%BE%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C%20%D0%BA%D1%83%D1%85%D0%BD%D0%B8+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C%20%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&source=&data=&roistat_visit=460181" target="_blank" class="header__whatsapp">
          <div class="header__whatsapp__icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28" viewBox="0 0 28 28">
              <image width="28" height="28" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAADMUlEQVRIia2WW0gUURjHf46X3SxzTdz10kYiZIkZZVQWReVDEBVKEUj0UoFGvZRBBAURRBCZBF2pXkqFojCE7qVkiV2wB6MCKxPEcFdtLbHyUhPfdGYZddq26A+7fHvOzP9/znfdCF3XCYFUoBBYDOQCyWq9E2gCHgLVwIffMoiAzcet63qlHj4q1TtjuOxusBY4AXiG9GHqAo+p7W3k9Zd39AwFjAcSoxOYEZvBclceyxIWEB0RJcs+YBtw1Uo2WuAUUCLG/UAjR9rP0TnYFcqFJMckscu7hfyEPHPpNLDVTkBOfkVHp6z9PJW+mpDEo7HBs4ZS72YiiJCf68ybmAJuoFncIqf+W3KriNxGuSsH8Gtqr1zIxS1W8inOVPITFpqn+iPkXeEQLsVp3EBSsUMCuuZFcdDnGeOmUDGjDKfmYHfrYe58fBSWiMSkZuYZM/BpmspzI1usAS1yrzbIBeuTVobnIymQwS6DS6FQU0VkpKIVSTGTgnZuXDbxUXFhi1i4FmuqQo08t6Lly/ugfdF3jU/DfWELWLhyNbP8zSIycbXrNt9+DCixtrDJR3Eli8B3sTS0EQ+JL092VBp2qXeTEbx/gaYaF4nRrjGb4pp7gQZcURM5m3mQdKc3uDfVmcZGTwETImPHvCetxDynCDwVK3t8pu0J9r4v52lfM5MdyVRlHaUktYhpsekcydjDTu8mbuScN9askD6l0KSplstS1zxbgYEfg2xv2U919x0jbYtTi7iUdcyoE6A+LnI8qxPzR7wjTVDhoQjU/BKYT0qM21ZEivBA23GKW/bxvO8l0q8UlogtrjQhsZIOq1Bt9qIKaSW1gUZK3x2yFbEizeFhUXwu8ZFxNHxu4lX/2+CeuE511irhjFLrUnobLCcLiY4BH5f9N8asS7NT5NLsdqCySLBKvu4GGsISsIPZrhVk8PjFkBtInq2QYNb3PmOc5mRh/BxmTZjOJf9147Sh8JuBE5xqEoN0oFWI3nxtI2/ibBxajLE5rH/nQe8T6nof87L/Dd1DASPAfzMyzeF8c9QQv6Xr+oX/PfTlJrNUXfSoNRkcBarjzgVSLNX/578twE+nTdG7dAqlGgAAAABJRU5ErkJggg=="/>
            </svg>            
          </div>
          <div class="header__whatsapp__text">
            Среднее время <br>
            ответа 15 секунд
          </div>
        </a>
        <a data-fancybox href="https://yandex.ru/map-widget/v1/?um=constructor%3A5cb9d3ccf11be15e29ba085b5d645dcd74e96759fdb1b1d085340ab053c01a98&amp;source=constructor" data-type="iframe" class="header__adress">
          <div class="header__adress__icon">
            <svg fill="#fecc1d" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
              <g>
                <path d="M19,0C11.096,0,4.666,6.43,4.666,14.333c0,11.379,12.796,22.81,13.341,23.292C18.292,37.875,18.646,38,19,38
                  c0.368,0,0.736-0.135,1.023-0.404c0.543-0.508,13.311-12.568,13.311-23.262C33.334,6.431,26.902,0,19,0z M19,21.168
                  c-3.775,0-6.834-3.061-6.834-6.833S15.225,7.502,19,7.502c3.773,0,6.832,3.06,6.832,6.833S22.773,21.168,19,21.168z"/>
              </g>
              </svg>              
          </div>
          <div class="header__adress__info">
            <div class="header__adress__title">
              Адреса ШОУ-РУМов
            </div>
            <div class="header__adress__link-wrap">
              <span class="header__adress__link">
                Смотреть на карте
              </span>
              <div class="header__adress__map map-place">
                
              </div>
            </div>
          </div>
        </a>

        <div class="header__phone">
          <div class="header__phone__photo">
            <picture>
              <source type="image/webp" srcset="img/designer1.webp">
              <img src="img/designer1.png" alt="">
            </picture>
          </div>
          <div class="header__phone__info">
            <div class="header__phone__uptime">
              Ежедневно с  10:00 до 20:00
            </div>
            <a href="tel:+74999384811" class="header__phone__link">
              +7 499 938-48-11
            </a>
            <div class="header__phone__person">
              Ответит Дизайнер Светлана
            </div>
          </div>
        </div>

        <div class="header__burger">
          <div class="dash">

          </div>
        </div>

      </div>
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item"><a href="#main" class="nav__link anchor">
            Главная
          </a></li>
          <div class="nav__dot"></div>
          <li class="nav__item"><a href="#calc" class="nav__link anchor">
            Расчет стоимости
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#cases" class="nav__link anchor">
            Портфолио
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#catalog" class="nav__link anchor">
            Каталог 
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#reviews" class="nav__link anchor">
            Отзывы 
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#promo" class="nav__link anchor">
            Акции 
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#garanty" class="nav__link anchor">
            Гарантии 
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#about" class="nav__link anchor">
            О компании
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#steps" class="nav__link anchor">
            Как заказать 
          </a></li><div class="nav__dot"></div>
          <li class="nav__item"><a href="#contacts" class="nav__link anchor">
            Контакты 
          </a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="thanks" data-bg="url(img/lines.png), url(img/bg6.png)" data-bg-webp="url(img/lines.webp), url(img/bg6.webp)">
    <div class="thanks__c container">
      <div class="thanks__stamp">
        <picture class="stamp">
          <source type="image/webp" srcset="img/stamp.webp">
          <img src="img/stamp.png" alt="">
        </picture>
        <picture class="stamp-logo">
          <source type="image/webp" srcset="img/stamp_logo.webp">
          <img src="img/stamp_logo.png" alt="">
        </picture>
      </div>
      <div class="thanks__info">
        <div class="thanks__ok wow fadeInUp">Ваш запрос успешно отправлен</div>
        <div class="thanks__title wow fadeInUp">Пока мы его обрабатываем, 
          я&nbsp;хочу поблагодарить
          лично&nbsp;вас за доверие</div>
        <div class="thanks__subtitle wow fadeInUp">
          <p>
            Мы открыты и стараемся сделать процесс
            заказа кухни не только простым, понятным
            и&nbsp;открытым, но и интересным)
          </p></div>
      </div>
      <div class="thanks__photo">
        <picture class="thanks__photo__designer">
          
          <img src="img/designer-anton.png" alt="">
        </picture>
        <div class="thanks__person">
          <div class="thanks__person__name"><p>Алексей</p></div>
          <div class="thanks__person__post"><p>Руководитель компании МЕГА КУХНИ в Москве</p></div>
          <picture class="thanks__person__sign">
            <source type="image/webp" srcset="img/sign.webp">
            <img src="img/sign.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>


  <section class="thanks__reviews container" id="reviews">
    <picture class="thanks__reviews__arr">
      <img src="img/thanks-arr.png" alt="">
    </picture>
    <div class="title thanks__sec-title text-center wow fadeInUp">
      Посмотрите <span class="strong">
        на самые яркие кухни, <br>
        которые мы делали
      </span>
    </div>
    <div class="reviews__c thanks__reviews__c">
      <a href="https://www.youtube.com/watch?v=6kMkp_eXaJ8" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/1.webp">
          <img src="img/reviews/1.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
      <a href="https://www.youtube.com/watch?v=MzwTFOUVrFs" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/2.webp">
          <img src="img/reviews/2.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
      <a href="https://www.youtube.com/watch?v=I9IWQyYXQG8&pp=sAQA" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/3.webp">
          <img src="img/reviews/3.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
      <a href="https://www.youtube.com/watch?v=NzFlL3Y1nfk" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/4.webp">
          <img src="img/reviews/4.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
      <a href="https://www.youtube.com/watch?v=Za6Nq1N1Rok" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/5.webp">
          <img src="img/reviews/5.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
      <a href="https://www.youtube.com/watch?v=vlkIVNyqJs8" data-fancybox="reviews-video" class="reviews__item">
        <picture>
          <source type="image/webp" srcset="img/reviews/7.webp">
          <img src="img/reviews/7.png" alt="">
        </picture>
        <button class="reviews__play">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </button>
      </a>
    </div>
    <div class="reviews__more-wrap">
      <a href="https://www.youtube.com/channel/UCt8ByoVLp8kVfabiayX-mdw" target="_blank" class="reviews__more">
        <span>Смотреть больше историй на нашем Ютуб-канале</span>
      </a>
    </div>
  </section>

  <div class="thanks__inst" data-bg="url(img/lines.png), url(img/bg6.png)" data-bg-webp="url(img/lines.webp), url(img/bg6.webp)">
    <div class="title thanks__sec-title text-center white wow fadeInUp">
      А также <span class="strong"></span>подпишитесь в нашу группу Вконтакте</span>, где мы регулярно
      проводим розыгрыши и делимся полезным опытом для хозяек
    </div>
    <div class="thanks__inst__link-wrap">
      <a href="https://vk.com/mega_kuhni" target="_blank" class="thanks__inst__link">
        <span>mega_kuhni</span>
      </a>
    </div>
    <div class="thanks__inst__photos">
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/1.webp">
          <img src="img/inst/1.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/2.webp">
          <img src="img/inst/2.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/3.webp">
          <img src="img/inst/3.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/4.webp">
          <img src="img/inst/4.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/5.webp">
          <img src="img/inst/5.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/6.webp">
          <img src="img/inst/6.png" alt="">
        </picture>
      </a>
      <a href="https://www.instagram.com/mega_kuhni/" target="_blank" class="thanks__inst__photos__item">
        <picture>
          <source type="image/webp" srcset="img/inst/7.webp">
          <img src="img/inst/7.png" alt="">
        </picture>
      </a>
    </div>
    <div class="thanks__inst__phone container">
      <a href="https://vk.com/mega_kuhni" target="_blank" class="btn thanks__inst__btn">
        <span>
          Перейти в Вконтакте
        </span>
      </a>
      <picture class="thanks__inst__phone--arr">
        <source type="image/webp" srcset="img/arr-inst.webp">
        <img src="img/arr-inst.png" alt="">
      </picture>
      <a href="https://www.instagram.com/mega_kuhni/" class="thanks__inst__phone__img">
        <picture>
          <source type="image/webp" srcset="img/inst-phone.webp">
          <img src="img/inst-phone.png" alt="">
        </picture>
      </a>
    </div>
  </div>

   		<!-- Подвал  -->
 <footer>
    <div class="footer container">
      <p class="footer__copyright">
        © 2021 "МЕГА КУХНИ" <br>
        Все права защищены  ИНН 580308110804 ОГРН 321583500024941
      </p>
      <p class="footer__info">
        Информация, размещенная на сайте носит <br>
        справочный характер
      </p>
      <div class="footer__links">
        <a href="https://paradigma.website/" target="_blank">Сделано в Paradigma.website</a>
        <a href="">Политика обработки персональных данных</a>
      </div>
    </div>
  </footer> 
	 

  <div class="popup" id="popup-magnet">
    <div class="popup-wrap popup-wrap--center">
      <div class="popup__form-wrap">
        <div class="close"></div>
        <form class="popup__magnet" data-download="file.pdf">
          <div class="popup__magnet__outline">
              <div class="popup__form__title">
                Получите бесплатно инструкцию
                <span class="strong">ТОП&#8209;5&nbsp;ошибок при выборе кухни</span>
              </div>
              <div class="popup__magnet__content">
                <div class="popup__magnet__img">
                  <picture class="popup__magnet__catalog">
                    <source type="image/webp" srcset="img/mistakes.webp">
                    <img src="img/mistakes.png" alt="">
                  </picture>
                  <div class="popup__magnet__pdf">
                    <picture>
                      <source type="image/webp" srcset="img/pdf.png">
                      <img src="img/pdf.png" alt="">
                    </picture>
                    <div class="popup__magnet__pdf--name">PDF</div>
                    <div class="popup__magnet__pdf--size">1,5 Мб</div>
                  </div>
                </div>
                <div class="popup__magnet__fill">
                  <div class="popup__magnet__contact-title">
                    Куда вам удобнее отправить каталог ?
                  </div>
                  <div class="popup__magnet__group">
                    <div class="form__contact popup__magnet__contact">
                      <label class="form__contact__label form__contact__label--wa">
                        <input checked type="radio" name="contact" value="WhatsApp" class="visually-hidden form__contact__radio">
                        <div class="form__contact__box popup__magnet__contact__box">
                          <div class="form__contact__icon"><svg fill="#00d529" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                         <g>
                           <g>
                             <path d="M256.064,0h-0.128C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104l98.4-31.456
                               C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z M405.024,361.504
                               c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264C189.888,347.2,141.44,270.752,137.664,265.792
                               c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304c6.176-6.304,16.384-9.184,26.176-9.184
                               c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64c6.176,14.88,21.216,51.616,23.008,55.392
                               c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744c-3.776,4.352-7.36,7.68-11.136,12.352
                               c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616c28.576,25.44,51.744,33.568,60.032,37.024
                               c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496c5.12-7.232,11.584-8.128,18.368-5.568
                               c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736C411.2,329.152,411.2,344.032,405.024,361.504z"/>
                           </g>
                         </g>
                         </svg>
                         </div>
                          <div class="form__contact__name">WhatsApp</div>
                        </div>
                      </label>
                      <label class="form__contact__label form__contact__label--tg">
                        <input type="radio" name="contact" value="Telegram" class="visually-hidden form__contact__radio">
                        <div class="form__contact__box popup__magnet__contact__box">
                          <div class="form__contact__icon">
                            <svg fill="#1face1" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                         </div>
                          <div class="form__contact__name">Telegram</div>
                        </div>
                      </label>
                      <label class="form__contact__label form__contact__label--viber">
                        <input type="radio" name="contact" value="Viber" class="visually-hidden form__contact__radio">
                        <div class="form__contact__box popup__magnet__contact__box">
                          <div class="form__contact__icon">
                            <svg fill="#920da6" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 44.78125 13.15625 C 44 10.367188 42.453125 8.164063 40.1875 6.605469 C 37.328125 4.632813 34.039063 3.9375 31.199219 3.511719 C 27.269531 2.925781 23.710938 2.84375 20.316406 3.257813 C 17.136719 3.648438 14.742188 4.269531 12.558594 5.273438 C 8.277344 7.242188 5.707031 10.425781 4.921875 14.734375 C 4.539063 16.828125 4.28125 18.71875 4.132813 20.523438 C 3.789063 24.695313 4.101563 28.386719 5.085938 31.808594 C 6.046875 35.144531 7.722656 37.527344 10.210938 39.09375 C 10.84375 39.492188 11.65625 39.78125 12.441406 40.058594 C 12.886719 40.214844 13.320313 40.367188 13.675781 40.535156 C 14.003906 40.6875 14.003906 40.714844 14 40.988281 C 13.972656 43.359375 14 48.007813 14 48.007813 L 14.007813 49 L 15.789063 49 L 16.078125 48.71875 C 16.269531 48.539063 20.683594 44.273438 22.257813 42.554688 L 22.472656 42.316406 C 22.742188 42.003906 22.742188 42.003906 23.019531 42 C 25.144531 41.957031 27.316406 41.875 29.472656 41.757813 C 32.085938 41.617188 35.113281 41.363281 37.964844 40.175781 C 40.574219 39.085938 42.480469 37.355469 43.625 35.035156 C 44.820313 32.613281 45.527344 29.992188 45.792969 27.019531 C 46.261719 21.792969 45.929688 17.257813 44.78125 13.15625 Z M 35.382813 33.480469 C 34.726563 34.546875 33.75 35.289063 32.597656 35.769531 C 31.753906 36.121094 30.894531 36.046875 30.0625 35.695313 C 23.097656 32.746094 17.632813 28.101563 14.023438 21.421875 C 13.277344 20.046875 12.761719 18.546875 12.167969 17.09375 C 12.046875 16.796875 12.054688 16.445313 12 16.117188 C 12.050781 13.769531 13.851563 12.445313 15.671875 12.046875 C 16.367188 11.890625 16.984375 12.136719 17.5 12.632813 C 18.929688 13.992188 20.058594 15.574219 20.910156 17.347656 C 21.28125 18.125 21.113281 18.8125 20.480469 19.390625 C 20.347656 19.511719 20.210938 19.621094 20.066406 19.730469 C 18.621094 20.816406 18.410156 21.640625 19.179688 23.277344 C 20.492188 26.0625 22.671875 27.933594 25.488281 29.09375 C 26.230469 29.398438 26.929688 29.246094 27.496094 28.644531 C 27.574219 28.566406 27.660156 28.488281 27.714844 28.394531 C 28.824219 26.542969 30.4375 26.726563 31.925781 27.78125 C 32.902344 28.476563 33.851563 29.210938 34.816406 29.917969 C 36.289063 31 36.277344 32.015625 35.382813 33.480469 Z M 26.144531 15 C 25.816406 15 25.488281 15.027344 25.164063 15.082031 C 24.617188 15.171875 24.105469 14.804688 24.011719 14.257813 C 23.921875 13.714844 24.289063 13.199219 24.835938 13.109375 C 25.265625 13.035156 25.707031 13 26.144531 13 C 30.476563 13 34 16.523438 34 20.855469 C 34 21.296875 33.964844 21.738281 33.890625 22.164063 C 33.808594 22.652344 33.386719 23 32.90625 23 C 32.851563 23 32.796875 22.996094 32.738281 22.984375 C 32.195313 22.894531 31.828125 22.378906 31.917969 21.835938 C 31.972656 21.515625 32 21.1875 32 20.855469 C 32 17.628906 29.371094 15 26.144531 15 Z M 31 21 C 31 21.550781 30.550781 22 30 22 C 29.449219 22 29 21.550781 29 21 C 29 19.347656 27.652344 18 26 18 C 25.449219 18 25 17.550781 25 17 C 25 16.449219 25.449219 16 26 16 C 28.757813 16 31 18.242188 31 21 Z M 36.710938 23.222656 C 36.605469 23.6875 36.191406 24 35.734375 24 C 35.660156 24 35.585938 23.992188 35.511719 23.976563 C 34.972656 23.851563 34.636719 23.316406 34.757813 22.777344 C 34.902344 22.140625 34.976563 21.480469 34.976563 20.816406 C 34.976563 15.957031 31.019531 12 26.160156 12 C 25.496094 12 24.835938 12.074219 24.199219 12.21875 C 23.660156 12.34375 23.125 12.003906 23.003906 11.464844 C 22.878906 10.925781 23.21875 10.390625 23.757813 10.269531 C 24.539063 10.089844 25.347656 10 26.160156 10 C 32.125 10 36.976563 14.851563 36.976563 20.816406 C 36.976563 21.628906 36.886719 22.4375 36.710938 23.222656 Z"/></svg>
                          </div>
                          <div class="form__contact__name">Viber</div>
                        </div>
                      </label>
                    </div>
                    <input type="hidden" name="subject" value="Форма лид магнит">
                    <input class="form__input popup__magnet__input" name="phone" required placeholder="Введите ваш телефон">
                    <button class="btn form__btn popup__magnet__btn">
                      <span>Получить сейчас</span>
                    </button>
                    <div class="form__agreement">
                      <input type="checkbox" class="form__agreement__checkbox visually-hidden" checked id="agreement-9">
                      <label for="agreement-9" class="form__agreement__label"></label>
                      <div class="form__agreement__text">
                        Нажимая кнопку вы соглашаетесь с условиями
                        <a href="#popup-policy">
                          Политики конфиденциальности
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="popup" id="popup-policy">
    <div class="popup-wrap">
      <div class="policy container">
        <div class="close"></div>
        <div class="title policy-title">Политика конфиденциальности</div>
        <div class="policy-text">
          <p>г. Москва «__» марта 2021 г.</p>

<p>
Настоящая Политика в области обработки персональных данных и конфиденциальности персональной информации (далее — Политика) действует в отношении всей информации, размещенной на сайте в сети Интернет по адресу: _________ (далее — Сайт), которую посетители, другие пользователи Сайта могут получить о Пользователе во время использования Сайта, его сервисов, программ и продуктов. <br>
Использование сервисов Сайта означает безоговорочное согласие Пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями Пользователь должен воздержаться от использования сервисов Сайта, перечисленных в П.1.4. «Соглашения об использовании материалов сайта».<br>
</p>

<p>
1. Общие положения<br>
1.1. В рамках настоящей Политики под персональной информацией Пользователя понимаются:<br>
1.1.1. Персональная информация, которую Пользователь предоставляет о себе самостоятельно при регистрации (создании учетной записи) или в процессе использования сервисов Сайта, включая персональные данные Пользователя. Обязательная для предоставления сервисов информация помечена специальным образом. Иная информация предоставляется Пользователем на его усмотрение.<br>
1.1.2. Администрация Сайта в общем случае не проверяет достоверность персональной информации, предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако Администрация Сайта исходит из того, что пользователь предоставляет достоверную и достаточную персональную информацию по вопросам, предлагаемым в форме регистрации, и поддерживает эту информацию в актуальном состоянии. Риск предоставления недостоверной информации несет предоставивший ее пользователь.<br>
1.1.3. Данные, которые автоматически передаются сервисам Сайта в процессе их использования с помощью установленного на устройстве Пользователя программного обеспечения, в том числе IP-адрес, данные файлов cookie, информация о браузере Пользователя (или иной программе, с помощью которой осуществляется доступ к сервисам), технические характеристики оборудования и программного обеспечения, используемых Пользователем, дата и время доступа к сервисам, адреса запрашиваемых страниц и иная подобная информация.<br>
1.1.4. Иная информация о Пользователе, обработка которой предусмотрена Соглашением об использовании Сайта.<br>
1.1.5. Настоящая Политика конфиденциальности применяется только к Сайту https://tenderconsalt.com. Сайт не контролирует и не несет ответственности за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на Сайте
</p>

<p>
2. Цели обработки персональной информации пользователей<br>
2.1. Сайт собирает и хранит только ту персональную информацию, которая необходима для предоставления сервисов или исполнения соглашений и договоров с Пользователем, за исключением случаев, когда законодательством предусмотрено обязательное хранение персональной информации в течение определенного законом срока.<br>
2.2. Персональную информацию Пользователя Сайт обрабатывает в следующих целях:<br>
2.2.1. Идентификации Пользователя, зарегистрированного на Сайте, для использования всеми доступными сервисами Сайта, программами и продуктами.<br>
2.2.2. Предоставления Пользователю доступа к персонализированным ресурсам Сайта.<br>
2.2.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработку запросов и заявок от Пользователя.<br>
2.2.4. Улучшение качества работы Сайта, удобства использования, разработка новых сервисов и услуг.<br>
2.2.5. Осуществление рекламной деятельности.<br>
2.2.6. Проведение статистических и иных исследований на основе обезличенных данных.<br>
</p>

<p>
3. Условия обработки персональной информации пользователя и ее передачи третьим лицам<br>
3.1. Сайт хранит персональную информацию Пользователей в соответствии с внутренними регламентами конкретных сервисов.<br>
3.2. В отношении персональной информации Пользователя сохраняется ее конфиденциальность, кроме случаев добровольного предоставления Пользователем информации о себе для общего доступа неограниченному кругу лиц.<br>
3.3. Сайт вправе передать персональную информацию Пользователя третьим лицам в следующих случаях:<br>
3.3.1. Пользователь выразил согласие на такие действия.<br>
3.3.2. Передача необходима для использования Пользователем определенного сервиса либо для исполнения определенного соглашения или договора с Пользователем.<br>
3.3.4. Передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.<br>
3.3.5. В случае продажи Сайта к приобретателю переходят все обязательства по соблюдению условий настоящей Политики применительно к полученной им персональной информации. 3.3.6. В целях обеспечения возможности защиты прав и законных интересов Администрации Сайта или третьих лиц в случаях, когда пользователь нарушает Условия пользования Сайта.<br>
3.4. Обработка персональных данных Пользователя осуществляется без ограничения срока любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств. Обработка персональных данных Пользователей осуществляется в соответствии с Федеральным законом от 27.07.2006 № 152-ФЗ «О персональных данных».<br>
3.5. При утрате или разглашении персональных данных Администрация Сайта информирует Пользователя об утрате или разглашении персональных данных.<br>
3.6. Администрация Сайта принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.<br>
3.7. Администрация Сайта совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.<br>
</p>

<p>
4. Обязательства сторон<br>
4.1. Пользователь обязан:<br>
4.1.1. Предоставить информацию о персональных данных, необходимую для пользования сервисами Сайта, перечисленными в П.1.4. «Соглашения об использовании материалов сайта».<br>
4.1.2. Обновлять, дополнять, удалять предоставленную информацию о персональных данных или ее часть в случае изменения данной информации.<br>
4.2. Администрация Сайта обязана:<br>
4.2.1. Использовать полученную информацию исключительно для целей, указанных в настоящей Политике конфиденциальности.<br>
4.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением предусмотренных настоящей Политикой конфиденциальности.<br>
4.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемому для защиты такого рода информации в существующем деловом обороте.<br>
4.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки в случае выявления недостоверных персональных данных или неправомерных действий.<br>
</p>

<p>
5. Ответственность Сторон<br>
5.1. Администрация Сайта, не исполнившая свои обязательства, несет ответственность за убытки, понесенные Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации.<br>
5.2. В случае утраты или разглашения конфиденциальной информации Администрация Сайта не несет ответственности, если данная конфиденциальная информация:<br>
5.2.1. Стала публичным достоянием до ее утраты или разглашения.<br>
5.2.2. Была получена от третьей стороны до момента ее получения Администрацией Сайта.<br>
5.2.3. Была разглашена с согласия Пользователя.<br>
5.3. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией Сайта применяется действующее законодательство Российской Федерации.<br>
</p>

<p>
6. Дополнительные условия<br>
6.1. Администрация Сайта вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.<br>
6.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на Сайте, если иное не предусмотрено новой редакцией Политики конфиденциальности.<br>
6.3. Настоящая Политика конфиденциальности является неотъемлемой частью Пользовательского соглашения, размещенного на странице по адресу: ______________
</p>

        </div>
      </div>
    </div>
  </div>
  <script>
      function loadStyle(url){
        let link = document.createElement('link');
        link.href = url;
        link.rel = 'stylesheet';
        document.body.appendChild(link);
      }
      // loadStyle('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
      loadStyle('css/animate.css');
    </script>
    <script src="js/jquery-1.11.0.js"></script>
    <!-- <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script> -->
    <script src="js/typed.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
setTimeout(function(){
	var elem = document.createElement('script');
	elem.type = 'text/javascript';
	elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A861c42d07b4c73935a99dcb5ddfd9558eec4818220a9e8177c4630877097c141&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true';
	$('.contacts__map__wrap').append(elem);
}, 5000);

$('.header__adress__link').one('mouseenter', function(){
  var elem = document.createElement('script');
	elem.type = 'text/javascript';
	elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A861c42d07b4c73935a99dcb5ddfd9558eec4818220a9e8177c4630877097c141&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true';
	$('.map-place').append(elem);
})

</script>
<script src="js/main.js"></script>

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(83822356, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/83822356" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
