<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
// use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();
        // $array = array("chats mignons", "chats sportifs", "LOLCATS");

        // initialisation de faker
        $faker = Faker\Factory::create('fr_FR');


        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'chats mignons';
            $product->price = rand(12, 35);
            $product->image_url = $faker->image('images',700,400, 'cats');
            $product->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'chats sportifs';
            $product->price = rand(27, 49);
            $product->image_url = $faker->image('images', 700, 400, 'cats');
            $product->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'LOLCATS';
            $product->price = rand(275, 499);
            $product->image_url = $faker->image('images', 700, 400, 'cats');
            $product->save();
        }
    }
}
