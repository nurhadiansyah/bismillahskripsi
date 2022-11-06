<?php

namespace Database\Seeders;

use App\Models\Dataibu;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Dataibu::create([
            'nama_ibu' => 'Mage',
        	'nama_suami' => 'Oljen',
        	'tempat_lahir' => 'makassar',
        	'tgl_lahir' => '2000-05-30',
        	'alamat' => 'makassar',
        	'rt' => 2,
        	'rw' => 1,
        	'kelurahan' => 'paopao',
        	'kecamatan' => 'sombaopu',
        	'No_tlp' => '085242899941',
        	'agama' => '0',
        	'NIK' => 12312311,
        	'No_KK' => 123123123,
        	'No_BPJS' => 121231233,
        	'gakin' => 0,
        	'jabatan' => 0,
		    'email' => 'oljen@gmail.com',
		    'password'  => bcrypt('12345'),
		    'level' => 0,
            'user' => 0
        ]);
    }
}
