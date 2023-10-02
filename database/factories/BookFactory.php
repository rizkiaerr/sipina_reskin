<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $status_wbp = collect(['Tahanan', 'Narapidana']);
            $jumlah_pengunjung = collect([1,2,3,4]);
            $nik_pengunjung = 123456789;
            return [
                'kode_resi' => $this->faker->randomNumber(8,true),
                'nama_pengunjung' => $this->faker->name(),
                'nik_pengunjung' =>$nik_pengunjung,
                'jumlah_pengunjung' => $jumlah_pengunjung->random(),
                'tanggal_kunjungan' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                'status_wbp' => $status_wbp->random(),
                'nama_wbp' => $this->faker->name(),
            ];
    }
}
