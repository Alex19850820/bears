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
<section class="second-block">
	<div class="container">
		<div class="second-block-info">
			<h2>Выбери своего мишку</h2>
			<div class="row">
				<div class="second-block-item">
					<input type="hidden" name="path_bear" id="path_bears" value="<?php bloginfo('template_url')?>/assets/images/bears/">
					<div class="second-item-img-first" id="first">
						<img  src="<?php bloginfo('template_url')?>/assets/images/bears/red_rose_bear_2.jpg">
					</div>
					<div class="second-item-info">
						<span>Мишка из роз, 25см</span>
						<span class="second-price-item">1490 руб. <s>2490 руб.</s></span>
						<span class="second-color-item">Выбрать цвет:</span>
						<span data-id="first" data-color="red" class="second-color red"><span></span></span>
						<span data-id="first" data-color="blue" class="second-color blue"><span></span></span>
						<span data-id="first" data-color="yellow" class="second-color yellow"><span></span></span>
						<span data-id="first" data-color="green" class="second-color green"><span></span></span>
						<span data-id="first" data-color="pink" class="second-color pink"><span></span></span>
						<span data-id="first" data-color="black" class="second-color grey"><span></span></span>
						<button class="second-item-button" data-color="red" data-id="first" data-price="1490">Купить сейчас</button>
					</div>
				</div>
				<div class="second-block-item">
					<div class="second-item-img" id="second">
						<img  src="<?php bloginfo('template_url')?>/assets/images/bears/red_rose_bear_2.jpg">
					</div>
					<div class="second-item-info">
						<span>Мишка из роз, 40см</span>
						<span class="second-price-item">2290 руб. <s>3490 руб.</s></span>
						<span class="second-color-item">Выбрать цвет:</span>
						<span data-id="second" data-color="red" class="second-color red"><span></span></span>
						<span data-id="second" data-color="blue" class="second-color blue"><span></span></span>
						<span data-id="second" data-color="yellow" class="second-color yellow"><span></span></span>
						<span data-id="second" data-color="green" class="second-color green"><span></span></span>
						<span data-id="second" data-color="pink" class="second-color pink"><span></span></span>
						<span data-id="second" data-color="black" class="second-color grey"><span></span></span>
						<button data-color="red" class="second-item-button" data-id="second" data-price="2290">Купить сейчас</button>
					</div>
				</div>
				<div class="second-block-item">
					<div class="second-item-img">
						<img  src="<?php bloginfo('template_url')?>/assets/images/bears/bear3.jpg">
					</div>
					<div class="second-item-info">
						<span>Панда</span>
						<span class="second-price-item">2990 руб. <s>3990 руб.</s></span>
						<span class="second-color-item">Выбрать цвет:</span>
						<span data-id="third"  class="second-color grey"><span></span></span>
						<button data-color="none" data-id="third" class="second-item-button" data-price="2290">Купить сейчас</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>