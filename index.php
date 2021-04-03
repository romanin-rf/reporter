<?php
	if (isset($_GET['s'])) {

		$site = $_GET['s'];
		if ($site == "rcrms") {
			header('Location: https://rcr.fvds.ru/rcr');

		} elseif ($site == "mmc") {
			header('Location: https://mmc.fvds.ru/mmc');

		} else {
			http_response_code(404);
		};
	} else {
		http_response_code(404);
	};
?>



































<!--} elseif ($site == "radio") {
		header('Location: https://rcr.fvds.ru/radio');-->