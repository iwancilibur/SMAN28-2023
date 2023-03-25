<?php 

   //Simpan dengan nama file panel.php
     require "koneksi.php";

 ?>
 
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Tables</title>
</head>

<body align ="center">
    <table border=5 width=50% align="center">
	<tr><td bgcolor=grey colspan="5" align="center"><font color=white size=20>LOG DATA TERSIMPAN</td></tr>
</table>
    <a class="btn" href="index.php"><img src="img/back.png" height="50" width="25%" ></a> 
	<a class="btn" href="data-hapus.php"><img src="img/del.png" height="50" width="25%" ></a>
	<table border=5 width=50% align="center">
		<thead>	
			<tr bgcolor=grey colspan="5" align="center">
				<th>ID</th>
				<th>Waktu</th>
				<th>Nama Device</th>
				<th>Sensor 1</th>
				<th>Sensor 2</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$datatampil = mysqli_query($dbconnect, "SELECT * from tb_save ORDER BY id DESC");
			$id=1;
			foreach ($datatampil as $row){
				echo "<tr class= bg-white >
					<td>$id</td>
					<td>".$row['waktu']."</td>
					<td>".$row['namadevice']."</td>
					<td>".$row['sensor1']."</td>
					<td>".$row['sensor2']."</td>

					</tr>";
				$id++;
			}
		$dbconnect->close();
		?>
		</tbody>
		
	</table>    
			
</body>
 
</html>