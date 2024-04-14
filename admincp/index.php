<?php
	include("modules/connect.php");
	session_start();
	if($_SESSION['userid']=="")
	{
		header("location:login.php");
		exit();
	}
	mysql_query("SET NAMES utf8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<title>Quản trị nội dung</title>
</head>
<body>
	<div class="khungtoanbo">
		<?php
            include("modules/banner.php");
            include("modules/menu.php");
            include("modules/main_body.php");
        ?>
    </div>
</body>
</html>