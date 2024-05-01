<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Générer des données factices pour la table "attributes"
        $attributes = [
            [
                'name' => 'Color',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Size',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoutez plus de données ici si nécessaire
        ];

        // Insérer les données dans la table "attributes"
        DB::table('attributes')->insert($attributes);
    }
}
