<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class annonce extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('annonce')->insert([
            'titre' => 'first',
            'description' => 'first description',
            'type' => 'Appartement',            
            'ville' => 'first ville',
            'superficie' => 100,
            'neuf' => 1,
            'prix' => 1000,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
