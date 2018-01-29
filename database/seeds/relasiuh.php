<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;

class relasiuh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();

		$bow = Mahasiswa::create(array(
			'nama'=>'febri',
			'nis' =>'13'));

		$bli = Mahasiswa::create(array(
			'nama'=>'made',
			'nis' =>'78'));
		$this->command->info('mudah mudahan bisa....amiinn');

		Wali::create(array(
			'nama'  => 'bapa febri',
			'alamat'=>'bandung',
			'id_mahasiswa' => $bow->id
		));

		Wali::create(array(
			'nama'  => 'bapa made',
			'alamat'=>'bandung',
			'id_mahasiswa' => $bli->id
		));
		$this->command->info('mudah mudahan bisa bapana....amiinn');


            }
}
