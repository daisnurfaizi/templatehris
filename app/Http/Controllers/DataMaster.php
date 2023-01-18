<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMaster extends Controller
{
    public function Perusahaan()
    {
        return view('datamaster.perusahaan');
    }

    public function Lembaga()
    {
        return view('datamaster.lembagapendidikan');
    }

    public function Bank()
    {
        return view('datamaster.bank');
    }

    public function RumahSakit()
    {
        return view('datamaster.rumahsakit');
    }
}
