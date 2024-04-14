<div class="tin" style="border:none; height:480px">
	<p class="title" style="font-weight:bold"> TIN TỨC CƯỚI</p>
			<?php
				$sql="select * from tintuc WHERE trangthai=0 ORDER BY idtintuc DESC LIMIT 5";//desc: Giam dan, asc: tang dan
				//include("admincp/modules/connect.php");
				$tintuc=mysql_query($sql);
				mysql_query("SET NAMES utf8");
			?>
			<?php
				while($dong = mysql_fetch_array($tintuc)){?>
					<div class="tin-tuc">						
						<?php //echo $trangthai; ?>             
						<a href="index.php?xem=tintuc&tintuc=<? echo $dong['idtintuc']; ?>"><img src="<?php echo $dong['anhminhhoa']; ?>" width="50px" height="180px" style="padding:5px; margin-left:13px;"></a>
						<p class="tieude">
							<a href="index.php?xem=tintuc&tintuc=<? echo $dong['idtintuc']; ?>">
							<?php echo $dong['tenbaiviet']; ?>
							</a>
						</p>
						<p class="tomtattin" height="30px"> <? echo $dong['tomtat']; ?> </p>
					</div>
					
				<?php }
			?>
	<div style="margin-bottom: 5px; clear:both;"></div>
	<div class="xoa"> </div>
</div>