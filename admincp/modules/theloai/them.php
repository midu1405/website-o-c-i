<form action="modules/theloai/xuly.php" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left; padding-left:30px; font-size:15px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG THÊM THỂ LOẠI</td>
    </tr>
    <tr>
    	<td width="125">
        	Tên thể loại:
        </td>
        <td width="311">
        	<input type="text" name="tentheloai" value="<?php echo $dong['tentheloai'];?>">
        </td>
    </tr>
	<tr>
    	<td>
        	Tên không dấu:
        </td>
        <td>
        	<input type="text" name="tenkhongdau" value="<?php echo $dong['tenkhongdau'];?>">
        </td>
    </tr>
	<tr>
    	<td>
        	Loại tin:
        </td>
        <td>
        <?php
				$sql="select * from loaitin";
				$loaitin=mysql_query($sql);
				mysql_query("SET NAMES utf8");
		?>
        	<select name="loaitin">
            	<?php
					while ($dong_loaitin=mysql_fetch_array($loaitin))
					{
						if($dong_loaitin['idloaitin']==$dong['idloaitin'])
						{
							echo "<option  value =".$dong_loaitin['idloaitin']."selected = selected>".$dong_loaitin['tenloaitin']."</option>";
						}
						else
						{
							echo "<option value =".$dong_loaitin['idloaitin'].">".$dong_loaitin['tenloaitin']."</option>";
						}
					}
				?>                
            </select>        	
        </td>
        <td width="13">&nbsp;
        	
        </td>
        <td width="13">&nbsp;
        	
        </td>
        <td width="16">&nbsp;
        	
        </td>
    </tr>
	<tr>
    	<td>
        	Thứ tự:
        </td>
        <td>
        	<input type="text" name="thutu" value="<?php echo $dong['thutu'];?>">
        </td>
    </tr>
    <tr>
        <td>
        	Vị trí:
        </td>
        <td>
        	<select name="vitri">
                <option value="1">1 </option>
                <option value="0"> 2</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="themtheloai" value="Thêm thể loại" />
        </td>
    </tr>
</table>
</div>
</form>