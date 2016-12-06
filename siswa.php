<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();
$age = new Age();

?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>Date of Birth</th>
		<th>Age</th>
		<th>NATIONALITY</th>
		<th>Detail</th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?> </td>
		<td><?php echo $a['full_name']?> </td>
		<td><?php echo $a['date_ob']?> </td>
		<td><?php echo $age->cekUmur($a['date_ob'])?></td>
		<td><?php echo $a['nationality']?> </td>
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa']?> ">Detail</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa']?> ">Edit</a></td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?> ">Delete</a></td>
	</tr>
	<?php endforeach?>
</table>