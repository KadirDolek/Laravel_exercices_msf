<?php

namespace Database\Seeders;

use App\Models\Typeformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Typeformation::insert([
            ['nom' => 'Informatique']
        ]);
    }
}
