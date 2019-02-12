<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'logo_header' => [
		'title'   => __( 'Логотип', '{domain}' ),
		'options' => [
			'img_logo' => [
				'type'  => 'upload',
				'label' => __( 'Логотип', '{domain}' ),
				'value' => '',
				'images_only' => true,
			],
			'logo_title' => [
				'type'  => 'text',
				'label' => __( 'Текст логотипа', '{domain}' ),
				'value' => 'Мишки из роз',
			]
			
		],
	],
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '+ 8(499)401-24-91',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'E-mail', '{domain}' ),
				'value' => 'horizon@gmail.ru',
			],
			'menu_main' => [
				'type' => 'addable-popup',
				'label' => __('Редактировать меню', '{domain}'),
				'template' => '{{- m1 }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'm1' => [
						'type'  => 'text',
						'label' => __( 'Главная страница', '{domain}' ),
						'value' => 'Главная',
					],
					'm2' => [
						'type'  => 'text',
						'label' => __( 'О нас', '{domain}' ),
						'value' => 'О нас',
					],
					'm3' => [
						'type'  => 'text',
						'label' => __( 'Наши проекты', '{domain}' ),
						'value' => 'Наши проекты',
					],
					'm4' => [
						'type'  => 'text',
						'label' => __( 'Контакты', '{domain}' ),
						'value' => 'Контакты',
					],
				],
			],
			'vk' => [
				'type'  => 'text',
				'label' => __( 'VK', '{domain}' ),
				'value' => '',
			],
			'facebook' => [
				'type'  => 'text',
				'label' => __( 'Facebook', '{domain}' ),
				'value' => '',
			],
			'telegram' => [
			'type'  => 'text',
				'label' => __( 'Telegram', '{domain}' ),
				'value' => '',
			],
		],
	],
	'footer' => [
		'title'   => __( 'Футер', '{domain}' ),
		'options' => [
			'more' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'order' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'horder' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'new_build' => [
				'type' => 'addable-popup',
				'label' => __('Добавить информацию', '{domain}'),
				'template' => '{{- text }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'text' => [
						'type'  => 'text',
						'label' => __( 'Заголовок блока', '{domain}' ),
						'value' => '',
					],
					'new_build' => [
						'type' => 'addable-popup',
						'label' => __('Добавить информацию блока', '{domain}'),
						'template' => '{{- text }}',
						'size' => 'large', // small, medium, large
						'limit' => 0, // limit the number of popup`s that can be added
						'add-button-text' => __('добавить', '{domain}'),
						'sortable' => true,
						'popup-options' => [
							'text' => [
								'type'  => 'text',
								'label' => __( 'Текст', '{domain}' ),
								'value' => '',
							],
							'href' => [
									'type'  => 'text',
									'label' => __( 'Ссылка', '{domain}' ),
									'value' => '#',
							],
						],
					],
				],
			],
		],
	],
];


