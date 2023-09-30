<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class WbpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis_kelamin = collect(['Pria', 'Wanita']);
        $agama = collect(['Islam', 'Kristen', 'Buddha', 'Hindu']);
        $wali = collect([1,2,3,4]);
        return [
            'nama' => $this->faker->name(),
            'id_registrasi' => $this->faker->unique()->userName(),
            'user_id' => $wali->random(),
            'tempat_lahir' => $this->faker->address(),
            'tanggal_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'jenis_kelamin' => $jenis_kelamin->random(),
            'agama' => $agama->random(),
            'tanggal_ekspirasi' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'masa_pidana' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'nama_ibu' => $this->faker->name(),
            'tanggal_pulang' =>$this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
