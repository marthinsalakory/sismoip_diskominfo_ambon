<?php include 'header.php' ?>
<h2 class="mb-4"><span class="fa fa-home mr-3"></span> Beranda</h2>
<div class="d-flex justify-content-between align-items-center">
	<div>
		<img class="mx-3" src="assets/img/Lambang_Ambon.png" width="60px">
		<img class="mx-3" src="assets/img/logo_kominfo.png" width="60px">
	</div>
	<div>
		<h3><?= date('D, d-m-y'); ?></h3>
	</div>
</div>
<!-- START Informasi -->
<div class="w-100 bg-info mt-5 row mb-5" style="height: max-content;border-radius: 10px;">
	<div class="col-lg-8 col-sm-12 text-light">
		<h3 class="text-light fw-bold">BERITA
			<?php if (isLogin()) : ?>
				<button class="btn btn-warning float-end mt-1" data-bs-toggle="modal" data-bs-target="#ubah_berita"><i class="fa fa-edit"></i></button>
			<?php endif; ?>
		</h3>

		<?php if (!empty($berita->num_rows)) { ?>
			<ul style="overflow: auto; height: 130px;">
				<?php foreach ($berita as $b) : ?>
					<li><?= $b['isi']; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php } else { ?>
			<p>BELUM ADA BERITA !</p>
		<?php } ?>
	</div>
	<div class="col-lg-4 col-sm-12 bg-warning d-flex flex-column justify-content-evenly" style="border-radius: 10px; height: 200px;">
		<h3 class="text-light text-center bg-danger" style="border-radius: 10px;">TERPUTUS (<?= $terputus; ?>)</h3><br>
		<h3 class="text-light text-center bg-success" style="border-radius: 10px;">TERHUBUNG (<?= $terhubung; ?>)</h3>
	</div>
</div>

<?php if (isLogin()) : ?>
	<!-- Modal Berita -->
	<div class="modal fade" id="ubah_berita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Ubah Berita</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" class="row">
						<div class="col-8">
							<input placeholder="MASUKAN ISI BERITA" class="form-control text" type="text" name="isi" id="isi">
						</div>
						<div class="col-4">
							<button name="tambah_berita" class="btn btn-primary"><i class="fa fa-add"></i> Tambah</button>
						</div>
					</form>
					<?php foreach ($berita as $b) : ?>
						<form method="POST" class="row mt-3">
							<div class="col-8">
								<input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
								<input placeholder="MASUKAN ISI BERITA" class="form-control text" type="text" name="isi" id="isi" value="<?= $b['isi']; ?>">
							</div>
							<div class="col-4">
								<button name="ubah_berita" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
								<button onclick="return confirm('HAPUS BERITA INI?')" name="hapus_berita" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
							</div>
						</form>
					<?php endforeach; ?>
				</div>
				<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
			</div> -->
			</div>
		</div>
	</div>
<?php endif; ?>
<!-- END Informasi -->

<!-- START DATA IP -->
<h3 class="text-center mt-5" style="font-weight: 700;"><?= $title_ip; ?></h3>

<?php if (isLogin()) : ?>
	<form method="POST" class="w-100 text-center mb-3">
		<button type="button" class="btn bg-primary text-light" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fa fa-add"></i> Tambah</button>
		<button type="submit" name="all_ping_refresh" onclick="return confirm('YAKIN INGIN MEREFRESH SEMUA IP')" class="btn bg-warning text-light"><i class="fa fa-refresh"></i> All Ping refresh</button>
	</form>
<?php endif; ?>

<?php if (isLogin()) : ?>
	<!-- Modal Tambah Data Ip -->
	<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<form method="POST" class="modal-content">
				<div class="modal-header bg-primary">
					<h1 class="modal-title fs-5 text-light" id="exampleModalLabel">TAMBAH DATA</h1>
					<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<label class="form-label text-dark" for="nama">NAMA <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<input placeholder="MASUKAN NAMA" required maxlength="255" class="form-control text-uppercase" type="text" name="nama" id="nama">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<label class="form-label text-dark" for="ip">ALAMAT IP <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<input placeholder="MASUKAN ALAMAT IP" required maxlength="255" class="form-control text-uppercase" type="text" name="ip" id="ip">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<label class="form-label text-dark" for="lokasi">LOKASI <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<select required class="form-select" name="lokasi" id="lokasi">
								<option value="">PILIH LOKASI</option>
								<?php foreach ($lokasi as $l) : ?>
									<option value="<?= $l['id']; ?>"><?= $l['nama']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
					<button type="submit" name="tambah_ip" class="btn bg-primary text-light">TAMBAH</button>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>
<div>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr class="bg-primary text-light">
					<th scope="col">No</th>
					<th scope="col">NAMA</th>
					<th scope="col">IP</th>
					<th scope="col">LOKASI</th>
					<th scope="col">STATUS</th>
					<th scope="col">HASIL PING</th>
					<th scope="col">PEMBARUAN TERAKHIR</th>
					<?php if (isLogin()) : ?>
						<th scope="col">AKSI</th>
					<?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($all_ip->num_rows)) { ?>
					<?php $i = 1; ?>
					<?php foreach ($all_ip as $ip) : ?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td style="min-width: 200px;"><?= $ip['nama']; ?></td>
							<td style="min-width: 200px;"><?= $ip['ip']; ?></td>
							<td style="min-width: 200px;"><?= $ip['nama_lokasi'] ?></td>
							<td style="min-width: 200px;"><?= $ip['status'] == true ? "<i class='mx-2 p-1 bg-success text-light fa fa-check'></i>TERHUBUNG" : "<i class='mx-2 p-1 bg-danger text-light fa fa-power-off'></i>TERPUTUS" ?></td>
							<td style="min-width: 450px;"><?= $ip['hasil_ping'] ?></td>
							<td style="min-width: 200px;"><?= $ip['pembaruan_terakhir'] ?></td>
							<?php if (isLogin()) : ?>
								<td class="text-center d-flex">
									<form method="POST">
										<input type="hidden" name="id" value="<?= $ip['id']; ?>">
										<button name="ping1" onclick="return confirm('YAKIN INGIN MEREFRESH PING IP INI')" class="btn bg-primary text-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ping Refresh"><i class="fa fa-refresh"></i></button>
									</form>
									<button onclick="$('#ubah #id').val('<?= $ip['id'] ?>');$('#ubah #nama').val('<?= $ip['nama'] ?>');$('#ubah #ip').val('<?= $ip['ip'] ?>');$('#ubah #lokasi #lokasi<?= $ip['lokasi'] ?>').attr('selected', '');" type="button" class="btn btn-warning btn-sm mx-1 " data-bs-toggle="modal" data-bs-target="#ubah"><i class="fa fa-edit"></i></button>
									<form method="POST">
										<input type="hidden" name="id" id="id" value="<?= $ip['id']; ?>">
										<button onclick="return confirm('Hapus?')" name="hapus-ip" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							<?php endif; ?>
						</tr>
					<?php endforeach; ?>
				<?php } else { ?>
					<tr>
						<td class="text-center" colspan="8">Belum Ada Data IP</td>
					</tr>
				<?php } ?>
				<!-- <tr>
				<th scope="row">2</th>
				<td>AKSES POINT 2</td>
				<td>167.8.9.1</td>
				<td>BANK BRI</td>
				<td class="d-flex align-items-center"><i class="mx-1 p-1 bg-danger text-light fa fa-power-off"></i>TERPUTUS</td>
				<td>1283,1ms 2402lg</td>
				<td><?= date('d-m-Y h:i:s'); ?></td>
				<td class="d-flex justify-content-evenly">
					<button class="btn btn-warning btn-sm mx-1"><i class="fa fa-edit"></i></button>
					<button class="btn btn-danger btn-sm mx-1"><i class="fa fa-trash"></i></button>
				</td>
			</tr> -->
			</tbody>
		</table>
	</div>
</div>
<?php if (isLogin()) : ?>
	<!-- Modal UBAH Data Ip -->
	<div class="modal fade" id="ubah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<form method="POST" class="modal-content">
				<div class="modal-header bg-primary">
					<h1 class="modal-title fs-5 text-light" id="exampleModalLabel">UBAH DATA</h1>
					<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<label placeholder="MASUKAN NAMA" class="form-label text-dark" for="nama">NAMA <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<input type="hidden" name="id" id="id">
							<input required maxlength="255" class="form-control text-uppercase" type="text" name="nama" id="nama">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<label placeholder="MASUKAN ALAMAT IP" class="form-label text-dark" for="ip">ALAMAT IP <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<input required maxlength="255" class="form-control text-uppercase" type="text" name="ip" id="ip">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<label class="form-label text-dark" for="lokasi">LOKASI <span class="text-danger">*</span></label>
						</div>
						<div class="col-12">
							<select required class="form-select" name="lokasi" id="lokasi">
								<option value="">PILIH LOKASI</option>
								<?php foreach ($lokasi as $l) : ?>
									<option id="lokasi<?= $l['id'] ?>" value="<?= $l['id']; ?>"><?= $l['nama']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
					<button type="submit" name="ubah_ip" class="btn bg-primary text-light">SIMPAN PERUBAHAN</button>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>
<!-- END DATA IP -->
<?php include 'footer.php' ?>