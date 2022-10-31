<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['user']);
unset($_SESSION);
session_destroy();
echo "
    <script>
        alert('BERHASIL LOGOUT');
        window.location.href = 'index';
    </script>
";
