<form action="modules/loaitin/xuly.php" method="post" meta="utf-8">
<div style="width:400px; float:left; font-size:14px;">
<table width="400" border="0">
	<tr>
    	<td colspan="2" height="40" style=" font-weight:bold;">
        	<div style="text-align:center"> CHỨC NĂNG THÊM LOẠI TIN</div>
        </td>
    </tr>
    <tr>
    	<td width="100" height="30" >
            <div align="right">
            Tên loại tin:
            </div>
        </td>
        <td width="300" height="30">
            <div align="left">
            <input class="nhaptenloaitin" type="text" name="tenloaitin" size="40">
            </div>
        </td>
    </tr>
    <tr>
    	<td width="100" height="30">
            <div align="right">
            Thứ tự:
            </div>
        </td>
        <td width="300" height="30">
            <div align="left">
            <input type="text" name="thutu" size="10">
            </div>
        </td>
    </tr>
    <tr>
    	<td width="100" height="30">
            <div align="right">
            Trạng thái:
            </div>
        </td>
        <td width="300" height="30">
            <div align="left">
            <select name="trangthai">
            	<option value="1"> Hiển thị</option>
                <option value="0"> Không hiển thị</option>           
            </select>
            </div>
        </td>       
    </tr>
    <tr>
           <td colspan ="2" height="40" align="center">
        		<input type="submit" name="themloaitin" value="Thêm loại tin"/>                
            </td>
    </tr>
</table>
</div>
</form>