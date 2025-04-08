<?php

if (isset($_COOKIE["visited"])) {
    $count = $_COOKIE["visited"] + 1;
} else {
    $count = 1;
}

setcookie("visited", $count, time() + 3600);

?>

<!DOCTYPE html>
<html>
	<body>
		<?php
            print("Вы посетили страницу: {$count} раз");
		?>
	</body>
</html>