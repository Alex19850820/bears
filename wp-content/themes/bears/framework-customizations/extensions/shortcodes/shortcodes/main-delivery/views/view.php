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
<section id="delivery" class="delivery-block" style="background: url(<?php bloginfo('template_url')?>/assets/images/fons/fon5.jpg)">
	<div class="container">
		<div class="delivery-title">
			<h2>Доставка</h2>
		</div>
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
		<div class="delivery-block-address">
			<div class="delivery-address-item">
				<h2>Доставим сегодня!</h2>
				<p>Ежедневно с 9:00 до 23:00</p>
				<span>В пределах МКАД - 350 руб.</span>
				<span>За МКАД + 25 руб/км.</span>
			</div>
			<div class="delivery-address-item">
				<h2>Доставим по Росии!</h2>
				<span>от 300 руб., уточняйте у менеджера</span>
			</div>
			<div class="delivery-address-item">
				<h2>Самовывоз!</h2>
				<p>Ежедневно с 11:00 до 22:00</p>
				<span>Бесплатно</span>
				<span>г.Москва ул.Дружинниковска д.15(м.Краснопресненская)</span>
			</div>
		</div>
		<div class="delivery-map-block">
			<div class="map-block-image">
				<button class="map-block-button">
					Нажмите для отображения карты
				</button>
			</div>
			<div class="map-block-map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7b96307713a6a61d315401924887aa4b1dfac7d286438d7d0b877d5e8b96047f&amp;width=585&amp;height=478&amp;lang=ru_UA&amp;scroll=true"></script>
			</div>
		</div>
	</div>
</section>