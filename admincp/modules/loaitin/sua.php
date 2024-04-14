<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM loaitin WHERE idloaitin='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
?>
<form action="modules/loaitin/xuly.php?id=<?php echo $dong['idloaitin'];?>" method="post">
<div style="width:400px; float:left; ">
<table width="400" border="0" style="font-size:14px;">
	<tr>
    	<td colspan="2" height="40">
        	<div style="text-align:center; font-weight:bold; "> CHỨC NĂNG SỬA LOẠI TIN</div>
        </td>
    </tr>
    <tr>
    	<td width="100" height="30">
            <div align="right">
            Tên loại tin:
            </div>
        </td>
        <td width="300" height="30">
            <div align="left">
            <input class="nhaptenloaitin" type="text" name="tenloaitin" size="40" value="<?php echo $dong['tenloaitin'];?>">
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
            <input type="text" name="thutu" size="10" value="<?php echo $dong['thutu'];?>">
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
                <input type="submit" name="sualoaitin" value="Sửa loại tin"/>
            </td>
    </tr>
</table>
</div>
</form>