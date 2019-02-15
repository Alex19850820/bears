<?php

add_action( 'wp_ajax_sendForm', 'sendForm' );
add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );
//
function sendForm() {
	if (isset($_POST )) {
		// обрабатываем запрос
		$adminEmail = get_option('admin_email');
//		$adminEmail = '89261231522@mail.ru,
//globus_estate@mail.ru';
		$name = ($_POST['name'] == 'undefined') ? '' : $_POST['name'] ?? '' ;
		$phone = ($_POST['phone'] == 'undefined' ) ? '' : $_POST['phone'] ?? '' ;
		$email = ($_POST['email'] == 'undefined') ? '' : $_POST['email'] ?? '' ;
		$site = ($_POST['site'] == 'undefined') ? '' : $_POST['site'] ?? '';
		if(isset($_POST['bear-id'])) {
			$bear = ['first' => 'Мишка из роз, 25см', 'second' => 'Мишка из роз, 40см', 'third' => 'Панда'];
			$color = ['red' => 'Красный', 'blue' => 'Синий', 'yellow' => 'Желтый', 'green' => 'Зеленый', 'pink' => 'Фиолетовый', 'black' => 'Черный', 'none' => 'Без цвета'];
			$order = "<table>
						<thead>
							<tr>
								<th>Название</th>
								<th>Цвет</th>
								<th>Цена</th>
							</tr>
						<thead>
						<tbody>
							<tr>
								<td>".$bear[$_POST['bear-id']]."</td>
								<td>".$color[$_POST['color']]."</td>
								<td>".$_POST['price']." руб.</td>
							</tr>
						</tbody>
					</table>";
		}
		
		$message = '<h2>Заявка с '.get_bloginfo('description').' '.get_bloginfo('url').'</h2><br>';
		$message .= 'Имя: ' . $name . '<br>';
		$message .= ($phone)? 'Телефон: ' . $phone . '<br>' : '';
		$message .= ($email)? 'E-mail: ' . $email . '<br>'  : '';
		$message .= ($site) ? 'Сайт: ' . $site . '<br>' : '';
		$message .= ($order) ? 'Закакз: ' . $order . '<br>' : '';
		

		if (wp_mail($adminEmail,'Заявка на обратный звонок c '.get_bloginfo('description').' '.get_bloginfo('url'), $message, 'content-type: text/html')) {
			$result = [
				'result' => 'success',
				'message' => 'Ваш запрос отправлен!'
			];
		} else {
			$result = [
				'result' => 'error',
				'message' => 'Возникла ошибка при отправке запроса. Попробуйте позже!'
			];
		}
		// возвращаем результат
		wp_send_json($result);
	}
	wp_die();
}
