<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country')->insert(
             [
                ['id' => 'US', 'label' => 'United States'],
                ['id' => 'CA', 'label' => 'Canada'],
                ['id' => 'GB', 'label' => 'United Kingdom'],
                ['id' => 'AU', 'label' => 'Australia'],
                ['id' => 'DE', 'label' => 'Germany'],
                ['id' => 'FR', 'label' => 'France'],
                ['id' => 'IT', 'label' => 'Italy'],
                ['id' => 'ES', 'label' => 'Spain'],
                ['id' => 'CN', 'label' => 'China'],
                ['id' => 'JP', 'label' => 'Japan'],
                ['id' => 'IN', 'label' => 'India'],
                ['id' => 'BR', 'label' => 'Brazil'],
                ['id' => 'MX', 'label' => 'Mexico'],
                ['id' => 'ZA', 'label' => 'South Africa'],
                ['id' => 'RU', 'label' => 'Russia'],
                ['id' => 'KR', 'label' => 'South Korea'],
                ['id' => 'AR', 'label' => 'Argentina'],
                ['id' => 'SA', 'label' => 'Saudi Arabia'],
                ['id' => 'AE', 'label' => 'United Arab Emirates'],
                ['id' => 'EG', 'label' => 'Egypt'],
                ['id' => 'QA', 'label' => 'Qatar'],
                ['id' => 'KW', 'label' => 'Kuwait'],
                ['id' => 'MA', 'label' => 'Morocco'],
                ['id' => 'DZ', 'label' => 'Algeria'],
                ['id' => 'TN', 'label' => 'Tunisia'],
                ['id' => 'JO', 'label' => 'Jordan'],
                ['id' => 'OM', 'label' => 'Oman'],
                ['id' => 'BH', 'label' => 'Bahrain'],
                ['id' => 'LB', 'label' => 'Lebanon'],
                ['id' => 'IQ', 'label' => 'Iraq'],
                ['id' => 'LY', 'label' => 'Libya'],
                ['id' => 'YE', 'label' => 'Yemen'],
                ['id' => 'SD', 'label' => 'Sudan'],
                ['id' => 'SY', 'label' => 'Syria'],
                ['id' => 'PS', 'label' => 'Palestine'],
            ]
         );
    }
}
