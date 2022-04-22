<html>

<body>
    <table class="table table-hover">
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">KODE REKENING</th>
            <th rowspan="2">JENIS PENERIMAAN</th>
            <th rowspan="2">TARGET APBD</th>
            <th colspan="3">
                <center>REALISASI</center>
            </th>
            <th rowspan="2">%</th>
            <th rowspan="2">LEBIH/KURANG</th>
        </tr>
        <tr>
            <th>BULAN INI</th>
            <th>BULAN LALU</th>
            <th>S/D BLN INI</th>
        </tr>
        <?php foreach ($jenis_pendapatan1 as $value) : ?>
            <tr style="background-color: blue;">
                <th></th>
                <th><?= $value['jenis_pajak']; ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
            <tr style="background-color: yellow;">
                <th></th>
                <th></th>
                <th><?= $value['nama_opd']; ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </tr>
        <?php endforeach; ?>
        <tr>
            <?php $no = 1; ?>
            <?php foreach ($laporan_perdinas1 as $value) : ?>
                <td align="center"><?= $no++ ?></td>
                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        </tr>
    <?php endforeach; ?>

    <!-- 2 -->
    <?php foreach ($jenis_pendapatan2 as $value) : ?>
        <tr style="background-color: blue;">
            <th></th>
            <th><?= $value['jenis_pajak']; ?></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
        <tr style="background-color: yellow;">
            <th></th>
            <th></th>
            <th><?= $value['nama_opd']; ?></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tr>
    <?php endforeach; ?>
    <tr>
        <?php $no = 1; ?>
        <?php foreach ($laporan_perdinas2 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
    </tr>
<?php endforeach; ?>
<!-- 2 -->
    </table>
</body>

</html>