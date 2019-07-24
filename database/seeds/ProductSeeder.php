<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Aplikasi Cyborg IT Center',
            'description' => 'Aplikasi Perusahaan yang bertujuan untuk mendigitalkan dunia usaha anda, agar usaha anda dapat tersrkutur dengan baik',
            'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 150.000
        ]);
    }
}
