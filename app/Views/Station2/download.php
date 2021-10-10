<!DOCTYPE html>
<html>

<head>
    <title>Monitoring System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/download.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/owl.css">
</head>

<body>

    <center>

        <h2>Data Pemantauan Air Sungai</h2>
        <h4> Lab IoT </h4>
        <br>

    </center>

    <table border="1" style="width: 100%">
        <tr>
            <th>Tanggal</th>
            <th>Rain Gauge</th>
            <th>Water Level</th>
        </tr>
        <?php foreach ($tables as $t) : ?>
        <tr>
            <td>
                <center><?= $t['tgl'] ?></center>
            </td>
            <td>
                <center><?= $t['rain'] ?></center>
            </td>
            <td>
                <center><?= $t['water'] ?></center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
    window.print();
    </script>

</body>

</html>