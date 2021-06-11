<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index',compact('pendidikan'));
    }
    public function create()
    {
       $pendidikan = null;
       return view('backend.pendidikan.create',compact('pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')
                        ->with('success','Data Pendidikan baru telah berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')
                        ->with('success','Pendidikan berhasil diperbarui.');
    }
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')
                        ->with('success','Data Pendidikan berhasil dihapus');
    }
}