<div class="tinimage" style="border:none;">
	<?php 
		$sql="select * from image WHERE idalbum";
		include("admincp/modules/connect.php");
		$image=mysql_query($sql);
		mysql_query("SET NAMES utf8");?>
		<?php
					
		while($dong=mysql_fetch_array($image)){?>
			
				<a href="../aocuoi/index.php"><img src="<?php echo $dong['anhminhhoa'];?>" style="padding:7px; margin-left:10px;" width="200px" height="300px" title="<? echo $dong['ten'];?>"/></a>
			
	<?php 
	}
	?>
</div>