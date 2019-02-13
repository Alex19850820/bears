<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/

?>
<section class="first-block" style="background: url(<?php bloginfo('template_url')?>/assets/images/fons/fon3.jpg) 50% top no-repeat;">
	<div class="container">
		<div class="first-block-info">
			<h2>Мишки из роз!</h2>
			<div class="container">
				<div class="row">
					<div class="block-info-item">
						<div class="info-item round">
							<img  src="<?php bloginfo('template_url')?>/assets/images/service/present.png">
						</div>
						<p>Доставка по Москве<br> в день закакза!</p>
					</div>
					<div class="block-info-item">
						<div class="info-item round">
							<img  src="<?php bloginfo('template_url')?>/assets/images/service/wrapping.png">
						</div>
						<p>Подарочная упаковка<br> в подарок</p>
					</div>
					<div class="block-info-item">
						<div class="info-item round">
							<img  src="<?php bloginfo('template_url')?>/assets/images/service/sugar.png">
						</div>
						<p>Рафаэлло<br> в подарок</p>
					</div>
					<div class="block-info-item">
						<div class="info-item round">
							<img  src="<?php bloginfo('template_url')?>/assets/images/service/hospital.png">
						</div>
						<p>Гиппоалергенные<br> материалы</p>
					</div>
					<div class="block-info-item">
						<div class="info-item round">
							<img  src="<?php bloginfo('template_url')?>/assets/images/service/cologne.png">
						</div>
						<p>Ароматизатор<br> в подарок</p>
					</div>
				</div>
			</div>
		</div>
		<div class="first-block-form">
			<form id="first-form">
				<h2>Заполните поля ниже</h2>
				<span>и мы свяжемся с вами</span>
				<input type="text" name="name" value="" placeholder="Ваше имя">
				<input id="phone" type="tel" name="phone" value="" placeholder="Ваш телефон" >
				<button class="first-form-button" id="send__form" data-form="first-form">Оставить заявку</button>
				<p>Нажимая кнопку "Оставить заявку", <br> выс оглашаетесь с условиями передачи данных</p>
			</form>
		</div>
	</div>
</section>