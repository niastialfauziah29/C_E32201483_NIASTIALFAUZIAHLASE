<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class niasticontrollers extends Controller
{
    public function index(){
        //return "HAI SEMUANYA SAYA NIASTI ALFAUZIAH LASE, SAYA SEKARANG BELAJAR CONTROLLER LARAVEL";
        $nama = "NIASTI AL FAUZIAH LASE";

        $pelajaran = ["Model View Controller","Laravel","Pemrogaman Lanjut"];

        return view('niastialfauziah', compact('nama','pelajaran'));
    }

    public function create()
    {
        return "Metodh ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    public function store(Request $request)
    {
        return "Metodh ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    
    public function show($id)
    {
        return "Metodh ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }

    public function edit($id)
    {
        return "Metodh ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "Metodh ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }

    public function destory($id)
    {
        return "Metodh ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    }


}





