<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([GradoSeeder::class]);
        $this->call([AlumnoSeeder::class]);
        $this->call([ProfesorSeeder::class]);


        // \App\Models\User::factory(10)->create();
    }
}
