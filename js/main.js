// Файлы Java Script -----------------------------------------------------------------------------------------------------

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}


function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

function set_size(sizeName) {
	let btn = document.getElementById('btn__to-card');
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

	let elements = document.querySelectorAll('.bascet_counter');
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
		count: (countElem == 0) ? elem.dataset.count : countElem,
		picture: elem.dataset.picture
	};

	if (cart.length == 0) {
		cart.push(cartElem);
	} else {
		let addet = true;
		for (let i = 0; i < cart.length; i++) {
			if ((cart[i].sku == cartElem.sku) && (cart[i].size == cartElem.size)) {
				cart[i].count++;
				cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
				addet = false;
				break;
			}
		}

		if (addet)
			cart.push(cartElem);
	}

	localStorage.setItem("cart", JSON.stringify(cart));
	cart_recalc();

	console.log(cartElem);
}
//------------------------------------------------------------------------------------------------------------

//BodyLock для Popup на JS
// function body_lock(delay) {
// 	let body = document.querySelector("body");
// 	if (body.classList.contains('lock')) {
// 		body_lock_remove(delay);
// 	} else {
// 		body_lock_add(delay);
// 	}
// }
// function body_lock_remove(delay) {
// 	let body = document.querySelector("body");
// 	if (unlock) {
// 		let lock_padding = document.querySelectorAll("._lp");
// 		setTimeout(() => {
// 			for (let index = 0; index < lock_padding.length; index++) {
// 				const el = lock_padding[index];
// 				el.style.paddingRight = '0px';
// 			}
// 			body.style.paddingRight = '0px';
// 			body.classList.remove("lock");
// 		}, delay);

// 		unlock = false;
// 		setTimeout(function () {
// 			unlock = true;
// 		}, delay);
// 	}
// }
// function body_lock_add(delay) {
// 	let body = document.querySelector("body");
// 	if (unlock) {
// 		let lock_padding = document.querySelectorAll("._lp");
// 		for (let index = 0; index < lock_padding.length; index++) {
// 			const el = lock_padding[index];
// 			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
// 		}
// 		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
// 		body.classList.add("lock");

// 		unlock = false;
// 		setTimeout(function () {
// 			unlock = true;
// 		}, delay);
// 	}
// }

// Popup JS
// let unlock = true;
// let popup_link = document.querySelectorAll('._popup-link');
// let popups = document.querySelectorAll('.popup');
// for (let index = 0; index < popup_link.length; index++) {
// 	const el = popup_link[index];
// 	el.addEventListener('click', function (e) {
// 		if (unlock) {
// 			let item = el.getAttribute('href').replace('#', '');
// 			let video = el.getAttribute('data-video');
// 			popup_open(item, video);
// 		}
// 		e.preventDefault();
// 	})
// }
// for (let index = 0; index < popups.length; index++) {
// 	const popup = popups[index];
// 	popup.addEventListener("click", function (e) {
// 		if (!e.target.closest('.popup__body')) {
// 			popup_close(e.target.closest('.popup'));
// 		}
// 	});
// }
// function popup_open(item, video = '') {
// 	let activePopup = document.querySelectorAll('.popup._active');
// 	if (activePopup.length > 0) {
// 		popup_close('', false);
// 	}
// 	let curent_popup = document.querySelector('.popup_' + item);
// 	if (curent_popup && unlock) {
// 		if (video != '' && video != null) {
// 			let popup_video = document.querySelector('.popup_video');
// 			popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
// 		}
// 		if (!document.querySelector('.menu__body._active')) {
// 			body_lock_add(500);
// 		}
// 		curent_popup.classList.add('_active');
// 		history.pushState('', '', '#' + item);
// 	}
// }
// function popup_close(item, bodyUnlock = true) {
// 	if (unlock) {
// 		if (!item) {
// 			for (let index = 0; index < popups.length; index++) {
// 				const popup = popups[index];
// 				let video = popup.querySelector('.popup__video');
// 				if (video) {
// 					video.innerHTML = '';
// 				}
// 				popup.classList.remove('_active');
// 			}
// 		} else {
// 			let video = item.querySelector('.popup__video');
// 			if (video) {
// 				video.innerHTML = '';
// 			}
// 			item.classList.remove('_active');
// 		}
// 		if (!document.querySelector('.menu__body._active') && bodyUnlock) {
// 			body_lock_remove(500);
// 		}
// 		history.pushState('', '', window.location.href.split('#')[0]);
// 	}
// }
// let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
// if (popup_close_icon) {
// 	for (let index = 0; index < popup_close_icon.length; index++) {
// 		const el = popup_close_icon[index];
// 		el.addEventListener('click', function () {
// 			popup_close(el.closest('.popup'));
// 		})
// 	}
// }
// document.addEventListener('keydown', function (e) {
// 	if (e.code === 'Escape') {
// 		popup_close();
// 	}
// });
// Файлы Java Script End -----------------------------------------------------------------------------------------------------

$ = jQuery;

// Файлы jQuery---------------------------------------------------------------------------------------------------------------

// Маска телефона
var inputmask_phone = { "mask": "+9(999)999-99-99" };
jQuery("input[type=tel]").inputmask(inputmask_phone);


let checkbox = $('.subscription-wrap-form-wrap');
let input = $('.subscription-wrap-form-wrap__checkbox-hidden');

checkbox.on('click', function () {
	let currentInput = $(this).parent().find(input);
	if (currentInput.prop('checked') == true) {
		currentInput.prop('checked', false);
	} else {
		currentInput.prop('checked', true)
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
		$(".header-bottom-wrap-menu-item:first-child").addClass("margin-left")
	} else {
		$(".header-bottom").removeClass("fixed");
		$(".header").removeClass("fixed");
		$(".header-bottom-wrap-link").removeClass("hidden");
		$(".production-top-right__btn").addClass("hidden");
		$(".header-bottom-wrap-menu-item:first-child").removeClass("margin-left")
	}
});

// tabs card
$(".card-tabs-buttons__btn").on('click', function () {
	$(".card-tabs-buttons__btn").removeClass("active");
	$(".card-tabs-wrap-features").hide();

	let target = $(this).attr("data-target");

	$(this).addClass("active");
	$(".card-tabs-wrap-features[data-target=" + target + "]").show();
});

// tabs calculator
$(".calculator-top-buttons__btn").on('click', function () {
	$(".calculator-top-buttons__btn").removeClass("active");
	$(".calculator-bottom-tab").hide();

	let target = $(this).attr("data-target");

	$(this).addClass("active");
	$(".calculator-bottom-tab[data-target=" + target + "]").show();
});

// tabs certificates
$(".certificates-wrap-buttons__btn").on('click', function () {
	$(".certificates-wrap-buttons__btn").removeClass("active");
	$(".certificates-wrap-tabs-tab").hide().removeClass('active');

	let target = $(this).attr("data-target");

	$(this).addClass("active");
	$(".certificates-wrap-tabs-tab[data-target=" + target + "]").show().addClass('active');
});

// lines
$('.lines-wrap-filter-card-features__btn').on('click', function () {
	$(this).toggleClass('active');
});

$('.lines-wrap-filter-card-btn').on('click', function () {
	$(this).toggleClass('active');
	$(this).parent().find('.lines-wrap-filter-card-range').slideToggle();
	$(this).parent().find('.lines-wrap-filter-card-features').slideToggle();
});

// scroll
$(".footer-link-2").click(function () {
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
});

// select add slide
$('.calculator-bottom-wrap-left-add').on('click', function () {
	$(this).toggleClass('active');
	$('.calculator-bottom-wrap-left-options').slideToggle(300);
});

// popup sertificates
$('.certificates-wrap-tabs-tab-card').on('click', function () {

	let current = $(this).attr("data-target");

	$(".certificates-popup-container[data-target=" + current + "]").show().css('display', 'flex');
});

$('.certificates-popup-overlay').on('click', function () {
	$('.certificates-popup-container').hide();
});

$('.certificates-popup__close').on('click', function () {
	$('.certificates-popup-container').hide();
});

// Burger menu
$('.header-bottom-wrap-menu-btn-767').on('click', function () {
	$(this).toggleClass('active');
	$(this).parent().parent().parent().toggleClass('active');
	$('.header-top').toggleClass('active');
	$('.header-bottom-wrap-menu-btn-767__img').toggleClass('active');
	$('.header-bottom-wrap-menu-btn-767__img--close').toggleClass('active');
	$('.header-bottom-wrap-menu-767').slideToggle(200);
	$('.header-bottom-wrap-search').toggleClass('active');
	$('.header-bottom-wrap-search-hidden__input').attr('placeholder', 'Поиск...');
});

$('.header-bottom-wrap-menu-item__link').on('click', function () {
	$('.header-bottom-wrap-menu-item__link').not($(this)).removeClass('active');
	$('.header-bottom-wrap-menu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu').slideUp();

	$(this).toggleClass('active');
	$(this).siblings('.header-bottom-wrap-menu-item-submenu').slideToggle();
});

$('.header-bottom-wrap-menu-item-submenu-item__link').on('click', function () {
	$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).removeClass('active');
	$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu-item-subsubmenu').slideUp();

	$(this).toggleClass('active');
	$(this).siblings('.header-bottom-wrap-menu-item-submenu-item-subsubmenu').slideToggle();
});

$(document).mouseup(function (e) {
	var parent = $('.header-bottom-wrap-menu');
	var parentMobile = $('.header-bottom-wrap-menu-767');

	if (!parent.is(e.target) && parent.has(e.target).length === 0) {
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu-item-subsubmenu').slideUp();

		$('.header-bottom-wrap-menu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu').slideUp();
	}

	if (!parentMobile.is(e.target) && parentMobile.has(e.target).length === 0) {
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu-item-subsubmenu').slideUp();

		$('.header-bottom-wrap-menu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu').slideUp();
	}
});

$(document).mouseup(function (e) {
	var parent = $('.header-bottom-wrap-menu-767');

	if (!parent.is(e.target) && parent.has(e.target).length === 0) {
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item-submenu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu-item-subsubmenu').slideUp();

		$('.header-bottom-wrap-menu-item__link').not($(this)).removeClass('active');
		$('.header-bottom-wrap-menu-item__link').not($(this)).siblings('.header-bottom-wrap-menu-item-submenu').slideUp();
	}

});

// lines filter
$('.lines-button-767').on('click', function () {
	$(this).toggleClass('active');
	$(this).siblings('.lines-wrap').find('.lines-wrap-filter').slideToggle();
});


// Открытие модальных окон
$(".popup-instruction").on('click', function (e) {
	e.preventDefault();
	jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
	jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
	jQuery("#instruction").arcticmodal();
});

$(".popup-price-list").on('click', function (e) {
	e.preventDefault();
	jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
	jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
	jQuery("#price-list").arcticmodal();
});


//Валидация + Отправщик
$('.newButton').click(function (e) {

	e.preventDefault();
	const name = $("#form-callback-name").val();
	const tel = $("#form-callback-tel").val();
	const email = $("#form-callback-email").val();

	if (jQuery("#form-callback-tel").val() == "") {
		jQuery("#form-callback-tel").css("border", "1px solid red");
		return;
	}

	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendphone',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
				email: email,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".headen_form_blk").hide();
			jQuery('.SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});

