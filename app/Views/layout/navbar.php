<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('/img/foto/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= session()->get('nama_lengkap'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php
        $request = \Config\Services::request();
        ?>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?= ($request->uri->getSegment(1) === '') ? 'active treeview menu-open' : '' ?>">
                <a href="<?= base_url('/') ?>">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <?php if (session()->get('role_id') == 1) : ?>
                <li class="<?= ($request->uri->getSegment(1) === 'users' || $request->uri->getSegment(1) === 'user_opd') ? 'active treeview menu-open' : 'treeview' ?>">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Users</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= ($request->uri->getSegment(1) === 'users') ? 'active' : '' ?>"><a href="<?= base_url('/users'); ?>"><i class="fa fa-circle-o"></i>Semua User</a></li>
                        <li class="<?= ($request->uri->getSegment(1) === 'user_opd') ? 'active' : '' ?>"><a href="<?= base_url('/user_opd'); ?>"><i class="fa fa-circle-o"></i> User OPD</a></li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'role' || $request->uri->getSegment(1) === 'jenis_pajak' || $request->uri->getSegment(1) === 'data_opd' || $request->uri->getSegment(1) === 'kode_rekening') ? 'active treeview menu-open' : 'treeview' ?>">
                    <a href="#">
                        <i class="fa fa-database"></i> <span>Data Master</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= ($request->uri->getSegment(1) === 'role') ? 'active' : '' ?>"><a href="<?= base_url('/role'); ?>"><i class="fa fa-circle-o"></i> Role Users</a></li>
                        <li class="<?= ($request->uri->getSegment(1) === 'jenis_pajak') ? 'active' : '' ?>"><a href="<?= base_url('/jenis_pajak'); ?>"><i class="fa fa-circle-o"></i> Jenis Pendapatan</a></li>
                        <li class="<?= ($request->uri->getSegment(1) === 'data_opd') ? 'active' : '' ?>"><a href="<?= base_url('/data_opd'); ?>"><i class="fa fa-circle-o"></i> Data OPD</a></li>
                        <li class="<?= ($request->uri->getSegment(1) === 'kode_rekening') ? 'active' : '' ?>"><a href="<?= base_url('/kode_rekening'); ?>"><i class="fa fa-circle-o"></i> Kode Rekening</a></li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'target') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/target'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Target APBD</span>
                    </a>
                </li>
                <!-- <li class="<?= ($request->uri->getSegment(1) === 'target_lainnya') ? 'active treeview menu-open' : '' ?>">
                    <a href="/target_lainnya">
                        <i class="fa fa-bars"></i> <span>Target PAD Lainnya</span>
                    </a>
                </li> -->
                <li class="<?= ($request->uri->getSegment(1) === 'verifikasi') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/verifikasi'); ?>">
                        <i class="fa fa-check-square-o"></i> <span>Verifikasi</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (session()->get('role_id') == 3) : ?>
                <li class="<?= ($request->uri->getSegment(1) === 'realisasi') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/realisasi'); ?>">
                        <i class="fa fa-line-chart"></i> <span>Realisasi</span>
                    </a>
                </li>
                <?php if (session()->get('id_user') == 3) : ?>
                    <li class="header">PENDAPATAN TRANSFER</li>
                    <li class="<?= ($request->uri->getSegment(1) === 'dana_perimbangan' || $request->uri->getSegment(1) === 'dana_insentif_daerah' || $request->uri->getSegment(1) === 'dana_desa') ? 'active treeview menu-open' : 'treeview' ?>">
                        <a href="#">
                            <i class="fa fa-random"></i> <span>Pemerintah Pusat</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?= ($request->uri->getSegment(1) === 'dana_perimbangan') ? 'active' : '' ?>"><a href="<?= base_url('/dana_perimbangan'); ?>"><i class="fa fa-circle-o"></i> Dana Perimbangan</a></li>
                            <li class="<?= ($request->uri->getSegment(1) === 'dana_insentif_daerah') ? 'active' : '' ?>"><a href="<?= base_url('/dana_insentif_daerah'); ?>"><i class="fa fa-circle-o"></i> DID</a></li>
                            <li class="<?= ($request->uri->getSegment(1) === 'dana_desa') ? 'active' : '' ?>"><a href="<?= base_url('/dana_desa'); ?>"><i class="fa fa-circle-o"></i> Dana Desa</a></li>
                        </ul>
                    </li>
                    <li class="<?= ($request->uri->getSegment(1) === 'bagi_hasil_pajak') ? 'active treeview menu-open' : 'treeview' ?>">
                        <a href="#">
                            <i class="fa fa-exchange"></i> <span>Antar Daerah</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?= ($request->uri->getSegment(1) === 'bagi_hasil_pajak') ? 'active' : '' ?>"><a href="<?= base_url('/bagi_hasil_pajak'); ?>"><i class="fa fa-circle-o"></i> Bagi Hasil Pajak</a></li>
                        </ul>
                    </li>
                    <li class="header">LAIN-LAIN</li>
                    <li class="<?= ($request->uri->getSegment(1) === 'pendapatan_hibah') ? 'active treeview menu-open' : '' ?>">
                        <a href="<?= base_url('/pendapatan_hibah'); ?>">
                            <i class="fa fa-indent"></i> <span>Pendapatan Hibah</span>
                        </a>
                    </li>
                    <li class="<?= ($request->uri->getSegment(1) === 'lain_lain') ? 'active treeview menu-open' : '' ?>">
                        <a href="<?= base_url('/lain_lain'); ?>">
                            <i class="fa fa-th-large"></i> <span>Lain-Lain</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="header">LAPORAN</li>
                <li class="<?= ($request->uri->getSegment(1) === 'upload') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/upload'); ?>">
                        <i class="fa fa-upload"></i> <span>Upload</span>
                    </a>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'download') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/download'); ?>">
                        <i class="fa fa-download"></i> <span>Panduan Sistem</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (session()->get('role_id') == 4) : ?>
                <li class="<?= ($request->uri->getSegment(1) === 'verifikasi') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/verifikasi'); ?>">
                        <i class="fa fa-check-square-o"></i> <span>Verifikasi</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (session()->get('role_id') == 1 || session()->get('role_id') == 4) : ?>
                <li class="header">LAPORAN</li>
                <?php
                $bulan = date('m'); ?>
                <li class="<?= ($request->uri->getSegment(1) === 'laporan_perdinas' || $request->uri->getSegment(1) === 'laporanPerdinas') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/laporan_perdinas'); ?>">
                        <i class="fa fa-briefcase"></i> <span>Perdinas</span>
                    </a>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'laporan_pad' || $request->uri->getSegment(1) === 'laporanPad') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/laporan_pad'); ?>">
                        <i class="fa fa-book"></i> <span>PAD</span>
                    </a>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'la' || $request->uri->getSegment(1) === 'laporan') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/la'); ?>">
                        <i class="fa fa-file-text-o"></i> <span>Laporan</span>
                    </a>
                </li>
                <li class="<?= ($request->uri->getSegment(1) === 'laporan_opd') ? 'active treeview menu-open' : '' ?>">
                    <a href="<?= base_url('/laporan_opd'); ?>">
                        <i class="fa fa-download"></i> <span>Laporan OPD</span>
                    </a>
                </li>
            <?php endif; ?>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>