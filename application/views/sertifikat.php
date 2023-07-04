<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Metode WP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
	.container {
		width: 700px;
		/* Atur lebar kontainer sesuai kebutuhan */
		/* height: 400px; */
		/* Atur tinggi kontainer sesuai kebutuhan */
		position: absolute;
		top: 40%;
		left: 50%;
		transform: translate(-50%, -50%);
		border: 1px solid black;
		padding: 15px;
	}

	table {
		border-collapse: collapse;
		padding: 20px;
		margin: 20px;
	}

	table,
	th,
	td {
		border: 1px solid black;
	}

	p {
		font-size: small;
	}

	.center-table {
		margin-left: auto;
		margin-right: auto;
	}
</style>

<body>


	<div id=halaman class="container">
		<nav class="navbar">
			<div class="container-fluid">
				<img src="<?= base_url('assets/img/logo.png'); ?>" alt="" style="height: 90px;">
				<div class="col mx-5">
					<p>SMPIT Insan Mubarak </br>
						Jl. Al-Mubarak II No.28 Kel. Joglo Kec. Kembangan Jakarta Barat 11640</br>
						Telp.: (021) 58906701 NPSN: 20109288</br>
						www.smpit-insanmubarak.sch.id Email: insanmubarak.smpit@gmail.com</p>
				</div>
			</div>
		</nav>

		<div class="d-flex justify-content-center mt-4">
			<h5>Laporan Hasil Keputusan</h5>
		</div>
		<div class="d-flex justify-content-center">
			<h6>Guru Terbaik SMPIT Insan Mubarak</h6>
		</div>
		<div class="d-flex justify-content-center">
			<h6>Berdasarkan hasil penilaian guru Terbaik, dinyatakan bahwa :</h6>
		</div>


		<div class="mx-auto">
			<table class="center-table">
				<thead>
					<tr align="center">
						<th>Nama Alternatif</th>
						<th>Nilai</th>
						<th width="15%">Ranking</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($hasil_wp as $keys) : ?>
						<tr align="center">
							<td align="left">
								<?php
								$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
								echo $nama_alternatif['nama'];
								?>

							</td>
							<td><?= $keys->nilai ?></td>
							<td><?= $no; ?></td>
						</tr>
					<?php
						$no++;
					endforeach ?>
				</tbody>
			</table>
		</div>

		<div class="d-flex justify-content-center mb-4">
			<h6>Demikian surat keputusan ini dibuat agar dipergunakan dengan semestinya</h6>
		</div>

		<div style="width: 50%; text-align: left; float: right;">Jakarta, <?php echo date('Y'); ?></div><br>
		<div style="width: 50%; text-align: left; float: right;">Kepala Sekolah</div><br>
		<div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br>
		<div style="width: 50%; text-align: left; float: right;">Arbrian Abdul Jamal</div>

	</div>
	<script>
		window.print();
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>