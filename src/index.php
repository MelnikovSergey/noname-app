<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

include(ROOT  . '/config/config_functions.php');
include(ROOT  . '/auth/login.php');


echo '
	<form action="ROOT  . /auth/login.php" method="POST" class="ui-form">
		<div class="ui-form__item">
			<laber for="input_email">Email:</label>
			<input type="text" name="email" placeholder="name@email.ru" id="input_email">
		</div>

		<div class="ui-form__item">
			<laber for="input_password">Password:</label>
			<input type="password" name="password" placeholder="********" id="input_password">
		</div>
		
		<button type="submit" name="submit" class="ui-form__item-btn">Отправить</button> 
	</form>
';