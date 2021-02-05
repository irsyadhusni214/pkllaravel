<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Kelurahan;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelurahans')->insert([
             // Aceh
             ['id' => 20, "id_kecamatan" => 20, "kelurahan" => "Alue Bakong"],
             ['id' => 21, "id_kecamatan" => 20, "kelurahan" => "Gunong Panah"],

             ['id' => 22, "id_kecamatan" => 21, "kelurahan" => "Bukit Jaya"],
             ['id' => 23, "id_kecamatan" => 21, "kelurahan" => "Balee"],

             ['id' => 24, "id_kecamatan" => 22, "kelurahan" => "Angan"],
             ['id' => 25, "id_kecamatan" => 22, "kelurahan" => "Siem"],

             ['id' => 26, "id_kecamatan" => 23, "kelurahan" => "Cot Paya"],
             ['id' => 27, "id_kecamatan" => 23, "kelurahan" => "Kajhu"],

             ['id' => 28, "id_kecamatan" => 24, "kelurahan" => "Bintah"],
             ['id' => 29, "id_kecamatan" => 24, "kelurahan" => "Teupin Ara"],

             ['id' => 30, "id_kecamatan" => 25, "kelurahan" => "Gampong Drien"],
             ['id' => 31, "id_kecamatan" => 25, "kelurahan" => "Gampong Rumia"],

             // Sumatera Utara
             ['id' => 32, "id_kecamatan" => 26, "kelurahan" => "Aek Ledong"],
             ['id' => 33, "id_kecamatan" => 26, "kelurahan" => "Buntu Pane"],

             ['id' => 34, "id_kecamatan" => 27, "kelurahan" => "Rahuning"],
             ['id' => 35, "id_kecamatan" => 27, "kelurahan" => "Meranti"],

             ['id' => 37, "id_kecamatan" => 28, "kelurahan" => "Brandan Timur"],
             ['id' => 38, "id_kecamatan" => 28, "kelurahan" => "Pelawi Utara"],

             ['id' => 39, "id_kecamatan" => 29, "kelurahan" => "Tamaran"],
             ['id' => 40, "id_kecamatan" => 29, "kelurahan" => "Cempa"],

             ['id' => 41, "id_kecamatan" => 30, "kelurahan" => "Bukateja"],
             ['id' => 42, "id_kecamatan" => 30, "kelurahan" => "Bobotsari"],

             ['id' => 43, "id_kecamatan" => 31, "kelurahan" => "Ajibata"],
             ['id' => 44, "id_kecamatan" => 31, "kelurahan" => "Balige"],

             // Sumatera Selatan
             ['id' => 45, "id_kecamatan" => 32, "kelurahan" => "Bakaran"],
             ['id' => 46, "id_kecamatan" => 32, "kelurahan" => "Komperta"],

             ['id' => 47, "id_kecamatan" => 33, "kelurahan" => "Pulo Kerto"],
             ['id' => 48, "id_kecamatan" => 33, "kelurahan" => "Karang Jaya"],

             ['id' => 57, "id_kecamatan" => 34, "kelurahan" => "Campur Sari"],
             ['id' => 58, "id_kecamatan" => 34, "kelurahan" => "Jajaran Baru"],

             ['id' => 49, "id_kecamatan" => 35, "kelurahan" => "Buana Murti"],
             ['id' => 50, "id_kecamatan" => 35, "kelurahan" => "Budi Asih"],

             ['id' => 51, "id_kecamatan" => 36, "kelurahan" => "Cendana"],
             ['id' => 52, "id_kecamatan" => 36, "kelurahan" => "Argo Mulyo"],

             ['id' => 53, "id_kecamatan" => 37, "kelurahan" => "Anyar"],
             ['id' => 54, "id_kecamatan" => 37, "kelurahan" => "Pendingan"],

            // Riau
             ['id' => 55, "id_kecamatan" => 38, "kelurahan" => "Teluk Rhu"],
             ['id' => 56, "id_kecamatan" => 38, "kelurahan" => "Kadur"],

             ['id' => 59, "id_kecamatan" => 39, "kelurahan" => "Lateri"],
             ['id' => 60, "id_kecamatan" => 39, "kelurahan" => "Tihu"],

             ['id' => 61, "id_kecamatan" => 40, "kelurahan" => "Libo Jaya"],
             ['id' => 62, "id_kecamatan" => 40, "kelurahan" => "Langkai"],

             ['id' => 63, "id_kecamatan" => 41, "kelurahan" => "Bungsur"],
             ['id' => 64, "id_kecamatan" => 41, "kelurahan" => "Harapan"],

             ['id' => 65, "id_kecamatan" => 42, "kelurahan" => "Alur Kuning"],
             ['id' => 66, "id_kecamatan" => 42, "kelurahan" => "Batu Sasak"],

             ['id' => 67, "id_kecamatan" => 43, "kelurahan" => "Air Terbit"],
             ['id' => 68, "id_kecamatan" => 43, "kelurahan" => "Batugajah"],

             // Jambi
             ['id' => 69, "id_kecamatan" => 44, "kelurahan" => "Kuto Rawang"],
             ['id' => 70, "id_kecamatan" => 44, "kelurahan" => "Kuto Renah"],

             ['id' => 71, "id_kecamatan" => 45, "kelurahan" => "Empang Benao"],
             ['id' => 72, "id_kecamatan" => 45, "kelurahan" => "Jelatang"],

             ['id' => 73, "id_kecamatan" => 46, "kelurahan" => "Purnama"],
             ['id' => 74, "id_kecamatan" => 46, "kelurahan" => "Mekar Sari"],

             ['id' => 75, "id_kecamatan" => 47, "kelurahan" => "Bungo Tanjung"],
             ['id' => 76, "id_kecamatan" => 47, "kelurahan" => "Malako Intan"],

             ['id' => 77, "id_kecamatan" => 48, "kelurahan" => "Cempaka"],
             ['id' => 78, "id_kecamatan" => 48, "kelurahan" => "Dusun Diilir"],

        ]);
    }
}
