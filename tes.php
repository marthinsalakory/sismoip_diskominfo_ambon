<?php include 'function.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NAMA</th>
                <th scope="col">IP</th>
                <th scope="col">LOKASI</th>
                <th scope="col">STATUS</th>
                <th scope="col">HASIL PING</th>
                <th scope="col">PEMBARUAN TERAKHIR</th>
            </tr>
        </thead>
        <tbody id="tdata">
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'api_ip.php',
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    data.forEach(myFunction);

                    function myFunction(i) {
                        console.log(i);
                        $('#tdata').append("<tr>" +
                            "<td>" + i[1] + "</td>" +
                            "<td>" + i[2] + "</td>" +
                            "<td>" + i[8] + "</td>" +
                            "<td>" + i[4] + "</td>" +
                            "<td>" + i[5] + "</td>" +
                            "<td>" + i[6] + "</td>" +
                            "</tr>");
                    }
                }
            });
        });
    </script>
</body>

</html>