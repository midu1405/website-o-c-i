<?php
	$sql="select * from image where idimage";//Lay tat ca bai viet cung 1 loai tin where idalbum'$_GET[album]'
	$image=mysql_query($sql);
	$tongsoimage=mysql_num_rows($image);
	$sotrang=ceil($tongsoimage/$num);//Chia va lam tron de lay trang
	$i=1;
	
	while($i<=$sotrang){
?>
	<div class="phantrang">
	<a href="index.php?xem=album&album=<?php echo $_GET['album'];?>&trang=<?php echo $i;?>">
	<? if($i==$trang)
		{
	?>
	<div class="trang" style="background-color:#0e76bc">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
		else
		{
	?>
	<div class="trang">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
	?>
	</a>
	</div>
<?php
	$i++;
	}
?>
	