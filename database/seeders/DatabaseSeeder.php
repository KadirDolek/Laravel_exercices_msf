<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(BatimentSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeformationSeeder::class);

        Eleve::factory(50)->create();
    }
}
