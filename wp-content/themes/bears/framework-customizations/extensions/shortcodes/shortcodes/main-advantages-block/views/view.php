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
<section class="advantages-block" style="background: url(<?php bloginfo('template_url')?>/assets/images/fons/fon4_1.jpg)no-repeat;">
	<div class="container">
		<div class="advantages-block-info">
			<h2>Преимущества</h2>
			<div class="row">
				<div class="advantages-block-item">
					<img src="<?php bloginfo('template_url')?>/assets/images/adv/adv1.png">
					<span>Мишки ручной работы</span>
				</div>
				<div class="advantages-block-item">
					<img src="<?php bloginfo('template_url')?>/assets/images/adv/adv2.png">
					<span>Более 500 роз в каждом мишке</span>
				</div>
				<div class="advantages-block-item">
					<img src="<?php bloginfo('template_url')?>/assets/images/adv/adv3.png">
					<span>Дополнительный подарок к каждому мишке</span>
				</div>
			</div>
		</div>
		<div class="advantages-bonus">
			<h2>+ bonus</h2>
			<img src="<?php bloginfo('template_url')?>/assets/images/adv/bear_1.png">
		</div>
	</div>
</section>