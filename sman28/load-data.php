<?php
  include 'koneksi.php';
  $data = query("SELECT * FROM tb_monitoring")[0];

?> 

<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body >
		<table border=5 width=100% align="center">
        <tr >
		<td  colspan="5" align="center"><img src="img/icon.png" width=50%></td>
		</tr>
		
		<tr bgcolor=yellow>
			<td><h1 >NAME DEVICE</h1></td>
			<td><h1 >TIME</h1></td>
			<td><h1 >TEMP</h1></td>
			<td><h1 >HUM</h1></td>
		</tr>
		<tr>
			<td><h1 class="mb-1"><?=$data["namadevice"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["waktu"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["sensor1"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["sensor2"];?></h1></td>
		</tr>
		
		</table>


</body>
</html>


