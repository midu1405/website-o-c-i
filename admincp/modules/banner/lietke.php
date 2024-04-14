<div style="width:400px; float:left; margin-top:10px; padding-left:30px; font-size:15px;">
<table class="ds" width="500" border="1">
  <tr style="font-weight:bold; text-align:center;">
    <td>STT</td>
    <td>Tên ảnh</td>
    <td>Ảnh minh họa</td>
	<td>Trạng thái</td>
    <td colspan="2"> Quản trị</td>
  </tr>
  <?php
  	$sql="select * from banner";
	$banner=mysql_query($sql);
	mysql_query("SET NAMES utf8");	

	
  ?>
  	<?php
	  $i=1;
	  while ($dong=mysql_fetch_array($banner))
	  {
	?>
	  <tr>
		<td style="text-align:center;"><?php echo $i; ?></td>
		<td><?php echo $dong['ten']; ?></td>
		<td style="text-align:center;"><img src="../<?php echo $dong['anhminhhoa']; ?>" width="50" /></td>
		<td style="text-align:center;"><?php echo $dong['trangthai']; ?></td>
		<td style="text-align:center;"><a href=index.php?sua=banner&id=<?php echo $dong['idbanner'];?>> Sửa </a></td>
		<td style="text-align:center;"><a href=modules/banner/xuly.php?id=<?php echo $dong['idbanner'];?>> Xóa </a></td>
	  </tr>
	<?php
		$i++;
	  }
	?>
</table>
</div>