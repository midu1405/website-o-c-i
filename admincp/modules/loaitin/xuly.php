<?php
	include("../connect.php"); //Kết nối csdl
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if($_POST['themloaitin']!=""){
		$tenloaitin = $_POST['tenloaitin'];
		$thutu = $_POST['thutu'];
		$trangthai = $_POST['trangthai'];
		//Định nghĩa lệnh insert vào CSDL
		$sql= "INSERT INTO loaitin(tenloaitin,thutu,trangthai) VALUES('$tenloaitin','$thutu','$trangthai')";
		mysql_query($sql);
		header("location: ../../index.php?ac=loaitin");
	}
	elseif(	$_POST['sualoaitin']!="")
	{
		//Thực hiện sửa loại tin
		$tenloaitin = $_POST['tenloaitin'];
		$thutu = $_POST['thutu'];
		$trangthai = $_POST['trangthai'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE loaitin SET tenloaitin='$tenloaitin', thutu='$thutu', trangthai='$trangthai' WHERE idloaitin='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=loaitin&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa
		$id=$_GET['id'];
		$sql="delete from loaitin where idloaitin='$id'";
		mysql_query($sql);
		header("location: ../../index.php?ac=loaitin");
	}
?>