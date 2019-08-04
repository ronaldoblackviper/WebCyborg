<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'assets/img/imageapps.jpg',
            'title' => 'Apps Cyborg',
            'description' => 'Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.',
            'price' => 100000
        ]);
        $product->save();
    }
}
