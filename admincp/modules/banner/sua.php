<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM banner WHERE idbanner='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<form action="modules/banner/xuly.php?id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left; padding-left:30px; font-size:15px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG SỬA BANNER</td>
    </tr>
    <tr>
    	<td>
        	Tên ảnh:
        </td>
        <td>
        	<input type="text" name="ten" value="<?php echo $dong['ten'];?>">
        </td>
    </tr>
    <tr>
    	<td>
        	Ảnh minh họa:
        </td>
        <td colspan="4">
        	<img src="../<?php echo $dong['anhminhhoa']?>" width="50"/> 
            <input type="file" name="anhminhhoa">
        </td>
    </tr>
	<tr>
		<td>
        	Trạng thái:
        </td>
        <td>
        	<select name="trangthai">
            	<option value="1">Hiển thị </option>
                <option value="0">Không hiển thị </option>             
             </select>
        </td>
	</tr>
    <tr>
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="suabanner" value="Sửa ảnh" />
        </td>
    </tr>
</table>
</div>
</form>