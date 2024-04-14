<?php

mysql_connect('localhost', 'root', 'admin') or die ('Không thể kết nối database');
mysql_select_db('aocuoi');
mysql_query("SET NAMES utf8");
?>
<?php
	include("admincp/modules/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css\style.css" type="text/css" rel="stylesheet" />
<title>Untitled Document</title>

<div class="khungtoanbo">
  <?php
			include("modules/top.php");
			include("modules/main-left.php");
			//include("modules/main-right.php");
			echo '<div class="main-right">';
		
			echo '		<div class="xoa">
			</div>
</div>
';?>
<?

$key = trim($_GET['key']);

echo '<div class="tieudekhung" style="padding-left:110px;background:#a7a9a5; padding-top:40px; color:#a9155f;">KẾT QUẢ TÌM KIẾM LOẠI TIN</div>';

$sql="SELECT * FROM loaitin WHERE `tenloaitin` LIKE  '%$key%'";
$data = mysql_query($sql);

echo '<div style="background:#202020; padding-left:110px; color:#dedede;">';
if (mysql_num_rows($data) == 0)
{
	echo 'Không tìm thấy loại tin nào.';
}
else
{	
	echo '<div style="background:#a7a9a5; color:#000000;">';
	$i = 1;
	while ($rows = mysql_fetch_array ($data))
	{
		echo '<div class="linkList">';
		echo $i.' <a href="index.php?xem=loaitin&loaitin='.$rows['idloaitin'].'">'
		.$rows['tenloaitin'].'</a></div>';
		$i++;
	}
}

echo '<div class="tieudekhung" style="color:#a9155f;">KẾT QUẢ TÌM KIẾM BÀI VIẾT</div>';
$sql="SELECT * FROM tintuc WHERE `tenbaiviet` LIKE  '%$key%'";
$data = mysql_query($sql);

echo '<div style="background:#a7a9a5; color:#000000;">';
if (mysql_num_rows($data) == 0)
{
	echo 'Không tìm thấy bài viết nào.';
}
else
{
	$i = 1;
	while ($rows = mysql_fetch_array ($data))
	{
		echo '<div class="linkList">';
		echo $i.' <a href="index.php?xem=tintuc&loaitin='.$rows['idloaitin'].'&tintuc='.$rows['idtintuc'].'">'
		.$rows['tenbaiviet'].'</a></div>';
		$i++;
	}
}
echo '</div>        <div class="xoa"> </div>';
		include ("modules/footer.php");
?>