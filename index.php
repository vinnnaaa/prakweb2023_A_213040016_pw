<?php
// Koneksi ke database (gantilah dengan koneksi sesuai konfigurasi Anda)
$conn = mysqli_connect('localhost', 'root', '', 'prakweb_2023_a_213040016') or die('KONEKSI GAGAL!!');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel books
$result = $conn->query("SELECT * FROM buku");
$buku = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $buku[] = $row;
    }
}
// Tutup koneksi ke database
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku</title>
	<link rel="icon" href="assets/icon/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/custom-styles.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
	<div class="container-xl border my-5">
		<h3 class="text-center py-3">Daftar Buku</h3>
		<div class="py-5 px-3" id="content">
			<table class="table table-dark table-hover" id="itemTable" cellspacing="0" width="100%">

				<!-- Table Header -->
				<thead>
					<tr>
						<td class="col-1">#</td>
						<td class="col-6">Judul Buku</td>
						<td class="col-2">Pengarang</td>
						<td class="col-2">Tahun Terbit</td>
					</tr>
				</thead>
				<!-- End of Table Header -->

				<!-- Table Body -->
				<tbody>
                <?php
                                foreach ($buku as $b) { ?>
						<tr>
							<td class="text-center"><?= $b['id_buku']; ?></td>
							<td><?= $b['Judul_buku']; ?></td>
							<td><?= $b['Pengarang']; ?></td>
							<td><?= $b['Tahun_terbit']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="assets/js/scripts.js"></script>
	<script></script>

	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

	

</body>

</html>