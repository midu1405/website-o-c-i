<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['thembaiviet']!="")
	{
		$tenbaiviet=$_POST['tenbaiviet'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		//echo $name;
		if(isset($name))
		{	
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$trangthai=$_POST['trangthai'];
		$idtheloai=$_POST['theloai'];
		$sql="INSERT INTO tintuc(tenbaiviet, anhminhhoa, tomtat, trangthai, noidung, idtheloai) VALUES ('$tenbaiviet','$dich','$tomtat','$trangthai','$noidung','$idtheloai')";
		mysql_query($sql);
		header("location:../../index.php?ac=tintuc");		
	}	
	elseif($_POST['suabaiviet']!="")
	{
		//Thực hiện sửa
		$tenbaiviet=$_POST['tenbaiviet'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		if($name!='')
		{
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$trangthai=$_POST['trangthai'];
		$idtheloai=$_POST['theloai'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE tintuc SET tenbaiviet='$tenbaiviet',anhminhhoa='$dich',tomtat='$tomtat',noidung='$noidung',trangthai='$trangthai',idtheloai='$idtheloai' WHERE idtintuc='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=tintuc&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from tintuc where idtintuc='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=tintuc");
	}
?>