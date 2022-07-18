<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil(){
       $a = Siswa::all();
       return view('siswa.index', ['siswa' => $a]);
    }
}
