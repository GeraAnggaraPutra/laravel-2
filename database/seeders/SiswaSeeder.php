<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nama' => 'Abdul', 'nis' => '202220231', 'tgl_lahir' => '1998-08-12','alamat' => 'Bandung', 'jk' => 'L'],
            ['nama' => 'Silvana', 'nis' => '202220232', 'tgl_lahir' => '1995-05-16','alamat' => 'Jakarta', 'jk' => 'P']
        ];

        DB::table('siswas')->insert($sample);
    }
}
