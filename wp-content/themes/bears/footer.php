<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bears
 */
$contacts = fw_get_db_customizer_option();
?>
<footer class="footer">
	<div class="container">
		<div class="logo-head">
			<a class="rd-navbar-brand" href="/">
				<img src="<?=$contacts['img_logo']['url'] ?? ''?>" alt="" srcset="<?=$contacts['img_logo']['url'] ?? ''?>"/>
				<span class="logo-title"><?=$contacts['logo_title'] ?? ''?></span>
			</a>
		</div>
		<div class="header-menu" id="foot_menu">
			<ul class="header-menu-main">
				<li><a href="#">Каталог</a></li>
				<li><a href="#delivery">Доставка и самовывоз</a></li>
				<li><a href="#gallery">Фотогалерея</a></li>
				<li><a href="#delivery">Контакты</a></li>
			</ul>
		</div>
		<div class="header-contacts">
			<span><button class="header-button" id="popup__toggle2">Заказать звонок</button></span>
			<span><a href="tel:<?=$contacts['phone']?>" target="_blank"><?=$contacts['phone']?></a></span>
		</div>
		<div class="footer-text">
			<span>Политика конфеденциальности</span>
			<span>Все права защищены. &copy;2019</span>
		</div>
	</div>
</footer>
<!--MODAL-->
<!--[if lt IE 9]>
<div class="popup__overlay popup__overlay_ie"></div><![endif]-->
<div class="popup__overlay modal">
	<div class="popup">
		<div class="popup__close">X</div>
		<h2>Обратный звонок</h2>
		<p>Оставьте ваш телефон и с Вами свяжутся в ближайшее время!</p>
		<form id="send_call_back">
			<input name="name" type="text" placeholder="Имя">
			<input name="phone" type="tel" id="phone2" placeholder="Телефон">
			<div class="form-button">
				<button id="send__form"  class="first-form-button" data-form="send_call_back" type="submit">Позвонить</button>
			</div>
		</form>
	</div>
	<!--[if lt IE 9]>
	<div class="popup__valignfix"></div><![endif]-->
</div>
<div class="popup__overlay modal_success">
	<div class="popup">
		<div class="popup__close">X</div>
		<h2>Поздравляем</h2>
		<p>Ваша заявка отправлена с Вами свяжутся в ближайшее время!</p>
	</div>
	<!--[if lt IE 9]>
	<div class="popup__valignfix"></div><![endif]-->
</div>
<!--END-MODAL-->
<?php wp_footer(); ?>

</body>
</html>
