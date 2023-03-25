<?php 

   //Simpan dengan nama file panel.php
     require "koneksi.php";
     $sql= mysqli_query($dbconnect, "SELECT * FROM tb_control" );
	 while($row = mysqli_fetch_assoc($sql)){
 ?>
 
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <title>DASHBOARD IOT</title>
</head>

<body align="center">
	
	 <div class="load-data"></div>
	 <table border=5 width=100% align="center">
        <tr >
                
					<tr>
					<td align="center" bgcolor=#D3D3D3>CONTROL 1 | <?php if ($row ['control1'] == '0'){$state = 'OFF';}else{$state = 'ON';}echo "STATUS = ". $state;?></td>
					<td align="center" bgcolor=#D3D3D3>CONTROL 2 | <?php if ($row ['control2'] == '0'){$state = 'OFF';}else{$state = 'ON';}echo "STATUS = ". $state;?></td>						  
					</tr>
					
					<tr>
						<td align="center">				 
						<a class="btn" href="aksikontrol.php?channel=1&state=1"><img src="img/on.png"  height="100" width="100" ></a>
						<a class="btn" href="aksikontrol.php?channel=1&state=0"><img src="img/off.png" height="100" width="100" ></a>
						</td>
						
						<td align="center">			 
						<a class="btn" href="aksikontrol.php?channel=2&state=1"><img src="img/on.png"  height="100" width="100" ></a>
						<a class="btn" href="aksikontrol.php?channel=2&state=0"><img src="img/off.png" height="100" width="100" ></a>
						</td>
					
					</tr>
        </tr>
      </table>
<?php 
}
?>
	<a class="btn" href="data-tampil.php"><img src="img/log.png" height="100%" width="100%" ></a>
 <p> Copyright © 2021 Iwan Cilibur. All rights reserved. </p>
 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/script.js"></script>
</body>
 
</html>
