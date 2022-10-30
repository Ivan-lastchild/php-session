<?php
	session_start()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <div class="counter">
		<span>
        Count of reloads page
		<?php
			$reloadCount = (isset($_SESSION["ID"])) ? $_SESSION["ID"] : 0 ;
			$reloadCount++;
			$_SESSION["ID"] = $reloadCount;
			print_r($_SESSION["ID"]);
        ?>
    	</span>
	</div>
</body>
</html>
