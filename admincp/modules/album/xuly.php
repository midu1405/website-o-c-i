<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themalbum']!="")
	{
		$tenalbum=$_POST['tenalbum'];
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
		$noidung=$_POST['noidung'];
		$idtheloai=$_POST['idtheloai'];
		$sql="INSERT INTO album(tenalbum,anhminhhoa,noidung,idtheloai) VALUES ('$tenalbum','$dich','$noidung','$idtheloai')";
		mysql_query($sql);
		header("location:../../index.php?ac=album");		
	}	
	elseif($_POST['suaalbum']!="")
	{
		//Thực hiện sửa loại tin
		$tenalbum=$_POST['tenalbum'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		if($name!='')
		{
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$noidung=$_POST['noidung'];
		$idtheloai=$_POST['idtheloai'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE album SET tenalbum='$tenalbum', anhminhhoa='$dich',noidung='$noidung',idtheloai='$idtheloai' WHERE idalbum='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=album&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from album where idalbum='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=album");
	}
?>