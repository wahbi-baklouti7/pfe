<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('region')->insert(
            [
                ['label' => 'Tunis', 'id_country' => 'TN'],
                ['label' => 'Ariana', 'id_country' => 'TN'],
                ['label' => 'Ben Arous', 'id_country' => 'TN'],
                ['label' => 'Manouba', 'id_country' => 'TN'],
                ['label' => 'Nabeul', 'id_country' => 'TN'],
                ['label' => 'Zaghouan', 'id_country' => 'TN'],
                ['label' => 'Bizerte', 'id_country' => 'TN'],
                ['label' => 'Beja', 'id_country' => 'TN'],
                ['label' => 'Jendouba', 'id_country' => 'TN'],
                ['label' => 'Kef', 'id_country' => 'TN'],
                ['label' => 'Siliana', 'id_country' => 'TN'],
                ['label' => 'Kairouan', 'id_country' => 'TN'],
                ['label' => 'Kasserine', 'id_country' => 'TN'],
                ['label' => 'Sidi Bouzid', 'id_country' => 'TN'],
                ['label' => 'Sousse', 'id_country' => 'TN'],
                ['label' => 'Monastir', 'id_country' => 'TN'],
                ['label' => 'Mahdia', 'id_country' => 'TN'],
                ['label' => 'Sfax', 'id_country' => 'TN'],
                ['label' => 'Gabes', 'id_country' => 'TN'],
                ['label' => 'Medenine', 'id_country' => 'TN'],
                ['label' => 'Tataouine', 'id_country' => 'TN'],
                ['label' => 'Gafsa', 'id_country' => 'TN'],
                ['label' => 'Tozeur', 'id_country' => 'TN'],
                ['label' => 'Kebili', 'id_country' => 'TN'],
            ]
         );
    }
}
