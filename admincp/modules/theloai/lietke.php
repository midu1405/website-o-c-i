<div style="width:400px; float:left;font-size:14px; margin-top:10px; padding-bottom:20px; padding-left:30px;">
<table class="ds" width="500" border="1">
	<tr height="50">
    	<td colspan="8" align="center">
        	<b>DANH SÁCH THỂ LOẠI</b>
        </td>
    </tr>
	  <tr style="font-weight:bold; text-align:center;">
		<td>STT</td>
		<td>Tên Thể Loại</td>
		<td>Tên không dấu</td>
		<td>Loại tin</td>
		<td>Thứ tự</td>
		<td>Vị trí</td>
		<td colspan="2"> Quản trị</td>
	  </tr>
  <?php
  	$sql="select * from theloai";
	$theloai=mysql_query($sql);
	mysql_query("SET NAMES utf8");	

	
  ?>
  	<?php
	  $i=1;
	  while ($dong=mysql_fetch_array($theloai))
	  {
	?>
	  <tr>
		<td style="text-align:center;"><?php echo $i; ?></td>
		<td><?php echo $dong['tentheloai']; ?></td>
		<td><?php echo $dong['tenkhongdau']; ?></td>
		<?php
			$sql="select * from loaitin where idloaitin='$dong[idloaitin]'";
			$loaitin=mysql_query($sql);
			$dongloaitin=mysql_fetch_array($loaitin);
		?>
		<td><?php echo $dongloaitin['tenloaitin']; ?></td>
		<td style="text-align:center;"><?php echo $dong['thutu']; ?></td>
			<?php
				if($dong['vitri']==1)
				{ $vitri="1";
				}
				else
					$vitri="2";
			?>
		<td style="text-align:center;"><?php echo $vitri; ?></td>
		<td><a href=index.php?sua=theloai&id=<?php echo $dong['idtheloai'];?>> Sửa </a></td>
		<td><a href=modules/theloai/xuly.php?id=<?php echo $dong['idtheloai'];?>> Xóa </a></td>
	  </tr>
	<?php
		$i++;
	  }
	?>
</table>
</div>