<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //tambahkan ini
use App\BarangModel;    //tambahkan ini agar controller tau
                        //kalau kita menggunakan model 'BarangModel.php'

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //berikut cara menggunakan query builder :
        // $daftar_barang = DB::table('stuff')->get();
        // return view('pages.index', ['semua_barang' => $daftar_barang]);
        //
        //berikut menggunakan eloquent ORM
        $daftar_barang = BarangModel::all();
        return view('pages.index', ['semua_barang' => $daftar_barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tambah_barang = new BarangModel;
        $tambah_barang->nama_barang = $request->addNamaBarang; 
        $tambah_barang->jumlah_barang = $request->addJumlahBarang;
        $tambah_barang->save();
        return redirect('/beranda-yo');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_barang = BarangModel::find($id);
        $update_barang->nama_barang = $request->updateNamaBarang;
        $update_barang->jumlah_barang = $request->updateJumlahBarang;
        $update_barang->save();
        return redirect('/beranda-yo');
        // return dd($update_barang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangModel::destroy($id);
        return redirect('/beranda-yo');
        // return dd($id);
    }
}
