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
            'imagePath' => 'https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'title' => 'Apps Cyborg',
            'description' => 'Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.',
            'price' => 100000
        ]);
        $product->save();
    }
}
