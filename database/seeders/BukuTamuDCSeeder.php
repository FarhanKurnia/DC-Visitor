<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BukuTamuDCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku_tamu_d_c_s')->insert([[
            'nama' => 'Farhan',
            'no_ktp'=>'195411050195411',
        	'instansi' => 'CITRANET',
        	'no_rack' => '5',
            'no_slot' => '5',
            'pekerjaan' => 'Ganti kabel',
            'status' => 'checkin',
            'kamera' => '625997f2cee48.png',
            'created_at' => Carbon::now(),
        ],
        [
            'nama' => 'Kurnia',
            'no_ktp'=>'195411050195412',
        	'instansi' => 'BIZNET',
        	'no_rack' => '1',
            'no_slot' => '5',
            'pekerjaan' => 'Ganti server',
            'status' => 'checkin',
            'kamera' => '6259978bab06a.png',
            'created_at' => Carbon::now(),
        ]]);

    }
}
