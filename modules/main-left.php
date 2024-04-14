<?php
	$sql="select * from loaitin where trangthai=1 order by thutu asc"; //desc: Giam dan, asc: tang dan
	$loaitin=mysql_query($sql);
	function Danhsachtheloai($idloaitin){
		$qr ="select * from theloai where idloaitin=$idloaitin";
		return mysql_query($qr);
	}
?>
<div class="main-left">
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='../aocuoi/index.php'><span>TRANG CHỦ</span></a></li>
   <?php 
		while($dong=mysql_fetch_array($loaitin)){
		$idloaitin = $dong['idloaitin']
	?>
   <li class='has-sub'><?php echo "<a href=index.php?xem=loaitin&loaitin=".$dong['idloaitin'].">" ?><span><?php echo $dong['tenloaitin'] ?></span><?php echo "</a>"?>
      <ul>
		<?php 
		$theloai = Danhsachtheloai($idloaitin);
		while($dong=mysql_fetch_array($theloai)){
		?>
         <li><a href="index.php?xem=tintuc&loaitin=<? echo $dong['idtheloai'];?>&tintuc=<? echo $dong['idloaitin'];?>"><span><?php echo $dong['tentheloai'] ?></span></a></li>
		<?php 
			}
		?>
      </ul>
   </li>
   <?php 
	}
   ?>
</ul>
</div>
</body>
</html>
</div>