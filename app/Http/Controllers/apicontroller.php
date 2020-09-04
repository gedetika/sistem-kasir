<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel; //tambah model caranya use App\nama_model_kalian

class apicontroller extends Controller
{
    public function get_all_barang(){
        // return response()->json(BarangModel::all(), 200);
        $daftar_barang = BarangModel::all();
        return response([
            'status' => true,
            'message' => 'Daftar Barang',
            'data' => $daftar_barang
        ], 200);
    }

    public function insert_data_barang(Request $request){
        $insert_barang = new BarangModel;
        $insert_barang->nama_barang = $request->namaBarang;
        $insert_barang->jumlah_barang = $request->jmlBarang;
        $insert_barang->save();
        return response([
            'status' => true,
            'message' => 'Barang Disimpan',
            // 'data' => $insert_barang
        ], 200);
    }

    public function update_data_barang(Request $request, $id){
        //cek terlebih dahulu data yang akan di-update melalui id
        //apakah barang ada atau tidak, jika tidak return not found
        $check_barang = BarangModel::firstWhere('kode_barang', $id);
        if($check_barang){
            // echo 'data yang anda cari tersedia';
            // $requestData = json_decode($request->getContent(), true);
            $data_barang = BarangModel::find($id);
            $data_barang->nama_barang = $request->input('nama_barang');
            $data_barang->jumlah_barang = $request->input('jumlah_barang');
            $data_barang->save();
            return response([
                'status' => true,
                'message' => 'Data Berhasil Dirubah',
                // 'update-data' => $data_barang
            ], 200);
        } else {
            // echo 'tidak ada';
            return response([
                'status' => false,
                'message' => 'Kode Barang Tidak ditemukan'
            ], 404);
        }
    }

    public function delete_data_barang($id){
        //cek terlebih dahulu data yang akan hapus melalui id
        //apakah barang ada atau tidak, jika tidak return not found
        $check_barang = BarangModel::firstWhere('kode_barang', $id);
        if($check_barang){
            BarangModel::destroy($id);
            return response([
                'status' => true,
                'message' => 'Data Dihapus',
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'Kode Barang Tidak ditemukan'
            ], 404);
        }
    }


}
