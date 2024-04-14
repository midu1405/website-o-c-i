<div style="width:400px; float:left; margin-top:10px; padding-left:30px; padding-bottom:20px;">
<table class="ds" width="500" border="1" style="font-size:15px;" >
  <tr style="font-weight:bold; text-align:center;font-size:14px;">
    <td>STT</td>
    <td>Tên Album</td>
    <td>Ảnh minh họa</td>
    <td colspan="2"> Quản trị</td>
  </tr>
  <?php
  	$sql="select * from album";
	$album=mysql_query($sql);
	mysql_query("SET NAMES utf8");	

	
  ?>
  	<?php
	  $i=1;
	  while ($dong=mysql_fetch_array($album))
	  {
	?>
	  <tr>
		<td style="text-align:center;"><?php echo $i; ?></td>
		<td><?php echo $dong['tenalbum']; ?></td>
		<td style="text-align:center;"><img src="../<?php echo $dong['anhminhhoa']; ?>" width="50" /></td>
		<td style="text-align:center;"><a href=index.php?sua=album&id=<?php echo $dong['idalbum'];?>> Sửa </a></td>
		<td style="text-align:center;"><a href=modules/album/xuly.php?id=<?php echo $dong['idalbum'];?>> Xóa </a></td>
	  </tr>
	<?php
		$i++;
	  }
	?>
</table>
</div>