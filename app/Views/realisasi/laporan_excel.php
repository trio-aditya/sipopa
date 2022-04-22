<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Realisasi.xls");
?>

<html>

<body>
    <table>
        <tr>
            <th colspan="6">
                <center>LAPORAN REALISASI</center>
            </th>
        </tr>
        <tr>
            <th></th>
        </tr>
    </table>
    <table class="table table-hover" border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Keterangan</th>
                <th>Target PAD</th>
                <th>Tanggal</th>
                <th>Realisasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($realisasi as $value) : ?>
                <?php if (session()->get('id_user') == $value['user_id']) : ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td><?= $value['keterangan']; ?></td>
                        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                        <td><?= date('d-m-Y', strtotime($value['tanggal'])); ?></td>
                        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                        <?php if ($value['status'] == 0) : ?>
                            <td align="center"><span class="label label-warning">pending</span></td>
                        <?php endif; ?>
                        <?php if ($value['status'] == 1) : ?>
                            <td align="center"><span class="label label-success">diverifikasi</span></td>
                        <?php endif; ?>
                        <?php if ($value['status'] == 2) : ?>
                            <td align="center"><span class="label label-danger">ditolak</span></td>
                        <?php endif; ?>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Keterangan</th>
                <th>Target PAD</th>
                <th>Tanggal</th>
                <th>Realisasi</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>