<?php
    $name = 'Aboba';
    $value = 'Russia';
    setcookie($name, $value, time() + 3600);
    if (isset($_COOKIE[$name])) {
		print('Your country is: ' . $value);
	} else {
		print('error');
	}
?>