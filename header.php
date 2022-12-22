<?php include 'function.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>SISMOJAR DISKOMINFO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="refresh" content="120" />
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="index" class="logo">SISMOJAR <span>DINAS KOMINFO</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="<?= $nav_beranda; ?>">
                        <a href="index"><span class="fa fa-home mr-3"></span> BERANDA</a>
                    </li>
                    <li class="nav_lok <?= $nav_lokasi; ?>">
                        <a class="dropdown-saya" style="cursor: pointer;">
                            <span class="fa-solid fa-location-dot mr-4"></span> LOKASI IP
                        </a>
                        <ul>
                            <?php if (isLogin()) : ?>
                                <?php if (mustRole('ADMIN')) : ?>
                                    <a style="cursor: pointer; margin-left: -20px;" data-bs-toggle="modal" data-bs-target="#ubah_lokasi"><i class="fa-solid fa-screwdriver-wrench"></i> KELOLA LOKASI</a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php foreach ($lokasi as $l) : ?>
                                <li>
                                    <form method="POST" action="index">
                                        <input required type="hidden" name="cari_lokasi" value="<?= $l['id']; ?>">
                                        <a class="nav_lok_item <?= (isset($nav_lok[$l['id']])) ? $nav_lok[$l['id']] : '' ?>" onclick="$(this).parent('form').submit()" style="cursor: pointer;"><?= $l['nama']; ?></a>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="<?= $nav_tentang; ?>">
                        <a href="tentang"><span class="fa-solid fa-address-card mr-3"></span> TENTANG SISMOJAR</a>
                    </li>
                    <li class="<?= $nav_kontak; ?>">
                        <a href="kontak"><span class="fa fa-paper-plane mr-3"></span> HUBUNGI KAMI</a>
                    </li>
                    <?php if (isLogin()) : ?>
                        <?php if (mustRole('ADMIN')) : ?>
                            <li class="<?= $nav_pengguna; ?>">
                                <a href="pengguna"><span class="fa fa-users mr-3"></span> KELOLA PENGGUNA</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="logout"><span class="fa-solid fa-power-off mr-3"></span> LOGOUT</a>
                        </li>
                    <?php endif; ?>
                    <?php if (noLogin()) : ?>
                        <li>
                            <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#login"><span class="fa-solid fa-right-to-bracket mr-3"></span> LOGIN</a>
                        </li>
                    <?php endif; ?>
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Hak Cipta &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Semua hak dilindungi undang-undang | Aplikasi ini di buat oleh <i class="icon-heart" aria-hidden="true"></i> <a style="color: #9AA2D6;font-weight: 700;" href="https://wa.me/082281021531" target="_blank">Romahdona Wijaya</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <?php if (isLogin()) : ?>
                <?php if (mustRole('ADMIN')) : ?>
                    <!-- Modal Lokasi -->
                    <div class="modal fade" id="ubah_lokasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">KELOLA LOKASI</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" class="row">
                                        <div class="col-8">
                                            <input placeholder="MASUKAN NAMA LOKASI" class="form-control text-uppercase" type="text" name="nama" id="nama">
                                        </div>
                                        <div class="col-4">
                                            <button name="tambah_lokasi" class="btn btn-primary"><i class="fa fa-add"></i> Tambah</button>
                                        </div>
                                    </form>
                                    <?php foreach ($lokasi as $l) : ?>
                                        <form method="POST" class="row mt-3">
                                            <div class="col-8">
                                                <input type="hidden" name="id" id="id" value="<?= $l['id']; ?>">
                                                <input placeholder="MASUKAN NAMA LOKASI" class="form-control text-uppercase" type="text" name="nama" id="nama" value="<?= $l['nama']; ?>">
                                            </div>
                                            <div class="col-4">
                                                <button name="ubah_lokasi" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                                                <button onclick="return confirm('HAPUS LOKASI INI?')" name="hapus_lokasi" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                            </div>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Modal Login -->
            <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="POST" class="modal-content">
                        <div class="modal-header" style="background: #3445B4;">
                            <h1 class="modal-title text-light fs-5" id="exampleModalLabel">LOGIN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <label for="username" class="form-label">USERNAME</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <label for="password" class="form-label">PASSWORD</label>
                                </div>
                                <div class="col-12">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                            <button name="btn_login" type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>