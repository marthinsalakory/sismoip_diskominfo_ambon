<?php include 'header.php' ?>
<!-- TOPBAR -->
<h2 class="mb-4">GRAFIK</h2>
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
<div class="card mt-5 border px-5 pt-3 pb-5">
    <div class="card-body">
        <h3 class="text-uppercase">GRAFIK <?= (isset($_POST['cari_lokasi']) ? $title_ip : '') ?></h3>
        <div class="row">
            <div class="col-md-12">
                <canvas id="myChart" width="200" height="100"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php foreach ($all_ip as $ip) : ?> "<?= $ip['nama'] ?>",
                <?php endforeach; ?>
            ],
            datasets: [{
                label: 'Upload Max Limit',
                data: [
                    <?php foreach ($all_ip as $ip) : ?> <?= $ip['upload_max_limit'] ?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(255, 99, 132)',
                    <?php endforeach; ?>
                ],
                borderColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(255,99,132,1)',
                    <?php endforeach; ?>
                ],
                borderWidth: 1
            }, {
                label: 'Download Max Limit',
                data: [
                    <?php foreach ($all_ip as $ip) : ?> <?= $ip['download_max_limit'] ?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(75, 192, 192)',
                    <?php endforeach; ?>
                ],
                borderColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(75, 192, 192, 1)',
                    <?php endforeach; ?>
                ],
                borderWidth: 1
            }, {
                label: 'After Upload Max Limit',
                data: [
                    <?php foreach ($all_ip as $ip) : ?> <?= $ip['after_upload_max_limit'] ?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(153, 102, 255)',
                    <?php endforeach; ?>
                ],
                borderColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(153, 102, 255, 1)',
                    <?php endforeach; ?>
                ],
                borderWidth: 1
            }, {
                label: 'After Download Max Limit',
                data: [
                    <?php foreach ($all_ip as $ip) : ?> <?= $ip['after_download_max_limit'] ?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(255, 159, 64)',
                    <?php endforeach; ?>
                ],
                borderColor: [
                    <?php foreach ($all_ip as $ip) : ?> 'rgba(255, 159, 64, 1)',
                    <?php endforeach; ?>
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<?php include 'footer.php' ?>