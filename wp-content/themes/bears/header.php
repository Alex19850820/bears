<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bears
 */

$contacts = fw_get_db_customizer_option();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php the_title()?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="logo-head">
				<a class="rd-navbar-brand" href="/">
					<img src="<?=$contacts['img_logo']['url'] ?? ''?>" alt="" srcset="<?=$contacts['img_logo']['url'] ?? ''?>"/>
					<span class="logo-title"><?=$contacts['logo_title'] ?? ''?></span>
				</a>
			</div>
			<div class="header-menu" id="menu">
				<ul class="header-menu-main">
					<li><a href="#">Каталог</a></li>
					<li><a href="#delivery">Доставка и самовывоз</a></li>
					<li><a href="#gallery">Фотогалерея</a></li>
					<li><a href="#delivery">Контакты</a></li>
				</ul>
			</div>
			<div class="header-contacts">
				<span><button class="header-button" id="popup__toggle">Заказать звонок</button></span>
				<span><a href="tel:<?=$contacts['phone']?>" target="_blank"><?=$contacts['phone']?></a></span>
			</div>
			<!--mobile-->
			<div class="rd-navbar-mob-menu jsMobMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="rd-nav-menu__right jsMenu menu-active" id="menu_mob">
				<h3>Меню</h3>
				<ul>
					<li><a href="#">Каталог</a></li>
					<li><a href="#delivery">Доставка и самовывоз</a></li>
					<li><a href="#gallery">Фотогалерея</a></li>
					<li><a href="#delivery">Контакты</a></li>
				</ul>
				<div class="header-contacts">
					<span><button class="header-button" id="popup__toggle">Заказать звонок</button></span>
					<span><a href="tel:<?=$contacts['phone']?>" target="_blank"><?=$contacts['phone']?></a></span>
				</div>
			</div>
			<!--end-->
		</div>
	</header>
