<!DOCTYPE html>
<html>

<body>

<h4>Tampilan Format JSON Tabel Admin</h4>


<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from admin');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['nama admin'] = $row["nama_admin"];
		$data['password'] = $row["password"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>


<h4>Tampilan Format JSON Tabel Berita</h4>


<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from berita');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['waktu'] = $row["waktu"];
		$data['judul'] = $row["judul"];
		$data['isi'] = $row["isi"];
		$data['title'] = $row["title"];
		$data['content'] = $row["content"];
		$data['img1'] = $row["img1"];
		$data['img2'] = $row["img2"];
		$data['img3'] = $row["img3"];

		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>



<h4>Tampilan Format JSON Tabel Kategori</h4>


<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from kategori');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['nama kategori'] = $row["nama_kategori"];
		$data['deskripsi'] = $row["deskripsi"];
		$data['img1'] = $row["img1"];
		$data['img2'] = $row["img2"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>

<h4>Tampilan Format JSON Tabel Objek</h4>
<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from objek');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['kategori '] = $row["kategori"];
		$data['nama objek'] = $row["nama_objek"];
		$data['deskripsi'] = $row["deskripsi"];
		$data['img1'] = $row["img1"];
		$data['img2'] = $row["img2"];
		$data['img3'] = $row["img3"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>


<h4>Tampilan Format JSON Tabel Saran</h4>


<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from saran');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['nama pengunjung '] = $row["nama_pengunjung"];
		$data['e-mail'] = $row["e-mail"];
		$data['saran'] = $row["saran"];
		array_push($responsistem["data"], $data);
 
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Admin</th>
			<th>Password</th>
			
		</tr>
		<h3>Tampilan Tabel Admin</h3>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_admin']; ?></td>
				<td><?php echo $d['password']; ?></td>
				
			</tr>
			<?php 
		}
		?>
		</table>


		<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Waktu</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Title</th>
			<th>Content</th>
			<th>Link 1</th>
			<th>Link 2</th>
			<th>Link 3</th>
			
		</tr>
				<h3>Tabel Berita</h3>
				<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from berita");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['waktu']; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['isi']; ?></td>
				<td><?php echo $d['title']; ?></td>
				<td><?php echo $d['content']; ?></td>
				<td><?php echo $d['img1']; ?></td>
				<td><?php echo $d['img2']; ?></td>
				<td><?php echo $d['img3']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
		<h3>Tabel Kategori</h3>
				<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama Kategori</th>
			<th>Deskripsi</th>
			<th>Link 1</th>
			<th>Link 2</th>
			
		</tr>
				<?php 
		include 'koneksi.php';
	
		$data = mysqli_query($koneksi,"select * from kategori");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_kategori']; ?></td>
				<td><?php echo $d['deskripsi']; ?></td>
				<td><?php echo $d['img1']; ?></td>
				<td><?php echo $d['img2']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>

	<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Kategori</th>
			<th>Nama Objek</th>
			<th>Deskripsi</th>
			<th>Link 1</th>
			<th>Link 2</th>
			<th>Link 3</th>
			
		</tr>
				<h3>Tabel Objek</h3>
				<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from objek");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['kategori']; ?></td>
				<td><?php echo $d['nama_objek']; ?></td>
				<td><?php echo $d['deskripsi']; ?></td>
				<td><?php echo $d['img1']; ?></td>
				<td><?php echo $d['img2']; ?></td>
				<td><?php echo $d['img3']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	
	<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Kategori</th>
			<th>Nama Objek</th>
			<th>Deskripsi</th>
			
	</tr>
				
	<h3>Tabel Saran</h3>
				<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from saran");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_pengunjung']; ?></td>
				<td><?php echo $d['e-mail']; ?></td>
				<td><?php echo $d['saran']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>




</body>
</html>
