<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Mata Kuliah</title>
</head>
<body>
	<center>
		<h2>Daftar Mata Kuliah</h2>
	</center>
	<hr/>
	<table align="center" width="80%" border="2">
		<th>
			<td>NO.</td>
			<td>Kode Mata Kuliah</td>
			<td>Nama Mata Kuliah</td>
			<td>SKS</td>
		</th>
		<?php

			require_once "matkul.php";

			$matkul = new Matkul();
			$result = $matkul->listMatkul();

			if (!empty($result)) {
				foreach ($result as $data) {
					echo "<tr>
						<td></td>
						<td>$data[no]</td>
						<td>$data[kd_matkul]</td>
						<td>$data[nm_matkul]</td>
						<td>$data[sks]</td>
						</tr>";
				}
			}

		?>
	</table>
</body>
</html>