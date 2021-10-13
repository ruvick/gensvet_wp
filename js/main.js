// Файлы Java Script -----------------------------------------------------------------------------------------------------

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
  let matches = document.cookie.match(
    new RegExp(
      "(?:^|; )" +
        name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
        "=([^;]*)"
    )
  );
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function number_format() {
  let elements = document.querySelectorAll(".price_formator");
  for (let elem of elements) {
    elem.dataset.realPrice = elem.innerHTML;
    elem.innerHTML = Number(elem.innerHTML).toLocaleString("ru-RU");
  }
}

function set_size(sizeName) {
  let btn = document.getElementById("btn__to-card");
  btn.dataset.size = sizeName;
  console.log(sizeName);
}

document.addEventListener("DOMContentLoaded", () => {
  number_format();
  cart_recalc();
});

//--- Корзина -------------------------------------------------------------------------------------------------------------

let cart = [];
let cartCount = 0;

function cart_recalc() {
  cart = JSON.parse(localStorage.getItem("cart"));
  if (cart == null) cart = [];
  cartCount = 0;
  cartSumm = 0;
  for (let i = 0; i < cart.length; i++) {
    cartCount += Number(cart[i].count);

    cartSumm += Number(cart[i].count) * parseFloat(cart[i].price);
  }

  localStorage.setItem("cartcount", cartCount);
  localStorage.setItem("cartsumm", cartSumm);

  let elements = document.querySelectorAll(".bascet_counter");
  for (let elem of elements) {
    elem.innerHTML = cartCount;
  }
}

function add_tocart(elem, countElem) {
  let cartElem = {
    sku: elem.dataset.sku,
    size: elem.dataset.size,
    lnk: elem.dataset.lnk,
    price: elem.dataset.price,
    priceold: elem.dataset.oldprice,
    subtotal: elem.dataset.price,
    name: elem.dataset.name,
    count: countElem == 0 ? elem.dataset.count : countElem,
    picture: elem.dataset.picture,
  };

  if (cart.length == 0) {
    cart.push(cartElem);
  } else {
    let addet = true;
    for (let i = 0; i < cart.length; i++) {
      if (cart[i].sku == cartElem.sku && cart[i].size == cartElem.size) {
        cart[i].count++;
        cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
        addet = false;
        break;
      }
    }

    if (addet) cart.push(cartElem);
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  cart_recalc();

  console.log(cartElem);
}
//------------------------------------------------------------------------------------------------------------

// Файлы Java Script End -----------------------------------------------------------------------------------------------------

$ = jQuery;

// Файлы jQuery---------------------------------------------------------------------------------------------------------------

/* @license 
 * jQuery.print, version 1.6.2
 * Licence: CC-By (http://creativecommons.org/licenses/by/3.0/)
 *--------------------------------------------------------------------------*/
!function(h){"use strict";function f(e,t,n){for(var r,o,a,e=h(e),n=e.clone(t,n),i=e.find("textarea").add(e.filter("textarea")),l=n.find("textarea").add(n.filter("textarea")),c=e.find("select").add(e.filter("select")),d=n.find("select").add(n.filter("select")),s=e.find("canvas").add(e.filter("canvas")),f=n.find("canvas").add(n.filter("canvas")),p=0,u=i.length;p<u;++p)h(l[p]).val(h(i[p]).val());for(p=0,u=c.length;p<u;++p)for(r=0,o=c[p].options.length;r<o;++r)!0===c[p].options[r].selected&&(d[p].options[r].selected=!0);for(p=0,u=s.length;p<u;++p)(a=s[p].getContext("2d"))&&(f[p].getContext("2d").drawImage(s[p],0,0),h(f[p]).attr("data-jquery-print",a.canvas.toDataURL()));return n}function p(t){var n=h("");try{n=f(t)}catch(e){n=h("<span />").html(t)}return n}function u(t,e,n){var r=h.Deferred();try{t=t.contentWindow||t.contentDocument||t;try{t.resizeTo(window.innerWidth,window.innerHeight)}catch(e){console.warn(e)}var o=t.document||t.contentDocument||t;n.doctype&&o.write(n.doctype),o.write(e);try{for(var a=o.querySelectorAll("canvas"),i=0;i<a.length;i++){var l=a[i].getContext("2d"),c=new Image;c.onload=function(){l.drawImage(c,0,0)},c.src=a[i].getAttribute("data-jquery-print")}}catch(e){console.warn(e)}o.close();var d=!1,s=function(){if(!d){t.focus();try{t.document.execCommand("print",!1,null)||t.print(),h("body").focus()}catch(e){t.print()}t.close(),d=!0,r.resolve()}};h(t).on("load",s),setTimeout(s,n.timeout)}catch(e){r.reject(e)}return r}function y(e,t){return u(window.open(),e,t).always(function(){try{t.deferred.resolve()}catch(e){console.warn("Error notifying deferred",e)}})}function m(e){return"object"==typeof Node?e instanceof Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName}h.print=h.fn.print=function(){var e=this;e instanceof h&&(e=e.get(0)),m(e)?(o=h(e),0<arguments.length&&(t=arguments[0])):0<arguments.length?m((o=h(arguments[0]))[0])?1<arguments.length&&(t=arguments[1]):(t=arguments[0],o=h("html")):o=h("html");var e={globalStyles:!0,mediaPrint:!1,stylesheet:null,noPrintSelector:".no-print",iframe:!0,append:null,prepend:null,manuallyCopyFormValues:!0,deferred:h.Deferred(),timeout:750,title:null,doctype:"<!doctype html>"},t=h.extend({},e,t||{}),n=h("");if(t.globalStyles?n=h("style, link, meta, base, title"):t.mediaPrint&&(n=h("link[media=print]")),t.stylesheet){(h.isArray||Array.isArray)(t.stylesheet)||(t.stylesheet=[t.stylesheet]);for(var r=0;r<t.stylesheet.length;r++)n=h.merge(n,h('<link rel="stylesheet" href="'+t.stylesheet[r]+'">'))}var o,a=f(o,!0,!0);(a=h("<span/>").append(a)).find(t.noPrintSelector).remove(),a.append(f(n)),t.title&&(0===(o=h("title",a)).length&&(o=h("<title />"),a.append(o)),o.text(t.title)),a.append(p(t.append)),a.prepend(p(t.prepend)),t.manuallyCopyFormValues&&(a.find("input").each(function(){var e=h(this);e.is("[type='radio']")||e.is("[type='checkbox']")?e.prop("checked")&&e.attr("checked","checked"):e.attr("value",e.val())}),a.find("select").each(function(){h(this).find(":selected").attr("selected","selected")}),a.find("textarea").each(function(){var e=h(this);e.text(e.val())}));var i,l,c,d,s=a.html();try{t.deferred.notify("generated_markup",s,a)}catch(e){console.warn("Error notifying deferred",e)}if(a.remove(),t.iframe)try{i=s,c=h((l=t).iframe+""),0===(d=c.length)&&(c=h('<iframe height="0" width="0" border="0" wmode="Opaque"/>').prependTo("body").css({position:"absolute",top:-999,left:-999})),u(c.get(0),i,l).done(function(){setTimeout(function(){0===d&&c.remove()},1e3)}).fail(function(e){console.error("Failed to print from iframe",e),y(i,l)}).always(function(){try{l.deferred.resolve()}catch(e){console.warn("Error notifying deferred",e)}})}catch(e){console.error("Failed to print from iframe",e.stack,e.message),y(s,t)}else y(s,t);return this}}(jQuery);

// Отправка на печать
function printit() {
    
    $('.card-wrap-properties').hide();
    $('.card-tabs-wrap-features').show();
    $('.card-tabs-buttons__btn').hide();
    $('.card-tabs-wrap-features__title').show();

    $('#card').print();

    setTimeout(() => {
      $('.card-tabs-buttons__btn').show();
      $('.card-wrap-properties').show();
      $('.card-tabs-wrap-features').hide();
      $('.card-tabs-wrap-features.active').show();
      $('.card-tabs-wrap-features__title').hide();
    }, 500);
}

// Отправка на генерацию PDF
function generatePDF() {
    const element = document.getElementById('card');
    const opt = {
      margin:       1,
      filename:     'file.pdf',
      image:        { type: 'jpeg', quality: 0.98 },
      html2canvas:  { scale: 1 },
      jsPDF:        { unit: 'in', format: 'a2', orientation: 'portrait' }
    };
    
    $('.card-tabs-wrap-features__title').show();
    $('.card-wrap-properties').hide();
    $('.card-tabs-wrap-features').show();
    $('.card-tabs-buttons__btn').hide();

    // New Promise-based usage:
    html2pdf().set(opt).from(element).save();

    setTimeout(() => {
      $('.card-tabs-buttons__btn').show();
      $('.card-wrap-properties').show();
      $('.card-tabs-wrap-features').hide();
      $('.card-tabs-wrap-features.active').show();
      $('.card-tabs-wrap-features__title').hide();
    }, 500);
}

// Маска телефона
var inputmask_phone = { mask: "+9(999)999-99-99" };
jQuery("input[type=tel]").inputmask(inputmask_phone);

let checkbox = $(".subscription-wrap-form-wrap");
let input = $(".subscription-wrap-form-wrap__checkbox-hidden");

checkbox.on("click", function () {
  let currentInput = $(this).parent().find(input);
  if (currentInput.prop("checked") == true) {
    currentInput.prop("checked", false);
  } else {
    currentInput.prop("checked", true);
  }
});

// modal
// $('.modal-overlay').on('click', function () {
// 	$(this).parent().hide();
// });
// $('.modal__close').on('click', function () {
// 	$(this).parent().parent().hide();
// });

// float menu
$(window).scroll(function () {
  if ($(this).scrollTop() > 40) {
    $(".header-bottom").addClass("fixed");
    $(".header").addClass("fixed");
    $(".header-bottom-wrap-link").addClass("hidden");
    $(".production-top-right__btn").removeClass("hidden");
    $(".header-bottom-wrap-menu-item:first-child").addClass("margin-left");
  } else {
    $(".header-bottom").removeClass("fixed");
    $(".header").removeClass("fixed");
    $(".header-bottom-wrap-link").removeClass("hidden");
    $(".production-top-right__btn").addClass("hidden");
    $(".header-bottom-wrap-menu-item:first-child").removeClass("margin-left");
  }
});

// tabs card
$(".card-tabs-buttons__btn").on("click", function () {
  $(".card-tabs-buttons__btn").removeClass("active");
  $(".card-tabs-wrap-features").hide();

  let target = $(this).attr("data-target");

  $(this).addClass("active");
  $(".card-tabs-wrap-features[data-target=" + target + "]").show();
});

// tabs calculator
$(".calculator-top-buttons__btn").on("click", function () {
  $(".calculator-top-buttons__btn").removeClass("active");
  $(".calculator-bottom-tab").hide();

  let target = $(this).attr("data-target");

  $(this).addClass("active");
  $(".calculator-bottom-tab[data-target=" + target + "]").show();
});

// tabs certificates
$(".certificates-wrap-buttons__btn").on("click", function () {
  $(".certificates-wrap-buttons__btn").removeClass("active");
  $(".certificates-wrap-tabs-tab").hide().removeClass("active");

  let target = $(this).attr("data-target");

  $(this).addClass("active");
  $(".certificates-wrap-tabs-tab[data-target=" + target + "]")
    .show()
    .addClass("active");
});

// lines
$(".lines-wrap-filter-card-features__btn").on("click", function () {
  $(this).toggleClass("active");
});

$(".lines-wrap-filter-card-btn").on("click", function () {
  $(this).toggleClass("active");
  $(this).parent().find(".lines-wrap-filter-card-range").slideToggle();
  $(this).parent().find(".lines-wrap-filter-card-features").slideToggle();
});

// scroll
$(".footer-link-2").click(function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

// select add slide
$(".calculator-bottom-wrap-left-add").on("click", function () {
  $(this).toggleClass("active");
  $(".calculator-bottom-wrap-left-options").slideToggle(300);
});

// popup sertificates
$(".certificates-wrap-tabs-tab-card").on("click", function (event) {
  event.preventDefault();
  // Вот тут считываем дата аттрибуты

  let current = $(this).attr("data-target");

  let imgCertSrc = $(this).attr("data-src");

  let butCert = $(this).attr("data-src");

  $(".certificates-popup-wrap__btn").attr("href", butCert);

  $(".certificates-popup__img").attr("src", imgCertSrc);

  $(".certificates-popup-wrap__title").html(jQuery(this).data("title"));

  $(".certificates-popup-wrap__desc").html(jQuery(this).data("sub"));

  $(".certificates-popup-container[data-target=" + current + "]")
    .show()
    .css("display", "flex");
});

$(".certificates-wrap-tabs-tab-card-adw").on("click", function (event) {
  event.preventDefault();
  // Вот тут считываем дата аттрибуты

  let current = $(this).attr("data-target");

  let imgAwards = $(this).attr("data-src");

  let butAwards = $(this).attr("data-src");

  $("#imgAwards").attr("src", imgAwards);

  $("#butAwards").attr("href", butAwards);

  $(".certificates-popup-wrap__title").html(jQuery(this).data("title"));

  $(".certificates-popup-wrap__desc").html(jQuery(this).data("sub"));

  $(".certificates-popup-container[data-target=" + current + "]")
    .show()
    .css("display", "flex");
});

$(".certificates-popup-overlay").on("click", function (event) {
  event.preventDefault();
  $(".certificates-popup-container").hide();
});

$(".certificates-popup__close").on("click", function (event) {
  event.preventDefault();
  $(".certificates-popup-container").hide();
});

// Burger menu
$(".header-bottom-wrap-menu-btn-767").on("click", function () {
  $(this).toggleClass("active");
  $(this).parent().parent().parent().toggleClass("active");
  $(".header-top").toggleClass("active");
  $(".header-bottom-wrap-menu-btn-767__img").toggleClass("active");
  $(".header-bottom-wrap-menu-btn-767__img--close").toggleClass("active");
  $(".header-bottom-wrap-menu-767").slideToggle(200);
  $(".header-bottom-wrap-search").toggleClass("active");
  $(".header-bottom-wrap-search-hidden__input").attr("placeholder", "Поиск...");
});

$(".header-bottom-wrap-menu > .header-bottom-wrap-menu-item.menu-item-has-children > .header-bottom-wrap-menu-item__link").on("click", function (event) {
  event.preventDefault();

  $(".header-bottom-wrap-menu-item__link").not(this).removeClass("active");
  $(".header-bottom-wrap-menu-item__link")
    .not(this)
    .siblings(".header-bottom-wrap-menu-item-submenu")
    .slideUp();

  $(this).toggleClass("active");
  $(this).siblings(".header-bottom-wrap-menu-item-submenu").slideToggle();
});

$(".header-bottom-wrap-menu .header-bottom-wrap-menu-item-submenu > .header-bottom-wrap-menu-item.menu-item-has-children > .header-bottom-wrap-menu-item__link").on("click", function (event) {
  event.preventDefault();

  $(this).toggleClass("active");
  $(this).siblings(".header-bottom-wrap-menu-item-submenu").slideToggle();
});

$(".header-bottom-wrap-menu-767 > .header-bottom-wrap-menu-item.menu-item-has-children > .header-bottom-wrap-menu-item__link").on("click", function (event) {
  event.preventDefault();

  $(".header-bottom-wrap-menu-item__link").not(this).removeClass("active");
  $(".header-bottom-wrap-menu-item__link")
    .not(this)
    .siblings(".header-bottom-wrap-menu-item-submenu")
    .slideUp();

  $(this).toggleClass("active");
  $(this).siblings(".header-bottom-wrap-menu-item-submenu").slideToggle();
});

$(".header-bottom-wrap-menu-767 .header-bottom-wrap-menu-item-submenu > .header-bottom-wrap-menu-item.menu-item-has-children > .header-bottom-wrap-menu-item__link").on("click", function (event) {
  event.preventDefault();

  $(this).toggleClass("active");
  $(this).siblings(".header-bottom-wrap-menu-item-submenu").slideToggle();
});

$(".menu-item-has-children .header-bottom-wrap-menu-item-submenu-item__link").on(
  "click",
  function (event) {

    event.preventDefault();
    
    $(".header-bottom-wrap-menu-item-submenu-item__link")
      .not(this)
      .removeClass("active");
    $(".header-bottom-wrap-menu-item-submenu-item__link")
      .not(this)
      .siblings(".header-bottom-wrap-menu-item-submenu-item-subsubmenu")
      .slideUp();

    $(this).toggleClass("active");
    $(this)
      .siblings(".header-bottom-wrap-menu-item-submenu-item-subsubmenu")
      .slideToggle();
  }
);

$(document).mouseup(function (e) {
  var parent = $(".header-bottom-wrap-menu");
  var parentMobile = $(".header-bottom-wrap-menu-767");

  if ($(window).width() > 768) {
    if ( (!parent.is(e.target) && parent.has(e.target).length === 0 ) ) {
      $(".header-bottom-wrap-menu-item-submenu-item__link")
        .not(this)
        .removeClass("active");
      $(".header-bottom-wrap-menu-item-submenu-item__link")
        .not(this)
        .siblings(".header-bottom-wrap-menu-item-submenu-item-subsubmenu")
        .slideUp();

      $(".header-bottom-wrap-menu-item__link").not(this).removeClass("active");
      $(".header-bottom-wrap-menu-item__link")
        .not(this)
        .siblings(".header-bottom-wrap-menu-item-submenu")
        .slideUp();
    }
  } else {
      if (!parentMobile.is(e.target) && parentMobile.has(e.target).length === 0) {
        $(".header-bottom-wrap-menu-item-submenu-item__link")
          .not(this)
          .removeClass("active");
        $(".header-bottom-wrap-menu-item-submenu-item__link")
          .not(this)
          .siblings(".header-bottom-wrap-menu-item-submenu-item-subsubmenu")
          .slideUp();

        $(".header-bottom-wrap-menu-item__link").not(this).removeClass("active");
        $(".header-bottom-wrap-menu-item__link")
          .not(this)
          .siblings(".header-bottom-wrap-menu-item-submenu")
          .slideUp();
      }
  }
});


// lines filter
$(".lines-button-767").on("click", function () {
  $(this).toggleClass("active");
  $(this).siblings(".lines-wrap").find(".lines-wrap-filter").slideToggle();
});

// Открытие модальных окон
$(".popup-instruction").on("click", function (e) {
  e.preventDefault();
  jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
  jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
  jQuery("#instruction").arcticmodal();
});

$(".popup-price-list").on("click", function (e) {
  e.preventDefault();
  jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
  jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
  jQuery("#price-list").arcticmodal();
});

//OPTION
$.each($(".option.active"), function (index, val) {
  $(this).find("input").prop("checked", true);
});
$(".option").click(function (event) {
  if (!$(this).hasClass("disable")) {
    var target = $(event.target);
    if (!target.is("a")) {
      if ($(this).hasClass("active") && $(this).hasClass("order")) {
        $(this).toggleClass("orderactive");
      }
      $(this).parents(".options").find(".option").removeClass("active");
      $(this).toggleClass("active");
      $(this).children("input").prop("checked", true);
    }
  }
});

//Валидация + Отправщик Скачать инструкцию
$(".newButton").click(function (e) {
  e.preventDefault();
  const name = $("#form-instruction-name").val();
  const tel = $("#form-instruction-tel").val();
  const email = $("#form-instruction-email").val();

  if (jQuery("#form-instruction-tel").val() == "") {
    jQuery("#form-instruction-tel").css("border", "1px solid red");
    return;
  } else {
    var jqXHR = jQuery.post(allAjax.ajaxurl, {
      action: "sendinstruction",
      nonce: allAjax.nonce,
      name: name,
      tel: tel,
      email: email,
    });

    jqXHR.done(function (responce) {
      jQuery("#instruction .headen_form_blk").hide();
      jQuery("#instruction .SendetMsg").show();
    });

    jqXHR.fail(function (responce) {
      alert("Произошла ошибка. Попробуйте позднее.");
    });
  }
});

//Валидация + Отправщик Скачать прайс-лист
$(".newButtonPrice").click(function (e) {
  e.preventDefault();
  const name = $("#form-price-name").val();
  const tel = $("#form-price-tel").val();
  const email = $("#form-price-email").val();

  if (jQuery("#form-price-tel").val() == "") {
    jQuery("#form-price-tel").css("border", "1px solid red");
    return;
  } else {
    var jqXHR = jQuery.post(allAjax.ajaxurl, {
      action: "sendprice",
      nonce: allAjax.nonce,
      name: name,
      tel: tel,
      email: email,
    });

    jqXHR.done(function (responce) {
      jQuery("#price-list .headen_form_blk").hide();
      jQuery("#price-list .SendetMsg").show();
    });

    jqXHR.fail(function (responce) {
      alert("Произошла ошибка. Попробуйте позднее.");
    });
  }
});

//Валидация + Отправщик Окно подписка
$(".newButtonSubscribe").click(function (e) {
  e.preventDefault();
  const email = $("#form-subscribe-email").val();

  if (jQuery("#form-subscribe-email").val() == "") {
    jQuery("#form-subscribe-email").css("border", "1px solid red");
    return;
  } else {
    var jqXHR = jQuery.post(allAjax.ajaxurl, {
      action: "sendsubscribe",
      nonce: allAjax.nonce,
      email: email,
    });

    jqXHR.done(function (responce) {
      jQuery(".subscription .headen_form_blk").hide();
      jQuery(".subscription .SendetMsg").show();
    });

    jqXHR.fail(function (responce) {
      alert("Произошла ошибка. Попробуйте позднее.");
    });
  }
});

//Валидация + Отправщик Окно Рассчитать стоимость
$(".calculatorFormBtn").click(function (e) {
  e.preventDefault();
  const inputEmail = $(this).parent().find('.calculator-bottom-wrap-left-email__input');
  const email = inputEmail.val();
  console.log(email);

  if (email == "") {
    inputEmail.css("border", "1px solid red");
    return;
  } else {
    var jqXHR = jQuery.post(allAjax.ajaxurl, {
      action: "sendcalcresult",
      nonce: allAjax.nonce,
      email: email,
    });

    jqXHR.done(function (responce) {
      jQuery(".calculator-bottom-wrap-left-email .calculator-bottom-wrap-left-email-wrap").hide();
      jQuery(".calculator-bottom-wrap-left-email .SendetMsg").show();
    });

    jqXHR.fail(function (responce) {
      alert("Произошла ошибка. Попробуйте позднее.");
    });
  }
});
