<?php

namespace Database\Seeders;

use App\Models\Wbp;
use App\Models\Kegiatan;
use Illuminate\Database\Seeder;


class WbpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Wbp::create([
            'nama' => 'Abas',
            'id_registrasi' => 'B-I-203-018',
            'user_id' => 1,
            'tempat_lahir' => 'Purwakarta',
            'tanggal_lahir' => '1969-11-02',
            'jenis_kelamin' => 'Pria',
            'agama' => 'Islam',
            'ekspirasi_awal' => '2028-01-12',
            'ekspirasi_akhir' => '2023-05-01',
            'sepertiga_masa_pidana' => '2023-05-01',
            'setengah_masa_pidana' => '2023-05-01',
            'duapertiga_masa_pidana' => '2023-05-01',
            'nama_ibu' => 'Unah Rumnasih',
            'remisi' => '2 Bulan',
            ]);

        Kegiatan::create([
                'wbp_id' => '1',
                'id_registrasi' => 'B-I-203-018',
                'uraian' => 'Melaksanakan kegiatn pengajian rutin',
                'tanggal_kegiatan' => '1969-11-02',
            ]);

    }
}
