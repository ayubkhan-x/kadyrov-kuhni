new WOW().init();

$(document).on('scroll', function() {
  var documentScroll = $(document).scrollTop();
  $('.nav li a').each(function () {
    var hash = $(this).attr("href");
    var target = $(hash);
    if (target.length) {
        if (target.position().top - $(".header").innerHeight() <= documentScroll && target.position().top + target.outerHeight() > documentScroll) {
            $('.nav li a').removeClass("active");
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    }
  });
//   if ($('#designer').position().top - 400 - $(".header").innerHeight() <= documentScroll && $('#designer').position().top - 400  + $('#designer').outerHeight() > documentScroll) {
//     $('.designer__subtitle--crossed').addClass('cross');
//   } 
});


$('.promo__slider').slick({
  infinite: true,
  // autoplay: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  variableWidth: true,
  dots: true,
  arrows: true,
  appendArrows: $(".promo__slider__arrows"),
  appendDots: $(".promo__slider__dots"),
  lazyLoad: 'ondemand',
  prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
  nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
  responsive: [
    {
      breakpoint: 699,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});

$('#manufactory-slider').slick({
  infinite: true,
  // autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  appendArrows: $(".photo__slider__arrows--man"),
  appendDots: $(".photo__slider__dots--man"),
  prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
  nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
  lazyLoad: 'ondemand',
});

$('#showroom-slider').slick({
  infinite: true,
  // autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  appendArrows: $(".photo__slider__arrows--show"),
  appendDots: $(".photo__slider__dots--show"),
  prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
  nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
  lazyLoad: 'ondemand',
});

$('.designer__slider').slick({
  infinite: true,
  // autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  dots: true,
  appendDots: $(".designer__slider__dots"),
  arrows: true,
  appendArrows: $(".designer__slider__arrows"),
  prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
  nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
  lazyLoad: 'ondemand',
});

$('.designer__slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
  $('#designer-name').html($('.designer__slider .slick-slide.slick-current').data('name'))
});

$('.fs-form__slider__gift').slick({
  infinite: true,
  // autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  asNavFor: '.fs-form__slider__text',
  appendArrows: $(".fs-form__slider__gift__arrows"),
  appendDots: $(".fs-form__slider__gift__dots"),
  prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
  nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
  lazyLoad: 'ondemand',
});



$('.fs-form__slider__text').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  fade: true,
  draggable: false,

});

$('.fs-form__data__choose').on('click', function(){
  $(this).toggleClass('active');
  $('.fs-form__data__choose--vars').slideToggle();
})

$('.fs-form__data__choose--vars li').on('click', function(){
  $('.fs-form__data__choose p').html($(this).html())
  $('#form-gift').val($(this).html());
})


$(".nav").on("click",".anchor", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top-150}, 1000);
});


$(".block-ref").on("click", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top-150}, 1000);
});

$('input[name="phone"]').mask("+7(999) 999-99-99");


$('.popup-wrap, .close').on('click', function(e){
  if (e.target == this){
    $(this).closest('.popup').fadeOut();
  }
})

var hash = window.location.hash;
if(hash == '#popup-policy'){
  console.log(hash);
  $('#popup-policy').fadeIn()
}

$('a[href="#popup-policy"]').on('click', function(e){
  e.preventDefault();
  $('#popup-policy').fadeIn()
})


$('.cases__item[data-popup]').on('click', function(){
  var id = $(this).data('case');
  $('#case-placeholder').html('');
  $('#popup-cases').fadeIn();
    $.ajax({
        url: 'templates/cases/' + id +'.html',
        type: 'GET',
        success: function (response) {
            $('#case-placeholder').html(response);
            $('.case-container__slider').slick({
              infinite: true,
              // autoplay: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              arrows: true,
              appendArrows: $(".case-container__slider__arrows"),
              appendDots: $(".case-container__slider__dots"),
              prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
              nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
              lazyLoad: 'ondemand',
            });
        }
  });
})

$('.cases__more').on('click', function(){
    $.ajax({
        url: 'templates/cases/more-kitchens.html',
        type: 'GET',
        success: function (response) {
            $('.cases__more-wrap').hide();
            $('.cases__content').append(response);
	    $('.cases__item[data-popup]').on('click', function(){
  var id = $(this).data('case');
  $('#case-placeholder').html('');
  $('#popup-cases').fadeIn();
    $.ajax({
        url: 'templates/cases/' + id +'.html',
        type: 'GET',
        success: function (response) {
            $('#case-placeholder').html(response);
            $('.case-container__slider').slick({
              infinite: true,
              // autoplay: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              arrows: true,
              appendArrows: $(".case-container__slider__arrows"),
              appendDots: $(".case-container__slider__dots"),
              prevArrow: '<button type="button" class="slider-prev slider-arrow"></button>',
              nextArrow: '<button type="button" class="slider-next slider-arrow"></button>',
              lazyLoad: 'ondemand',
            });
        }
  });
})        }
  });
})


// $('.gallery__more').on('click', function(){
//   $.ajax({
//       url: 'templates/photos/more-photos.html',
//       type: 'GET',
//       success: function (response) {
//           $('.gallery__more-wrap').hide();
//           $('.gallery__content').append(response);
//       }
// });
// })

$('.steps__tab').on('click', function(){
  if (!($(this).hasClass('active'))){
    $('.steps__tab').removeClass('active');
    $('.steps__tab-content').removeClass('active');
    $(this).addClass('active');
    $($(this).data('rel')).addClass('active');
  }
})

$("#typed").typed({
  strings: ["Проектируем", "Рисуем", "Производим","Доставляем", "Устанавливаем"],
  // Зациклить
  loop: true,
  loopCount: false,
  showCursor: true,
  cursorChar: "|",
  contentType: 'text',
  typeSpeed: 75,
  backDelay: 500,
});

var MAX_Q = 8;

function track (num){
  $('#q_progress_val').html(Math.round(Number(num/MAX_Q*100)))
  $('#q_progress').css('width', num/MAX_Q*100 + '%');
  $('body,html').animate({scrollTop: $('#calc').offset().top + 150}, 1000);
}


$('.one-answ .quiz__answer__radio').on('change', function(){
  var id = Number($(this).closest('.quiz__question').data('question'));

  switch (id) {
    case 1:
      ym(83822356,'reachGoal','step1');
      break;
    case 2:
      ym(83822356,'reachGoal','step2');
      break;
    case 3:
      ym(83822356,'reachGoal','step3');
      break;
    case 4:
      ym(83822356,'reachGoal','step4');
      break;
    case 5:
      ym(83822356,'reachGoal','step5');
      break;
    case 6:
      ym(83822356,'reachGoal','step6');
      break;
    case 7:
      ym(83822356,'reachGoal','step7');
      break;
    case 8:
      ym(83822356,'reachGoal','step8');
      break;
  }

  id += 1;
  var q = $(this).closest('.quiz__question');
  var btn = $(q).find('.quiz__btn-next');
  $(btn).prop('disabled', false);
  $('.quiz__question').removeClass('active');
  $('.quiz__question[data-question="' + id +'"]').addClass('active');
  track(id);
  if (id > MAX_Q){
    $('.quiz__form, .quiz__info').hide();
    $('.quiz__final').addClass('active');
    window.setTimeout(function () {
      $('.quiz__final__load').fadeOut();
  }, 2000);
  }
})

$('.quiz__answer__unknown').on('change', function(){
  var id = Number($(this).closest('.quiz__question').data('question'));
  id += 1;
  var q = $(this).closest('.quiz__question');
  var btn = $(q).find('.quiz__btn-next');
  $(btn).prop('disabled', false);
  $('.quiz__question').removeClass('active');
  $('.quiz__question[data-question="' + id +'"]').addClass('active');
  track(id);
})

$('.quiz__answer__noone').on('change', function(){
  if ($(this).prop('checked')){
    var id = Number($(this).closest('.quiz__question').data('question'));
    id += 1;
    var q = $(this).closest('.quiz__question');
    var btn = $(q).find('.quiz__btn-next');
    $(btn).prop('disabled', false);
    $('.quiz__question').removeClass('active');
    var answ = $(q).find('.quiz__answer__checkbox');
    $(answ).prop('checked', false);
    $('.quiz__question[data-question="' + id +'"]').addClass('active');
    track(id);
  }
  else{
    var q = $(this).closest('.quiz__question');
    var btn = $(q).find('.quiz__btn-next');
    $(btn).prop('disabled', true);
  }
})

$('.quiz__answer__checkbox').on('change', function(){
  var q = $(this).closest('.quiz__question');
  var noone = $(q).find('.quiz__answer__noone');
  if (noone){
    $(noone).prop('checked', false);
  }
  var btn = $(q).find('.quiz__btn-next');
  var check = $(q).find('input[type=checkbox]:checked');
  if (check.length > 0){
    $(btn).prop('disabled', false);
  }
  else{
    $(btn).prop('disabled', true);
  }
})

function check_values(){
  var fill = true;
  $('.quiz__size__input.req').each(function(){
    if ($(this).val() == ''){
      fill = false;
      return false;
    }
  })
  return fill;
}

$('.quiz__size__input').on('keyup', function(){
  $('#quiz-values').prop('checked', true);
  var q = $(this).closest('.quiz__question');
  var btn = $(q).find('.quiz__btn-next');
  if (check_values()){
    $(btn).prop('disabled', false);
  }
  else{
    $(btn).prop('disabled', true);
  }
})

$('.quiz__size__input').on('focus', function(){
  $('#quiz-values').prop('checked', true);
  var q = $(this).closest('.quiz__question');
  var btn = $(q).find('.quiz__btn-next');
  if (check_values()){
    $(btn).prop('disabled', false);
  }
  else{
    $(btn).prop('disabled', true);
  }
})

$('#quiz-values').on('change', function(){
  var q = $(this).closest('.quiz__question');
  var btn = $(q).find('.quiz__btn-next');
  if (check_values()){
    $(btn).prop('disabled', false);
  }
  else{
    $(btn).prop('disabled', true);
  }
})



$('.quiz__answer__radio[name="q_gift"]').on('change', function(){
  var gift = $(this).data('gift');
  var img = $(this).data('imgsrc');
  var i_class = $(this).data('class');
  $('#quiz_pic').removeClass().addClass(i_class);
  $('#quiz_gift').attr("src", img);
  $('.quiz__final__gift__text--val').html(gift)
})

$('.quiz__btn-prev').on('click', function(){
  
  var id = Number($(this).closest('.quiz__question').data('question'));
  id -= 1;
  track(id);
  $('.quiz__question').removeClass('active');
  $('.quiz__question[data-question="' + id +'"]').addClass('active');
})

$('.quiz__btn-next').on('click', function(){
  var id = Number($(this).closest('.quiz__question').data('question'));
  id += 1;
  track(id);
  $('.quiz__question').removeClass('active');
  $('.quiz__question[data-question="' + id +'"]').addClass('active');
})

$('.quiz__answer__radio[data-dynamic="2"]').on('change', function(){
  var a = $(this).data('aside');
  var b = $(this).data('bside');
  var c = $(this).data('cside');
  var len = $(this).data('len');

  if (a == '1'){
    $("#q_a").show()
    $("#q_a input").addClass('req')
  }
  else{
    $("#q_a").hide()
    $("#q_a input").removeClass('req')
  }
  if (b == '1'){
    $("#q_b").show()
    $("#q_b input").addClass('req')
  }
  else{
    $("#q_b").hide()
    $("#q_b input").removeClass('req')
  }
  if (c == '1'){
    $("#q_c").show()
    $("#q_c input").addClass('req')
  }
  else{
    $("#q_c").hide()
    $("#q_c input").removeClass('req')
  }
  if (len == '1'){
    $("#q_len").show()
    $("#q_len input").addClass('req')
  }
  else{
    $("#q_len").hide()
    $("#q_len input").removeClass('req')
  }
  var img = $(this).data('imgsrc');
  $('#q_img').attr('src', img);
})


$('.header__burger').on('click', function(){
  $(this).toggleClass('active');
  $('.nav').slideToggle();
})

$('#myfile').on('change', function(){
  var fname = $(this).val().split('\\').pop().split('/').pop();
  if (!(fname)){
    fname = 'Файл не выбран'
  }
  $('#filename').html(fname)
})

$('.designer__form__question__head').on('click', function(){
  var q = $(this).closest('.designer__form__question');
  var answ = $(q).find('.designer__form__question__answ');
  var btn = $(q).find('.designer__form__question__btn');

  if ($(btn).hasClass('active')){
    $(btn).toggleClass('active');
    $(answ).slideToggle()
  }
  else{
    $('.designer__form__question__answ').slideUp();
    $('.designer__form__question__btn').removeClass('active');
    $(btn).toggleClass('active');
    $(answ).slideToggle()
  }
})

$('.promo__slider__item__btn').on('click', function(){
  var promo = $(this).data('promo');
  $('#promo-name').html(promo);
  $('#promo-val').val(promo);
  $('#popup-promo').fadeIn();
})

var map_created = false;

$('#map-area-btn').on('click', function(){
  var src = $(this).data('src');
  $('.contacts__map__controls__btn').removeClass('active')
  if (!map_created){
    var elem = document.createElement('script');
    elem.type = 'text/javascript';
    elem.src = src;
    $('#map-area').append(elem);
    map_created = true;
  }
  $('#map-showroom').hide()
  $('#map-area').show()
  $(this).addClass('active')
})

$('#map-showroom-btn').on('click', function(){
  var src = $(this).data('src');
  $('.contacts__map__controls__btn').removeClass('active')
  $('#map-area').hide()
  $('#map-showroom').show()
  $(this).addClass('active')
})

var vent_visit = get_cookie("vent_visit");
  $(document).mouseleave(function (event) {
    if (get_cookie("mk_visit") != '1'){
      event = event || window.event;
      if (event.clientY < 0 || event.clientY < 3) {
          $('#popup-magnet').fadeIn();
          var date2 = new Date();
          date2.setDate(date2.getDate() + 7);
          date2 = date2.toUTCString();
          document.cookie = "mk_visit=1;expires=" + date2;
        }
    }
  });

function get_cookie(cookie_name) {
  var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

  if (results)
    return (unescape(results[2]));
  else
    return null;
}

// $('form').on('submit', function(e){
//   e.preventDefault();
//   var fd = new FormData(this);
//   var redirect = $(this).data('redirect');
//   if (!redirect){
//     redirect = "/thanks.ph  p"
//   }
//   if ($(this).attr('action')){
//     url = $(this).attr('action');
//   }
//   else{
//     url = 'thanks.php'
//   }
//   var file_link = $(this).data('download');
//   $.ajax({
//         url: url,
//         data: fd,
//         processData: false,
//         contentType: false,
//         type: 'POST',
//         success: function (response) {
//         	if (file_link){
//         		var link = document.createElement('a');
// 		        link.setAttribute('href', file_link);
// 		        link.setAttribute('download','download');
// 		        link.click();
//         	}
//             location.href = redirect;
//         }
//   });
// })
