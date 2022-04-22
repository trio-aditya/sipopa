<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use App\Filters\LoginFilter;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'isLoggedIn' => LoginFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'isLoggedIn' => [
            'before' =>
            [
                '',
                'jenis_pajak',
                'jenis_pajak/*',
                'data_opd',
                'data_opd/*',
                'kode_rekening',
                'kode_rekening/*',
                'role',
                'role/*',
                'users',
                'users/*',
                'target',
                'target/*',
                'realisasi',
                'realisasi/*',
                'laporan_perdinas',
                'laporan_perdinas/*',
                'verifikasi',
                'verifikasi/*',
                'dana_perimbangan',
                'dana_perimbangan/*',
                'dana_insentif_daerah',
                'dana_insentif_daerah/*',
                'dana_desa',
                'dana_desa/*',
                'bagi_hasil_pajak',
                'bagi_hasil_pajak/*',
                'pendapatan_hibah',
                'pendapatan_hibah/*',
                'lain_lain',
                'lain_lain/*',
                'upload',
                'upload/*',
                'laporan_opd',
                'laporan_opd/*',
                'laporan',
                'laporan/*',
                'laporanPerdinas',
                'laporanPerdinas/*',
                'laporan_pad',
                'laporan_pad/*',
                'laporanPad',
                'laporanPad/*',
                'la',
                'la/*',
                'download',
                'download/*'
            ]
        ]
    ];
}
