<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Modul;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function modul()
    {
        $modul = Modul::where('type', '=', 'parent')->orderBy('nu', 'ASC')->get();


        return $modul;
    }

    public function sub_modul()
    {
        $modul = Modul::where('type', '=', 'parent')->orderBy('nu', 'ASC')->get();

        $list = [];
        foreach ($modul as $modul) {
            $submodul = Modul::where('parent', '=', $modul->kode_modul)->orderBy('nu', 'ASC')->get();

            $list[] = [
                'kode_modul'    => $modul->kode_modul,
                'child'         => $submodul
            ];
        }


        return $list;
    }
}
