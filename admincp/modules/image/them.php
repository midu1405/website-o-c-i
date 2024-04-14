<form action="modules/image/xuly.php" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left; font-size:15px; padding-left:30px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG THÊM ẢNH</td>
    </tr>
    <tr>
    	<td>
        	Tên ảnh:
        </td>
        <td>
        	<input type="text" name="tenimage">
        </td>
    </tr>
    <tr>
    	<td>
        	Ảnh minh họa:
        </td>
        <td colspan="4">
            <input type="file" name="anhminhhoa">
            
        </td>
    </tr>
	<tr>
    	<td>
        	Loại tin:
        </td>
        <td>
        <?php
				$sql="select * from album";
				$album=mysql_query($sql);
				mysql_query("SET NAMES utf8");
		?>
        	<select name="album">
            	<?php
					while ($dong_album=mysql_fetch_array($album))
					{
						if($dong_album['idalbum']==$dong['idalbum'])
						{
							echo "<option  value =".$dong_album['idalbum']."selected = selected>".$dong_album['tenalbum']."</option>";
						}
						else
						{
							echo "<option value =".$dong_album['idalbum'].">".$dong_album['tenalbum']."</option>";
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
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="themimage" value="Thêm ảnh"  />
        </td>
    </tr>
</table>
</div>
</form>