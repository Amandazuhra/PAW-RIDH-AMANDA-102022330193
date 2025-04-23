<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
         // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $Mahasiswa = [
            'nama'=> 'amanda',
            'nim' => '102022330193',
            'email' => 'amanda26zuhra@gmail.com',
            'jurusan' => 'Sistem Informasi', 
            'fakultas' => 'Fakultas Rekayasa Industri'
        ];
        return view('profil',['profil'=> $Mahasiswa]);
    }
}
