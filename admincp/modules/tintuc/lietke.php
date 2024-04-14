<div style="width:500px; float:left; margin-top:10px;">
<table class="ds" width="500" border="1">
  <tr style="font-weight:bold; font-size:15px; text-align:center;">
    <td>STT</td>
    <td>Tên bài viết</td>
    <td>Ảnh minh họa</td>
    <td>Trạng thái</td>
    <td>Thể loại</td>
    <td>Vị trí</td>
    <td colspan="2"> Quản trị</td>
  </tr>
  <?php
  	$sql="select * from tintuc";
	$tintuc=mysql_query($sql);
	mysql_query("SET NAMES utf8");	

	
  ?>
  	<?php
	  $i=1;
	  while ($dong=mysql_fetch_array($tintuc))
	  {
	?>
	  <tr>
		<td style="text-align:center;"><?php echo $i; ?></td>
		<td><?php echo $dong['tenbaiviet']; ?></td>
		<td><img src="../<?php echo $dong['anhminhhoa']; ?>" width="50" /></td>
			<?php 
				if ($dong['trangthai']==1)
				{ 
					$trangthai="Không hiển thị";
				}
				else
					$trangthai="Hiển thị";
			?>
		<td><?php echo $trangthai; ?></td>
        
		<?php
			$sql="select * from theloai where idtheloai='$dong[idtheloai]'";
			$theloai=mysql_query($sql);
			$dongtheloai=mysql_fetch_array($theloai);
		?>
		<td><?php echo $dongtheloai['tentheloai']; ?></td>
			<?php
				if($dong['vitri']==1)
				{ $vitri="Nổi bật";
				}
				else
					$vitri="Bình thường";
			?>
		<td><?php echo $vitri; ?></td>
		<td><a href=index.php?sua=tintuc&id=<?php echo $dong['idtintuc'];?>> Sửa </a></td>
		<td><a href=modules/tintuc/xuly.php?id=<?php echo $dong['idtintuc'];?>> Xóa </a></td>
	  </tr>
	<?php
		$i++;
	  }
	?>
</table>
</div>