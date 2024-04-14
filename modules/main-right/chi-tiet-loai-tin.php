<?php
	$sql="select * from tintuc where idloaitin='$_GET[loaitin]'";
	$tintuc=mysql_query($sql);
	
?>
<div class="box-chitiet">
	<?php while ($dong=mysql_fetch_array($tintuc)){?>
    	<div style="float:left; border-bottom:1px solid #CCC;" >
           <a href="index.php?xem=tintuc&loaitin=<? echo $dong['idloaitin'];?>&tintuc=<? echo $dong['idtintuc']; ?>">
            <p> <img src="<? echo $dong['anhminhhoa']; ?>" width="150" style="float:left; margin:3px;"> </p>
             </a>
            <p class="tieude"> 
				<a href="index.php?xem=tintuc&loaitin=<? echo $dong['idloaitin'];?>&tintuc=<? echo $dong['idtintuc']; ?>">
            	<? echo $dong['tenbaiviet']; ?> 
                </a>
             </p>
            <p class="tomtattin"> <? echo $dong['tomtat']; ?> </p>
         </div> 
         <div style="clear:both"> </div>
         
       <?php }?>
        
</div>