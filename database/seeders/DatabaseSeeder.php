<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        User::create([
            'name' => 'Dzaky Syahrizal',
            'username' => 'jumpinJackFlash',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        $this->call(AlternatifSeeder::class);

        $this->call(PenilaianSeeder::class);

        // User::factory(1)->create();
    }
}
