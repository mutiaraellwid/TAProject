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
<style>
@media print {
    table {
        page-break-after: always
    }
}
</style>

<body>
    <center>
        <h2>Data Pemantauan Air Sungai</h2>
        <h4>Lab IoT </h4><br>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th>Tanggal</th>
            <th>Rain Gauge</th>
            <th>Water Level</th>
        </tr>
        <?php 
        $lineCounter = 0;
        if (is_array($tables)) {
            foreach($tables as $row) {
                $lineCounter++;
        ?>
        <tr>
            <td>
                <center><?=$row['tgl'] ?></center>
            </td>
            <td>
                <center><?=$row['rain'] ?></center>
            </td>
            <td>
                <center><?=$row['water'] ?></center>
            </td>
        </tr>
        <?php
        if($lineCounter % 5 == 0) {
            echo '<span class="pageBreak"></span>' . PHP_EOL;
        }
    }
}
?>
    </table>
    <script>
    window.print();
    </script>

</html>