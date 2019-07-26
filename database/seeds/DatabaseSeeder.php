<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
// use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();
        DB::table('users')->delete();
        // $array = array("chats mignons", "chats sportifs", "LOLCATS");

        // initialisation de faker
        $faker = Faker\Factory::create('fr_FR');


        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'chats mignons';
            $product->price = rand(12, 35);
            $product->image_url = $faker->image('public/images',700,400, 'cats');
            $product->stars = rand(1,5);
            $product->comment = $faker->text(20);
            $product->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'chats sportifs';
            $product->price = rand(27, 49);
            $product->image_url = $faker->image('public/images', 700, 400, 'cats');
            $product->stars = rand(1, 5);
            $product->comment = $faker->text(20);
            $product->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->name = $faker->lastName;
            $product->typ = 'LOLCATS';
            $product->price = rand(275, 499);
            $product->image_url = $faker->image('public/images', 700, 400, 'cats');
            $product->stars = rand(1, 5);
            $product->comment = $faker->text(20);
            $product->save();
        }

        $products = Product::all();
        foreach($products as $product){

            $public = "public/";
            $longlink = $product->image_url;
            $shortlink = str_replace($public, "", $longlink);
            $product->image_url = $shortlink;
            $product->save();
        }

        $user = new User;
        $user->name = 'catuser';
        $user->email = 'catuser@cat.fr';
        $user->password = bcrypt('catpass');
        $user->save();
    }
}
