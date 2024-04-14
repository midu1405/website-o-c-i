<?php
	include("modules/connect.php");
	if(isset($_POST['dangnhap']))
	{
		if($_POST['dangnhap'])
		{
			$sql="select * from nguoidung where tendangnhap='$_POST[tendangnhap]' and matkhau='$_POST[matkhau]'";
			$nguoidung=mysql_query($sql);
			if(mysql_num_rows($nguoidung)>0)	
			{
				session_register("userid");
				$_SESSION["userid"]=$_POST['tendangnhap'];
				header("location:index.php");
				exit();
			}
		}
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
<style type="text/css">

</style>
</head>
<body>
	<form action="login.php" method="post">
	  <table width="1195" border="0">
		<tr>
			<td height ="50" colspan="7" align="center" class="center">
				 &nbsp;&nbsp;---------- ĐĂNG NHẬP HỆ THỐNG--------- </td>
		</tr>
		<tr style="height:33">
			<td align="right" width="499">
			Tên đăng nhập:
			</td>
			<td colspan = 2>
				<input type="text" name="tendangnhap" size="30">
			</td>
		</tr>
		<tr style="height:33">
			<td align="right">
			Mật khẩu:
			</td>
			<td colspan = 2>
				<input type="password" name="matkhau" size="30">
			</td>
		</tr>
		<tr style="height:33">
			<td>&nbsp;
			</td>
			<td width="132">
				<input type="submit" name="dangnhap" value="Đăng nhập">
			</td>
			<td width="550" align="left">
				<input type="submit" name="thoat" value="Thoát">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
