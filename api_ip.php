<?php

include 'function.php';

$row = mysqli_query($conn, "SELECT * FROM `tb_ip`")->fetch_all();
echo json_encode($row);
