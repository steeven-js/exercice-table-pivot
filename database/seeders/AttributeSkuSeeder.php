<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Utiliser la table pivot "attribute_sku" pour associer les attributs aux SKUs

        // Récupérer les IDs des attributs et des SKUs
        $attributeIds = DB::table('attributes')->pluck('id');

        $skuIds = DB::table('skus')->pluck('id');

        // Associer les attributs aux SKUs
        foreach ($skuIds as $skuId) {
            $attributes = $attributeIds->random(2);

            foreach ($attributes as $attributeId) {
                DB::table('attribute_sku')->insert([
                    'attribute_id' => $attributeId,
                    'sku_id' => $skuId,
                    'value' => 'Value ' . $attributeId,
                ]);
            }
        }
    }
}
