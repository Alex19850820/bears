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
<section class="gallery-block" id="gallery">
	<div class="container">
		<div class="gallery-title">
			<h2>Фотогалерея</h2>
		</div>
		<div class="grid">
			<?php foreach ($atts['images'] as $image):?>
				<div class="grid-item">
<!--					<a class="grid-item__watch" href="--><?//=$image['url']?><!--">Посмотреть работу</a>-->

					<a class="grid-item__fancybox" href="<?=$image['url']?>" data-fancybox="images" data-caption="
										<div class='portfolio__block-caption'>
											<span><?php the_title(); ?></span>
										</div">
					
										<span class="magnifier">
											<img src="<?php bloginfo('template_url')?>/assets/images/ico/full-size.svg" width="20" height="20" alt="">
										</span>
					</a>

					<a href="#" rel="nofollow">
						<img src="<?=$image['url']?>">
					</a>
					<!--					<img class="grid-item__img" src="" alt="Баннер">-->
				</div>
			<?php endforeach;?>
		</div>
		<div class="gallery-text">
			<h2>МИШКА ИЗ РОЗ – ИДЕАЛЬНЫЙ ПОДАРОК</h2>
			<p>Праздники – это целая гамма эмоций, среди которых не только предвкушение, но и волнение. А понравится ли подарок? Не вызовет ли ваш выбор разочарования, не будет ли закинут на дальнюю полку?<br><br>
				Медведь из роз– отличное решение! Этот подарок будет идеальным на любой праздник, будь то день рождения, 8 марта, памятная дата. Да и просто
				в качестве знака внимания для любимого человека мишка подойдет идеально. Флористический мишка обладает целым рядом преимуществ, которые делают его безупречным подарком!</p>
		</div>
	</div>
</section>