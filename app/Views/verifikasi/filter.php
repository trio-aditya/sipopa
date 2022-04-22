<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>


<table id="table_verifikasi" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Jenis Pajak</th>
            <th>Jenis Pendapatan</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($real as $value) : ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td><?= tgl_indo($value['tanggal']); ?></td>
                <td><?= $value['jenis_pajak']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                <?php if ($value['status'] == 0) : ?>
                    <td align="center"><span class="label label-warning">pending</span></td>
                <?php endif; ?>
                <?php if ($value['status'] == 1) : ?>
                    <td align="center"><span class="label label-success">diverifikasi</span></td>
                <?php endif; ?>
                <?php if ($value['status'] == 2) : ?>
                    <td align="center"><span class="label label-danger">tolak</span></td>
                <?php endif; ?>
                <td width="5%">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_realisasi']; ?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Jenis Pajak</th>
            <th>Jenis Pendapatan</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>
<!-- DataTables -->
<script src="<?= base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script>
    $(function() {
        $('#table_verifikasi').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
            'responsive': true
        })
    })
</script>