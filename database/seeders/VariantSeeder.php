<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            'name' => 'Variant A',
            'description' => 'Desc A',
            'processor' => 'Proc A',
            'memory' => 'Mem A',
            'storage' => 'Storage A',
            'product_id' => 1,
        ]);

        DB::table('variants')->insert([
            'name' => 'Variant B',
            'description' => 'Desc B',
            'processor' => 'Proc B',
            'memory' => 'Mem B',
            'storage' => 'Storage B',
            'product_id' => 2,
        ]);
    }
}
