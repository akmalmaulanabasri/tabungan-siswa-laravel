<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Rayon;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Akmal Maulana',
            'username' => 'akmal',
            'user_id' => 'akma8292',
            'email' => 'akmalmaulanabasri711@gmail.com',
            'password' => bcrypt('akmal'),
        ]);

        // for ($i = 1; $i <= 5; $i++) {
        //     Rayon::create([
        //         'nama_rayon' => 'Wikrama ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Wikrama ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Cicurug ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Cicurug ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Cisarua ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Cisarua ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Ciawi ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Ciawi ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Tajur ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Tajur ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Sukasari ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Sukasari ' . $i,
        //     ]);

        //     Rayon::create([
        //         'nama_rayon' => 'Cibedug ' . $i,
        //         'pembimbing_rayon' => 'Pemb. Cibedug ' . $i,
        //     ]);
        // }
    }
}
