<?php
	//Chuỗi truy vấn lấy 10 bài viết mới nhất trong bảng bài viết
	$sql="SELECT * FROM tintuc WHERE 1=1 ORDER BY idtintuc DESC LIMIT 10";
	$tintuc = mysql_query($sql);
	mysql_query("SET NAMES utf8");
	
?>
<div class="box">
        <div class="box-right">
		
        </div>
        <div class="xoa"> </div>
        <?php
			include("modules/main-right/tin-anh.php");
		?>
        <div class="xoa">
        </div>
</div>	