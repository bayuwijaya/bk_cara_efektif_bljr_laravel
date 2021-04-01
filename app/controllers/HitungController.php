<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class HitungController extends BaseController
{
    public function menuHitung()
    {
        return View::make('bab_5.menu');
    }

    public function viewTambah()
    {
        return View::make('bab_5.tambah');
    }

    public function viewKali()
    {
        return View::make('bab_5.kali');
    }

    public function processTambah()
    {
        $data1 = Input::get('data1');
        $data2 = Input::get('data2');

        $hasil = $data1 + $data2;
        return 'Hasil penjumlahan adalah : '.$hasil;
    }

    public function processKali()
    {
        $data1 = Input::get('data1');
        $data2 = Input::get('data2');

        $hasil = $data1 * $data2;
        return 'Hasil perkalian adalah : '.$hasil;
    }
}