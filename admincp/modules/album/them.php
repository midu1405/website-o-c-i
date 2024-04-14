<form action="modules/album/xuly.php" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left; font-size:15px; padding-left:30px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG THÊM ALBUM</td>
    </tr>
    <tr>
    	<td>
        	Tên Album:
        </td>
        <td>
        	<input type="text" name="tenalbum">
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
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="themalbum" value="Thêm ảnh"  />
        </td>
    </tr>
</table>
</div>
</form>