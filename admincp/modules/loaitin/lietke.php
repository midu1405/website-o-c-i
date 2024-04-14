<div style="width:auto; margin-top:10px; float:right;">
<table class="ds" width="500" border="1px" style="font-size:14px;">
	<tr height="50">
    	<td colspan="6" align="center">
        	<b>DANH SÁCH LOẠI TIN</b>
        </td>
    </tr>
    <tr align="center" style="font-weight:bold"> 
		<td> STT </td>
        <td> Tên loại tin</td>
        <td> Thứ tự </td>
        <td> Trạng thái</td>
        <td colspan="2"> Quản trị</td>        
    </tr>
    
    <?php
		//$sql="select idloaitin, tenloaitin, thutu, trangthai from loaitin";
		$sql="select * from loaitin";
		$loaitin=mysql_query($sql);
		mysql_query("SET NAMES utf8");
	?>
    <?php
		$i=1;
		while($dong=mysql_fetch_array($loaitin))
		{
			//Thuc hien in ra man hinh
			echo "<tr>";
				echo "<td width='20'>". $i."</td>";
				echo "<td width=300>". $dong['tenloaitin']."</td>";
				echo "<td width=40>". $dong['thutu']."</td>";
				if ($dong['trangthai']==1)
				{
					$trangthai="Hiển thị";
				}
				else
				$trangthai="Không hiển thị";				
	
				echo "<td width=80>".$trangthai."</td>";
				echo "<td width=30> <a href=index.php?sua=loaitin&id=".$dong['idloaitin'].">Sửa </a></td>";
				echo "<td width=30> <a href=modules/loaitin/xuly.php?id=".$dong['idloaitin'].">Xóa <a/></td>";        
    		echo "</tr>";
			$i++;
		}
	?>
     
</table>
</div>