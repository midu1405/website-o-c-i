<?php
	//Chọn 10 bài viết thuộc cùng một loại tin
	$sql="select * from tintuc where idloaitin= '$dong[idloaitin]' limit 10";
	$tintuc=mysql_query($sql);
?>
<div class="box">
    	 <div class="tieude">
         	<img src="images/icon/5.png" style="float:left; margin-right:3px; padding-top:7px;">
            <p class=tieudekhung> <?php echo $dong['tenloaitin']; ?></p>
        </div>
        
        <div class="box-left">
       		<?php $dong=mysql_fetch_array($tintuc)?>               
	        <img src="<?php echo $dong['anhminhhoa']; ?>" width="150" style="margin:3px; float:left;">
            <p class="tieude">
                <a href="index.php?xem=tintuc&loaitin=<? echo $dong['idloaitin'];?>&tintuc=<? echo $dong['idtintuc']; ?>">
                    <?php echo $dong['tenbaiviet']; ?>
                 </a>
             </p>
            <p class="tomtattin"><?php echo $dong['tomtat']; ?> </p>
            
        </div>
        <div class="xoa">
        <!--Kết thúc bất kỳ box nào bên trong có độ cao và foat:left hoặc float:right thì phải xóa đi-->
        </div>
</div>	