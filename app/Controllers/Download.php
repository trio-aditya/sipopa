<?php

namespace App\Controllers;

class Download extends BaseController
{

    //Download panduan sistem untuk OPD
    public function download()
    {
        return $this->response->download('panduan_sistem/Panduan_Penggunaan_Sipopa_OPD.pdf', null);
    }
}
