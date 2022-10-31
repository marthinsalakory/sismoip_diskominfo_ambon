<?php include 'header.php' ?>
<!-- TOPBAR -->
<h2 class="mb-4"><span class="fa fa-paper-plane mr-3"></span> Hubungi Kami</h2>
<div class="d-flex justify-content-between align-items-center">
    <div>
        <img class="mx-3" src="assets/img/Lambang_Ambon.png" width="60px">
        <img class="mx-3" src="assets/img/logo_kominfo.png" width="60px">
    </div>
    <div>
        <h3><?= date('D, d-m-y'); ?></h3>
    </div>
</div>

<!-- FORM PENGIRIMAN PESAN -->
<?php if (noLogin()) : ?>
    <form method="POST" class="mt-5 px-5 pt-3 pb-5 border bg-info text-light" style=" border-radius: 10px;">
        <h3 class="fw-bold text-center text-light"><span class="fa fa-paper-plane mr-3"></span> HUBUNGI KAMI</h3>
        <div class="row">
            <div class="col-12">
                <label class="form-label" for="nama">NAMA</label>
            </div>
            <div class="col-12">
                <input maxlength="100" placeholder="MASUKAN NAMA" required class="form-control text-uppercase" type="text" name="nama" id="nama">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label class="form-label" for="email">ALAMAT EMAIL</label>
            </div>
            <div class="col-12">
                <input maxlength="100" placeholder="MASUKAN ALAMAT EMAIL" required class="form-control text-uppercase" type="email" name="email" id="email">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label class="form-label" for="judul">JUDUL</label>
            </div>
            <div class="col-12">
                <input maxlength="100" placeholder="MASUKAN JUDUL PESAN" required class="form-control text-uppercase" type="text" name="judul" id="judul">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label class="form-label" for="pesan">PESAN</label>
            </div>
            <div class="col-12">
                <textarea required class="form-control text-uppercase" name="pesan" id="pesan" cols="30" rows="10" placeholder="MASUKAN PESAN"></textarea>
            </div>
        </div>
        <div class="mt-3 text-center">
            <button name="kirim_pesan" class="btn btn-warning bt-lg">KIRIM</button>
            <button type="reset" class="btn btn-danger bt-lg">HAPUS</button>
        </div>
    </form>
<?php endif; ?>

<!-- DATA PESAN -->
<?php if (isLogin()) : ?>
    <div class="border mt-5 px-5 pt-3 pb-5" style="background-color: #fff;">
        <h3 class="fw-bold text-center"><i class="fa-solid fa-envelope"></i> PESAN MASUK</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT EMAIL</th>
                        <th scope="col">JUDUL</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php if (!empty($pesan->num_rows)) { ?>
                        <?php foreach ($pesan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['email']; ?></td>
                                <td><?= $p['judul']; ?></td>
                                <td class="d-flex justify-content-evenly">
                                    <button onclick="$('#detail_nama').html('<?= $p['nama'] ?>');$('#detail_email').html('<?= $p['email'] ?>');$('#detail_emaill').attr('href','<?= 'mailto:' . strtolower($p['email']) ?>');$('#detail_judul').html('<?= $p['judul'] ?>');$('#detail_pesann').html(`<?= nl2br($p['pesan']) ?>`);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detail_pesan"><i class="fa fa-eye"></i></button>
                                    <a href="mailto:<?= strtolower($p['email']); ?>" class="btn btn-warning btn-sm mx-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BALAS PESAN"><i class="fa-solid fa-reply"></i></a>
                                    <form method="POST">
                                        <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
                                        <button onclick="return confirm('Hapus?')" name="hapus_pesan" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="HAPUS PESAN"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <tr>
                            <td class="text-center" colspan="5">BELUM ADA PESAN MASUK</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="detail_pesan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3445B4;">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="fa-solid fa-envelope"></i> DETAIL PESAN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2 fw-bold">NAMA</div>
                        <div class="col-10" id="detail_nama"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 fw-bold">EMAIL</div>
                        <div class="col-10" id="detail_email"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 fw-bold">JUDUL</div>
                        <div class="col-10" id="detail_judul"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 fw-bold">PESAN</div>
                        <div class="col-10" id="detail_pesann"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">KEMBALI</button>
                    <a id="detail_emaill" type="button" class="btn btn-primary"><i class="fa-solid fa-reply"></i> BALAS PESAN</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php include 'footer.php' ?>