<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM tintuc WHERE idtintuc='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<form action="modules/tintuc/xuly.php?id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data">
<div style="width:500px; float:left">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<table width="500px" border="0px" style="padding-bottom:20px; font-size:14px;">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG SỬA BÀI VIẾT</td>
    </tr>
    <tr>
    	<td>
        	Tên bài viết:
        </td>
        <td>
        	<input type="text" name="tenbaiviet" value="<?php echo $dong['tenbaiviet'];?>">
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
        	Thể loại:
        </td>
        <td>
        <?php
				$sql="select * from theloai";
				$theloai=mysql_query($sql);
				mysql_query("SET NAMES utf8");
		?>
        	<select name="theloai">
            	<?php
					while ($dong_theloai=mysql_fetch_array($theloai))
					{
						if($dong_theloai['idtheloai']==$dong['idtheloai'])
						{
							echo "<option  value =".$dong_theloai['idtheloai']."selected = selected>".$dong_theloai['tentheloai']."</option>";
						}
						else
						{
							echo "<option value =".$dong_theloai['idtheloai'].">".$dong_theloai['tentheloai']."</option>";
						}
					}
				?>                
            </select>        	
        </td>
        <td>&nbsp;
        	
        </td>
        <td>&nbsp;
        	
        </td>
        <td>&nbsp;
        	
        </td>
    </tr>
    <tr>
    	<td>
        	Tóm tắt:
        </td>
        <td colspan ="4">
        	<textarea name="tomtat" cols="50" rows="5">
			<?php echo $dong['tomtat'];?>
            </textarea>
        </td>
    </tr>
    <tr>
    	<td>
        	Nội dung:
        </td>
        <td colspan="4">
        	<textarea name="noidung" cols="50" rows="10" >
			<?php echo $dong['noidung'];?>
            </textarea>
        </td>
    </tr>
    <tr>
    	<td>
        	Trạng thái:
        </td>
        <td>
        	<select name="trangthai">
            	<option value="0">Hiển thị </option>
                <option value="1">Không hiển thị </option>             
             </select>
        </td>
        <td>&nbsp;
        
        </td>
        <td>
        	Vị trí:
        </td>
        <td>
        	<select name="vitri">
                <option value="1">Nổi bật </option>
                <option value="0"> Bình thường</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="suabaiviet" value="Sửa bài viết" />
        </td>
    </tr>
</table>
</div>
</form>