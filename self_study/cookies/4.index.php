<?php
$cookie_name = 'language';
$cookie_value = 'english';
setcookie($cookie_name, $cookie_value, time() + (7200), '/');
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' . $_COOKIE[$cookie_name]);
			}
		?>
	</body>
</html>