$(document).ready(function () {
	$(document).on('click', '#send__form, #send__form__modal', function (e) {
		e.preventDefault();
		var id = '#' + $(this).attr('data-form') + '';
		// var data = $('#'+id+'').serialize();
		var $data = {};
		$(id).find ('input').each(function() {
			$data[this.name] = $(this).val();
		});
		// var name = $("input[name='name']").val();
		// var phone = $("input[name='phone']").val();
		var name = $data.name;
		var email = $data.email;
		var phone = $data.phone;
		var site = $data.site;

		var form_data = new FormData();
		if (name ==='') {
			alert('Введите Ваше имя!');
			return false;
		}
		if (phone ==='') {
			alert('Введите Ваш телефон!');
			return false;
		}
		if(email === '') {
			alert('Введите Ваш E-mail!');
			return false;
		}
		if(site === '') {
			alert('Введите Ваш сайт!');
			return false;
		}
		if($(this).attr('data-id')) {
			form_data.append('bear-id', $(this).attr('data-id'));
		}
		if($(this).attr('data-price')) {
			form_data.append('price', $(this).attr('data-price'));
		}
		if($(this).attr('data-color')) {
			form_data.append('color', $(this).attr('data-color'));
		}
		if(name !== '') {
			form_data.append('action', 'sendForm');
			form_data.append('name', name);
			form_data.append('email', email);
			form_data.append('phone', phone);
			form_data.append('site', site);
			$.ajax({
				url: myajax.url,
				type: 'post',
				data: form_data,
				contentType: false,
				processData: false,
				success: function (response) {
					if (response.result === 'success') {
						/*form.reset();*/
						// console.log(123); //консоль
						$(id).trigger('reset');
						// $('.modal-block').addClass('modal-noactive');
						// $('.modal-thanks').addClass('modal-active');
						// $('.modal-phone').addClass('modal-noactive');
						$('.popup__overlay').hide();
						$('.modal_success').show();
						$('.popup p').html(response.message);
					} else {
						alert(response.message);
					}
				}
			});
			return false;
		} else {
			alert('Вы не заполнили все поля!');
		}
	});
	$(document).on('click', '.second-color', function () {
		var path = $('#path_bears').val(),
			id_block_image = $(this).attr('data-id'),
			color_image = $(this).attr('data-color');
		$(this).parent().find('button').attr('data-color', color_image);
		$('.second-color').removeClass('active');
		$(this).addClass('active');
		$('#'+ id_block_image).html('<img src="'+ path +'/'+ color_image +'_rose_bear.jpg">');
		$(this).find('button').attr('data-color', $(this).attr('data-color'));
	} );
	$('.grid').imagesLoaded( function() {
		$('.grid-preloader').css('display', 'none');
		$('.grid, .more_btn').css('display', 'block');

		$('.grid').masonry({
			itemSelector: '.grid-item',
			percentPosition: true
		});
	});
	$('#phone').inputmask("+9(999)999-99-99");
	$('#phone2').inputmask("+9(999)999-99-99");
	/*Плавный якорь*/
	$("#menu").on("click", "a", function () {
		//отменяем стандартную обработку нажатия по ссылке
		// e.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id = $(this).attr('href'),
			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
	$("#menu_mob").on("click", "a", function () {
		//отменяем стандартную обработку нажатия по ссылке
		// e.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id = $(this).attr('href'),
			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
		$('.burger-active').click();
	});
	$("#foot_menu").on("click", "a", function () {
		//отменяем стандартную обработку нажатия по ссылке
		// e.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id = $(this).attr('href'),
			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
	$(document).on('click','.map-block-button', function () {
		$('.map-block-image').hide();
		$('.map-block-map').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7b96307713a6a61d315401924887aa4b1dfac7d286438d7d0b877d5e8b96047f&amp;width=585&amp;height=478&amp;lang=ru_UA&amp;scroll=true"></script>').show();
	});
	/*modal*/
	p = $('.popup__overlay.modal')
	modal_success = $('.popup__overlay.modal_success');
	modal_error = $('.popup__overlay.modal_error');
	$('#popup__toggle, #popup__toggle2').click(function() {
		p.css('display', 'block')
		$('#popup__toggle').hide();
	});
	p.click(function(event) {
		e = event || window.event
		if (e.target == this) {
			$(p).css('display', 'none');
		}
	});
	modal_success.click(function(event) {
		e = event || window.event
		if (e.target == this) {
			$(modal_success).css('display', 'none');
		}
	});
	$('.popup__close').click(function() {
		p.css('display', 'none');
		modal_success.css('display', 'none');
		modal_error.css('display', 'none');
		$('#popup__toggle').show();
	});
	p.click(function () {
		$('#popup__toggle').show();
	});
	modal_success.click(function () {
		$('#popup__toggle').show();
	});
	$(document).on('click', '.jsMobMenu', function () {
		$(this).addClass('burger-active');
		$('.rd-nav-menu__right').css({'-webkit-transform':'none'});
		// $('.rd-nav-menu__right').css({'display':'block !important'});
	});
	$(document).on('click', '.burger-active', function () {
		$('.rd-navbar-mob-menu').removeClass('burger-active');
		$('.rd-nav-menu__right').css({'-webkit-transform':'translateX(1200px)'});
		// $('.rd-nav-menu__right').css({'display':'none !important'});
	});
	$(document).on('click', '.second-item-button', function () {
		var active = $('.active').attr('data-color');
		$('#popup__toggle').click();
		$('#send__form__modal').attr('data-price', $(this).attr('data-price'));
		$('#send__form__modal').attr('data-color', $(this).attr('data-color'));
		$('#send__form__modal').attr('data-id', $(this).attr('data-id'));
	})
	$(document).on('click', '#fancy', function () {
		$(this).prev('.grid-item__fancybox').click();
	})
});
var options = {
	offset:100
};
var header = new Headhesive('.header', options);
$(function() {
	$.fn.scrollToTop = function() {
		$(this).hide().removeAttr("href");
		if ($(window).scrollTop() >= "250") $(this).fadeIn("slow");
		var scrollDiv = $(this);
		$(window).scroll(function() {
			if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow");
			else $(scrollDiv).fadeIn("slow")
		});
		$(this).click(function() {
			$("html, body").animate({scrollTop: 0}, "slow")
		})
	}
});
$(function() {
	$("#go-top").scrollToTop();
});