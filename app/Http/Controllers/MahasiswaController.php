<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{

    public function create()
    {
        return view('mahasiswa/add');
    }

    public function index()
    {
        $data_mahasiswa = Mahasiswa::all();
       // return $data_mahasiswa;

        return view('mahasiswa/index',compact('data_mahasiswa'));
    }
}
