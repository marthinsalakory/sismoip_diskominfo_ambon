<?php include 'header.php' ?>
<!-- TOPBAR -->
<h2 class="mb-4">Tentang</h2>
<div class="d-flex justify-content-between align-items-center">
    <div>
        <img class="mx-3" src="assets/img/Lambang_Ambon.png" width="60px">
        <img class="mx-3" src="assets/img/logo_kominfo.png" width="60px">
    </div>
    <div>
        <h3><?= date('D, d-m-y'); ?></h3>
    </div>
</div>

<!-- TENTANG -->
<div class="mt-5 bg-info text-light border px-5 pt-3 pb-5">
    <h3 class="text-light text-center fw-bold">TENTANG SISMOJAR
        <?php if (isLogin()) : ?>
            <button class="btn btn-warning btn-sm float-end" data-bs-toggle="modal" data-bs-target="#edit_tentang"><i class="fa fa-edit"></i></button>
        <?php endif; ?>
    </h3>
    <p><?= nl2br($tentang->tentang); ?></p>
</div>

<?php if (isLogin()) : ?>
    <!-- Modal Edit Tentang -->
    <div class="modal fade" id="edit_tentang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="POST" class="modal-content">
                <div class="modal-header" style="background: #3445B4;">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Edit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class='form-control text-uppercase' name="tentang" id="tentang" cols="30" rows="10" placeholder="MASUKAN DETAIL APLIKASI"><?= nl2br($tentang->tentang); ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">KEMBALI</button>
                    <button name="ubah_tentang" type="submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php include 'footer.php' ?>