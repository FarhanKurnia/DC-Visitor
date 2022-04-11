<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamuDC extends Model
{
    //use HasFactory;
    protected $table = 'buku_tamu_d_c_s';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','no_ktp','instansi','no_rack','no_slot','pekerjaan','status','updated_at','created_at','updated','foto','kamera',
    ];
    protected $dates = ['updated'];

    //protected $guarded = [];
}
