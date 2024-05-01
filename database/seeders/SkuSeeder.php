<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Générer des données factices pour la table "skus"
        $skus = [
            [
                'sku' => 'SKU001',
                'unit_amount' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'SKU002',
                'unit_amount' => 15.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoutez plus de données ici si nécessaire
        ];

        // Insérer les données dans la table "skus"
        DB::table('skus')->insert($skus);
    }
}
