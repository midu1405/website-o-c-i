<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themimage']!="")
	{
		$tenimage=$_POST['tenimage'];
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
		$idalbum=$_POST['idalbum'];
		$sql="INSERT INTO image(tenimage,anhminhhoa,noidung,idalbum) VALUES ('$tenimage','$dich','$noidung','$idalbum')";
		mysql_query($sql);
		header("location:../../index.php?ac=image");		
	}	
	elseif($_POST['suaimage']!="")
	{
		//Thực hiện sửa loại tin
		$tenimage=$_POST['tenimage'];
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
		$idalbum=$_POST['idalbum'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE image SET tenimage='$tenimage', anhminhhoa='$dich',noidung='$noidung',idalbum='$idalbum' WHERE idimage='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=image&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from image where idimage='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=image");
	}
?>