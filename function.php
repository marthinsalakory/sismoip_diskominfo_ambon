<?php

session_start();
include 'connecting.php';

$berita = mysqli_query($conn, "SELECT * FROM `berita`");
$lokasi = mysqli_query($conn, "SELECT * FROM `lokasi`");
$pesan = mysqli_query($conn, "SELECT * FROM `pesan`");
$tentang = mysqli_query($conn, "SELECT * FROM `tentang`")->fetch_object();
$users = mysqli_query($conn, "SELECT * FROM `users`");

// FILTER LOKASI
if (isset($_POST['cari_lokasi'])) {
    $id = $_POST['cari_lokasi'];
    $nav_lok[$id] = 'active';
    $nav_lokasi = 'active';
    $all_ip = mysqli_query($conn, "SELECT * FROM `tb_ip` WHERE `id_lokasi` = '$id'");
    $title_ip = "DATA IP " . mysqli_query($conn, "SELECT * FROM `lokasi` WHERE `id` = '$id'")->fetch_object()->nama;
} else {
    $nav_lokasi = '';
    $all_ip = mysqli_query($conn, "SELECT * FROM `tb_ip`");
    $title_ip = "SEMUA DATA IP";
}

// navbar Active
$explodenav = explode('/', $_SERVER['SCRIPT_FILENAME']);
$fileon = end($explodenav);
if ($fileon == 'index.php') {
    if (empty($nav_lokasi)) {
        $nav_beranda = 'active';
    }
} else if ($fileon == 'tentang.php') {
    $nav_tentang = 'active';
} else if ($fileon == 'kontak.php') {
    $nav_kontak = 'active';
} else if ($fileon == 'pengguna.php') {
    $nav_pengguna = 'active';
}


// TAMBAH DATA IP
if (isset($_POST['tambah_ip'])) {
    isLoginRedirect();
    $nama = htmlspecialchars(strtoupper($_POST['nama']));
    $ip = htmlspecialchars(strtoupper($_POST['ip']));
    $lokasi = htmlspecialchars(strtoupper($_POST['lokasi']));
    $pembaruan_terakhir = date('d-m-Y h:i:s');

    if (mysqli_query($conn, "INSERT INTO `daftar_ip`(`nama`, `ip`, `lokasi`, `pembaruan_terakhir`) VALUES ('$nama','$ip','$lokasi', '$pembaruan_terakhir')")) {
        echo "
            <script>
                alert('BERHASIL MENAMBAHKAN DATA IP BARU');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENAMBAHKAN DATA IP BARU');
                window.location.href = 'index';
            </script>
        ";
    }
}

// UBAH DATA IP
if (isset($_POST['ubah_ip'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars(strtoupper($_POST['nama']));
    $ip = htmlspecialchars(strtoupper($_POST['ip']));
    $lokasi = htmlspecialchars(strtoupper($_POST['lokasi']));
    $pembaruan_terakhir = date('d-m-Y h:i:s');

    if (mysqli_query($conn, "UPDATE `daftar_ip` SET `nama`='$nama',`ip`='$ip',`lokasi`='$lokasi',`pembaruan_terakhir`='$pembaruan_terakhir' WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGUBAH DATA IP');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGUBAH DATA IP');
                window.location.href = 'index';
            </script>
        ";
    }
}

// HAPUS DATA IP
if (isset($_POST['hapus-ip'])) {
    isLoginRedirect();
    $id = $_POST['id'];
    if (mysqli_query($conn, "DELETE FROM `daftar_ip` WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGHAPUS DATA IP');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGHAPUS DATA IP');
                window.location.href = 'index';
            </script>
        ";
    }
}

// TAMBAH BERITA
if (isset($_POST['tambah_berita'])) {
    isLoginRedirect();
    $isi = htmlspecialchars($_POST['isi']);

    if (mysqli_query($conn, "INSERT INTO `berita`(`isi`) VALUES ('$isi')")) {
        echo "
            <script>
                alert('BERHASIL MENAMBAHKAN BERITA');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENAMBAHKAN BERITA');
                window.location.href = 'index';
            </script>
        ";
    }
}

// UBAH BERITA
if (isset($_POST['ubah_berita'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);
    $isi = htmlspecialchars($_POST['isi']);

    if (mysqli_query($conn, "UPDATE `berita` SET `isi`='$isi' WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGUBAH BERITA');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGUBAH BERITA');
                window.location.href = 'index';
            </script>
        ";
    }
}

// HAPUS BERITA
if (isset($_POST['hapus_berita'])) {
    $id = htmlspecialchars($_POST['id']);

    if (mysqli_query($conn, "DELETE FROM `berita` WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGHAPUS 1 BERITA');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGHAPUS 1 BERITA');
                window.location.href = 'index';
            </script>
        ";
    }
}

// TAMBAH LOKASI
if (isset($_POST['tambah_lokasi'])) {
    isLoginRedirect();
    $nama = htmlspecialchars(strtoupper($_POST['nama']));

    if (mysqli_query($conn, "INSERT INTO `lokasi`(`nama`) VALUES ('$nama')")) {
        echo "
            <script>
                alert('BERHASIL MENAMBAHKAN LOKASI');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENAMBAHKAN LOKASI');
                window.location.href = 'index';
            </script>
        ";
    }
}

// UBAH LOKASI
if (isset($_POST['ubah_lokasi'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars(strtoupper($_POST['nama']));

    if (mysqli_query($conn, "UPDATE `lokasi` SET `nama`='$nama' WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGUBAH LOKASI');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGUBAH LOKASI');
                window.location.href = 'index';
            </script>
        ";
    }
}

// HAPUS LOKASI
if (isset($_POST['hapus_lokasi'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);

    if (mysqli_query($conn, "DELETE FROM `lokasi` WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGHAPUS 1 LOKASI');
                window.location.href = 'index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGHAPUS 1 LOKASI');
                window.location.href = 'index';
            </script>
        ";
    }
}

// KIRIM PESAN
if (isset($_POST['kirim_pesan'])) {
    $nama = htmlspecialchars(strtoupper($_POST['nama']));
    $email = htmlspecialchars(strtoupper($_POST['email']));
    $judul = htmlspecialchars(strtoupper($_POST['judul']));
    $pesan = htmlspecialchars(strtoupper($_POST['pesan']));

    if (mysqli_query($conn, "INSERT INTO `pesan`(`nama`, `email`, `judul`, `pesan`) VALUES ('$nama','$email', '$judul','$pesan')")) {
        echo "
            <script>
                alert('BERHASIL MENGIRIM PESAN');
                window.location.href = 'kontak';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGIRIM PESAN');
                window.location.href = 'kontak';
            </script>
        ";
    }
}

// HAPUS PESAN
if (isset($_POST['hapus_pesan'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);

    if (mysqli_query($conn, "DELETE FROM `pesan` WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGHAPUS 1 PESAN');
                window.location.href = 'kontak';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGHAPUS 1 PESAN');
                window.location.href = 'kontak';
            </script>
        ";
    }
}

// UBAH TENTANG
if (isset($_POST['ubah_tentang'])) {
    $id = $tentang->id;
    $tentang = htmlspecialchars(strtoupper($_POST['tentang']));

    if (mysqli_query($conn, "UPDATE `tentang` SET `tentang`='$tentang' WHERE `id` = $id")) {
        echo "
            <script>
                alert('BERHASIL MENGUBAH DETAIL APLIKASI');
                window.location.href = 'tentang';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGUBAH DETAIL APLIKASI');
                window.location.href = 'tentang';
            </script>
        ";
    }
}

// TAMBAH USER
if (isset($_POST['add_user'])) {
    isLoginRedirect();
    $id = uniqid();
    $role = htmlspecialchars(strtoupper($_POST['role']));
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

    if (mysqli_query($conn, "INSERT INTO `users`(`id`, `role`, `username`, `password`) VALUES ('$id','$role','$username','$password')")) {
        echo "
            <script>
                alert('BERHASIL MENAMBAHKAN USER');
                window.location.href = 'pengguna';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENAMBAHKAN USER');
                window.location.href = 'pengguna';
            </script>
        ";
    }
}

// UBAH USER
if (isset($_POST['ubah_user'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);
    $role = htmlspecialchars(strtoupper($_POST['role']));
    $username = htmlspecialchars($_POST['username']);
    if (!empty($_POST['password'])) {
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    } else {
        $password = $_POST['password_old'];
    }

    if (mysqli_query($conn, "UPDATE `users` SET `role`='$role', `username`='$username', `password`='$password' WHERE `id` = '$id'")) {
        echo "
            <script>
                alert('BERHASIL MENGUBAH PENGGUNA');
                window.location.href = 'pengguna';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGUBAH PENGGUNA');
                window.location.href = 'pengguna';
            </script>
        ";
    }
}

// HAPUS PENGGUNA
if (isset($_POST['hapus_user'])) {
    isLoginRedirect();
    $id = htmlspecialchars($_POST['id']);

    if (mysqli_query($conn, "DELETE FROM `users` WHERE `id` = '$id'")) {
        echo "
            <script>
                alert('BERHASIL MENGHAPUS 1 PENGGUNA');
                window.location.href = 'pengguna';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('GAGAL MENGHAPUS 1 PENGGUNA');
                window.location.href = 'pengguna';
            </script>
        ";
    }
}


// LOGIN APP
if (isset($_POST['btn_login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $row = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username'");
    if ($row->num_rows) {
        if (password_verify($password, $row->fetch_object()->password)) {
            $_SESSION['login'] = true;
            $_SESSION['user'] = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username'")->fetch_object();
            echo "
            <script>
                alert('BERHASIL LOGIN');
                window.location.href = 'index';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('GAGAL LOGIN');
                window.location.href = 'index';
            </script>
        ";
        }
    } else {
        echo "
            <script>
                alert('GAGAL LOGIN');
                window.location.href = 'index';
            </script>
        ";
    }
}

// $user_id = $_SESSION['user']->id;
// var_dump(mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'")->num_rows);
// die;
// Function Cek Sudah Login
function isLogin()
{
    global $conn;
    if (isset($_SESSION['login']) && isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']->id;
        if ($_SESSION['login'] == true && mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'")->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function isLoginRedirect()
{
    if (!isLogin()) {
        header("Location: index.php");
        exit;
    }
}

// Function Cek Belum Login
function noLogin()
{
    if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

// Function Detail User Login
function user()
{
    if (isLogin()) {
        global $conn;
        $user_id = $_SESSION['user']->id;
        return mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'")->fetch_object();
    }
}

// Function Cek Role
function mustRole($role)
{
    if (user()->role == $role) {
        return true;
    } else {
        return false;
    }
}
function mustRoleRedirect($role)
{
    if (user()->role == $role) {
        return true;
    } else {
        echo "
            <script>
                window.location.href = 'index';
            </script>
        ";
    }
}
