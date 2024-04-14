<?php
	include("admincp/modules/connect.php");
	$sql="select * from loaitin where trangthai=0 order by thutu asc"; //desc: Giam dan, asc: tang dan
	$loaitin=mysql_query($sql);
	function Danhsachtheloai($idloaitin){
		$qr ="select * from theloai where idloaitin=$idloaitin";
		return mysql_query($qr);
	}
	mysql_query("SET NAMES utf8");
?>
<div class="hientin">
	<?php
		include("modules/top.php");
		//include("modules/tin-moi.php");
		include("modules/footer.php");
	?>
</div>