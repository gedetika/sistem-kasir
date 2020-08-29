<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{   
    protected $table = 'stuff';
    //kita beritahu kalau table yang kita gunakan adalah table bernama stuff
    //
    protected $primaryKey = 'kode_barang'; 
    //kita beritahu kalau PK kita adalah kode_barang bukan id
}
