<?php

namespace Database\Seeders;

use App\Models\Wbp;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Kegiatan;
use Database\Seeders\WbpSeeder;
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
            'name' => 'Mu`Alim Nuzulul Shiyam',
            'username' => 'ariesnomu47',
            'email' => 'ariesnomu47@gmail.com',
            'password' => bcrypt('Tes123mantap!'),
            'is_admin' => 1
        ]);
        User::create([
            'name' => 'Muhammad Fazri Kusriadi',
            'username' => 'fazri17',
            'email' => 'muhamadfazrikusriadi@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Dedi Abdul Rahman',
            'username' => 'dedi_ar',
            'email' => 'dediabdulrahman@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Anita Bonita',
            'username' => 'anita',
            'email' => 'anniitta.b2@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Indra Gunawan',
            'username' => 'Indra',
            'email' =>'indra_gt@yahoo.co.id',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Aan Andiansyah',
            'username' => 'aanciamis',
            'email' => 'aanciamis@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Rizkar Hidayat',
            'username' => 'rizkar',
            'email' => 'saputrafachmy@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Rudi Gunawan',
            'username' => 'rudigu',
            'email' => 'rudigu7@gmail.com',
            'password' => bcrypt('Purwakarta123'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Kia',
            'username' => 'mynamekia',
            'email' => 'rizkiaerr@gmail.com',
            'password' => bcrypt('Tes123mantap!'),
            'is_admin' => 1
        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Form Pengajuan',
            'slug' => 'form-pengajuan'
        ]);

        Category::create([
            'name' => 'Remisi',
            'slug' => 'remisi'
        ]);

        Category::create([
            'name' => 'Kegiatan',
            'slug' => 'kegiatan'
        ]);

        $this->call(WbpSeeder::class);
        // $this->call(BookSeeder::class);
        // Post::factory(20)->create();

        // Wbp::factory(30)->create();



    }
}


