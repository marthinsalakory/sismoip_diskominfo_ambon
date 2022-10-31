<?php include 'header.php' ?>
<?php mustRoleRedirect('ADMIN') ?>
<!-- TOPBAR -->
<h2 class="mb-4"><span class="fa fa-users mr-3"></span> Kelola Pengguna</h2>
<div class="d-flex justify-content-between align-items-center">
    <div>
        <img class="mx-3" src="assets/img/Lambang_Ambon.png" width="60px">
        <img class="mx-3" src="assets/img/logo_kominfo.png" width="60px">
    </div>
    <div>
        <h3><?= date('D, d-m-y'); ?></h3>
    </div>
</div>
<div class="mt-5 border px-5 pt-3 pb-5" style="background-color: #fff;">
    <h3 class="fw-bold text-center">KELOLA PENGGUNA</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ROLE</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th class="text-center" scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td style="min-width: 150px;">
                        <form method="POST">
                            <select required name="role" id="role" class="form-select">
                                <option value="">PILIH ROLE</option>
                                <option value="PEGAWAI">PEGAWAI</option>
                                <option value="ADMIN">ADMIN</option>
                            </select>
                    </td>
                    <td style="min-width: 200px;"><input required type="text" class="form-control" name="username" placeholder="MASUKAN USERNAME"></td>
                    <td style="min-width: 200px;"><input required type="password" class="form-control" name="password" placeholder="MASUKAN PASSWORD"></td>
                    <td style="min-width: 100px;" class="text-center">
                        <button name="add_user" class="btn btn-primary btn-sm"><i class="fa fa-add"></i></button>
                        </form>
                    </td>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($users as $u) : ?>
                    <tr>
                        <th scope="row">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?= $u['id']; ?>"><?= ++$i; ?>
                        </th>
                        <td style="min-width: 150px;">
                            <select required name="role" id="role" class="form-select">
                                <option <?= $u['role'] == 'PEGAWAI' ? 'selected' : ''; ?> value="PEGAWAI">PEGAWAI</option>
                                <option <?= $u['role'] == 'ADMIN' ? 'selected' : ''; ?> value="ADMIN">ADMIN</option>
                            </select>
                        </td>
                        <td style="min-width: 200px;"><input value="<?= $u['username']; ?>" required type="text" class="form-control" name="username" placeholder="MASUKAN USERNAME"></td>
                        <td style="min-width: 200px;">
                            <input type="hidden" name="password_old" value="<?= $u['password']; ?>">
                            <input type="password" class="form-control" name="password" placeholder="MASUKAN PASSWORD BARU">
                        </td>
                        <td style="min-width: 100px;" class="text-center">
                            <button onclick="return confirm='INGIN MENGUBAH PASSWORD PENGGUNA INI?'" name="ubah_user" class="btn btn-warning btn-sm mx-1 my-1"><i class="fa fa-save"></i></button>
                            <button onclick="return confirm='INGIN MENGHAPUS PENGGUNA INI?'" name="hapus_user" class="btn btn-danger btn-sm mx-1 my-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php' ?>