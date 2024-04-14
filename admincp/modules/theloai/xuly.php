<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themtheloai']!="")
	{
		$tentheloai=$_POST['tentheloai'];
		$tenkhongdau=$_POST['tenkhongdau'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		//echo $name;
		if(isset($name))
		{	
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$thutu=$_POST['thutu'];
		$vitri=$_POST['vitri'];
		$idloaitin=$_POST['loaitin'];
		$sql="INSERT INTO theloai(tentheloai,tenkhongdau,thutu,vitri,idloaitin) VALUES ('$tentheloai','$tenkhongdau','$thutu','$vitri','$idloaitin')";
		mysql_query($sql);
		header("location:../../index.php?ac=theloai");		
	}	
	elseif($_POST['suatheloai']!="")
	{
		//Thực hiện sửa loại tin
		$tentheloai=$_POST['tentheloai'];
		$tenkhongdau=$_POST['tenkhongdau'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		if($name!='')
		{
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$thutu=$_POST['thutu'];
		$vitri=$_POST['vitri'];
		$idloaitin=$_POST['loaitin'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE theloai SET tentheloai='$tentheloai', tenkhongdau='$tenkhongdau', thutu='$thutu', vitri='$vitri', idloaitin='$idloaitin' WHERE idtheloai='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=theloai&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from theloai where idtheloai='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=theloai");
	}
?>