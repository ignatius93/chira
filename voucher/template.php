																																																						<?php
if(substr($validity,-1) == "d"){
  $validity = "   <br>MASA AKTIF : ".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "MASA AKTIF : ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}	            	            
if($getprice == "3000"){ $color = "#E50877";} 
elseif($getprice == "1000"){ $color = "#752CEB";}
elseif($getprice == "2000"){ $color = "#13C013";}
elseif($getprice == "3000"){ $color = "#E50877";}
elseif($getprice == "4000"){ $color = "#F75418";}
elseif($getprice == "5000"){ $color = "#1433FD";}
elseif($getprice == "8000"){ $color = "#663399";}
elseif($getprice == "10000"){ $color = "#663399";}
elseif($getprice == "12000"){ $color = "#2E8B57";}
elseif($getprice == "15000"){ $color = "#2E8B57";}
elseif($getprice == "17000"){ $color = "#0000FF";}
elseif($getprice == "20000"){ $color = "#0000FF";}
elseif($getprice == "35000"){ $color = "#6495ED";} 
elseif($getprice == "40000"){ $color = "#6495ED";} 
elseif($getprice == "80000"){ $color = "#FF8C00";}
elseif($getprice == "85000"){ $color = "#FF8C00";}
elseif($getprice == "160000"){ $color = "#DC143C";} 
elseif($getprice == "170000"){ $color = "#DC143C";} 
else{ $color = "#FF69B4";}?>  
<!--mks-mulai-->
<table class="voucher" style="background:#FFF;margin: 1px;border: 1px solid <?php echo $color ?>; border-radius: 5px;">
<tbody>
<tr>
<td style="text-align: center; ">
</tr>
<tr>
<td>
<table style=" text-align: center; width: 90px;">
<tbody>	
<P style=" margin-top:-10px;margin-bottom:5px"></P>
<td>
<table style="width:100%;"> 
<?php if($usermode == "vc"){?>
<tr>
<tr style="color: #444;text-align: center; font-size: 12px; font-weight:bold;">
<p style=" margin-top:-13px;margin-bottom:5px"> 
<td ><?php echo $price;?></td>
<tr style="color: #333;font-weight:bold; font-size: 12px;">
<td style="background:#FFF;width:100%; border: 1px solid <?php echo $color ?>;border-radius: 5px;text-align: center;"><?php echo $username;?></td>
</tr>
<?php }elseif($usermode == "up"){?>
<tr>
<tr style="color: #444;text-align: center; font-size: 12px; font-weight:bold;">
<p style=" margin-top:-13px;margin-bottom:5px"> 
<td ><?php echo $price;?></td>
</tr>
<tr style="color: #333;font-weight:bold; font-size: 9px;">
<td style="background:#FFF;width:100%; border: 1px solid <?php echo $color ?>;border-radius: 5px;text-align: center;">U: <?php echo $username;?><br>
P: <?= $password; ?></td>
</tr> 
<?php }?> 
</tr> 
<br>
<td colspan="2" style="border-radius: 5px;text-align: center; font-weight:bold;font-size: 7px;">
<P style=" margin-top:-5px;margin-bottom:5px"></P>
<?php echo $validity;?>
<P style=" margin-top:-12px;margin-bottom:5px"></P> 
	
</td>
</table>	
</tr>	
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        