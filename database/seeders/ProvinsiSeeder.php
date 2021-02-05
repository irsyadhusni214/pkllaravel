<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['kode_provinsi' => 11, 'provinsi' => 'ACEH'],
            ['kode_provinsi' => 12, 'provinsi' => 'SUMATERA UTARA'],
            ['kode_provinsi' => 13, 'provinsi' => 'SUMATERA BARAT'],
            ['kode_provinsi' => 14, 'provinsi' => 'RIAU'],
            ['kode_provinsi' => 15, 'provinsi' => 'JAMBI'],
            ['kode_provinsi' => 16, 'provinsi' => 'SUMATERA SELATAN'],
            ['kode_provinsi' => 17, 'provinsi' => 'BENGKULU'],
            ['kode_provinsi' => 18, 'provinsi' => 'LAMPUNG'],
            ['kode_provinsi' => 19, 'provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['kode_provinsi' => 20, 'provinsi' => 'KEPULAUAN RIAU'],
            ['kode_provinsi' => 21, 'provinsi' => 'DKI JAKARTA'],
            ['kode_provinsi' => 22, 'provinsi' => 'JAWA BARAT'],
            ['kode_provinsi' => 23, 'provinsi' => 'JAWA TENGAH'],
            ['kode_provinsi' => 24, 'provinsi' => 'DI YOGYAKARTA'],
            ['kode_provinsi' => 25, 'provinsi' => 'JAWA TIMUR'],
            ['kode_provinsi' => 26, 'provinsi' => 'BANTEN'],
            ['kode_provinsi' => 27, 'provinsi' => 'BALI'],
            ['kode_provinsi' => 28, 'provinsi' => 'NUSA TENGGARA BARAT'],
            ['kode_provinsi' => 29, 'provinsi' => 'NUSA TENGGARA TIMUR'],
            ['kode_provinsi' => 30, 'provinsi' => 'KALIMANTAN BARAT'],
            ['kode_provinsi' => 31, 'provinsi' => 'KALIMANTAN TENGAH'],
            ['kode_provinsi' => 32, 'provinsi' => 'KALIMANTAN SELATAN'],
            ['kode_provinsi' => 33, 'provinsi' => 'KALIMANTAN TIMUR'],
            ['kode_provinsi' => 34, 'provinsi' => 'KALIMANTAN UTARA'],
            ['kode_provinsi' => 35, 'provinsi' => 'SULAWESI UTARA'],
            ['kode_provinsi' => 36, 'provinsi' => 'SULAWESI TENGAH'],
            ['kode_provinsi' => 37, 'provinsi' => 'SULAWESI SELATAN'],
            ['kode_provinsi' => 38, 'provinsi' => 'SULAWESI TENGGARA'],
            ['kode_provinsi' => 39, 'provinsi' => 'GORONTALO'],
            ['kode_provinsi' => 40, 'provinsi' => 'SULAWESI BARAT'],
            ['kode_provinsi' => 41, 'provinsi' => 'MALUKU'],
            ['kode_provinsi' => 42, 'provinsi' => 'MALUKU UTARA'],
            ['kode_provinsi' => 43, 'provinsi' => 'PAPUA BARAT'],
            ['kode_provinsi' => 44, 'provinsi' => 'PAPUA']

        ]);
    }
}
