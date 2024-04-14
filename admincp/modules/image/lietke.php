<div style="width:400px; float:left; margin-top:10px; padding-left:30px; padding-bottom:20px;">
<table class="ds" width="500" border="1" style="font-size:15px;" >
  <tr style="font-weight:bold; text-align:center;font-size:14px;">
    <td>STT</td>
    <td>Tên ảnh</td>
    <td>Ảnh minh họa</td>
	<td>Album</td>
    <td colspan="2"> Quản trị</td>
  </tr>
  <?php
  	$sql="select * from image";
	$image=mysql_query($sql);
	mysql_query("SET NAMES utf8");	

	
  ?>
  	<?php
	  $i=1;
	  while ($dong=mysql_fetch_array($image))
	  {
	?>
	  <tr>
		<td style="text-align:center;"><?php echo $i; ?></td>
		<td><?php echo $dong['ten']; ?></td>
		<td style="text-align:center;"><img src="../<?php echo $dong['anhminhhoa']; ?>" width="50" /></td>
		<?php
			$sql="select * from album where idalbum='$dong[idalbum]'";
			$album=mysql_query($sql);
			$dongalbum=mysql_fetch_array($album);
		?>
		<td><?php echo $dongalbum['tenalbum']; ?></td>
		<td style="text-align:center;"><a href=index.php?sua=image&id=<?php echo $dong['idimage'];?>> Sửa </a></td>
		<td style="text-align:center;"><a href=modules/image/xuly.php?id=<?php echo $dong['idimage'];?>> Xóa </a></td>
	  </tr>
	<?php
		$i++;
	  }
	?>
</table>
</div>