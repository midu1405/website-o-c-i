<?php
	$sql="select * from tintuc where idtintuc='$_GET[tintuc]'";
	$tintuc=mysql_query($sql);
	$dong=mysql_fetch_array($tintuc);
?>
<div class="box-chitiet">
    <p class="tieude"> <? echo $dong['tenbaiviet']; ?> </p>
    <p class="tomtattin"> <? echo $dong['tomtat']; ?> </p>
    <p class="noidung" style="float:center;"> <? echo $dong['noidung']; ?> </p>
</div>