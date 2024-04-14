<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM album WHERE idalbum='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<form action="modules/album/xuly.php?id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left;font-size:15px; padding-left:30px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG SỬA ALBUM</td>
    </tr>
    <tr>
    	<td>
        	Tên Album:
        </td>
        <td>
        	<input type="text" name="tenalbum" value="<?php echo $dong['tenalbum'];?>">
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
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="suaalbum" value="Sửa ảnh" />
        </td>
    </tr>
</table>
</div>
</form>