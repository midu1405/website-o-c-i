<form action="modules/banner/xuly.php" method="POST" enctype="multipart/form-data">
<div style="width:400px; float:left; padding-left:30px; font-size:15px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG THÊM BANNER</td>
    </tr>
    <tr>
    	<td>
        	Tên ảnh:
        </td>
        <td>
        	<input type="text" name="ten">
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
        	<input type="submit" name="thembanner" value="Thêm ảnh"  />
        </td>
    </tr>
</table>
</div>
</form>