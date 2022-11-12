<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i<=50; $i++){
            $mhs = new mahasiswa();
            $mhs->StudentID = $faker->numerify('03########');
            $mhs->Nama = $faker->name;
            $mhs->Jurusan = 'Sistem Informasi';
            $mhs->Tahun_masuk = 2020;
            $mhs-> save();
        }
    }
}
