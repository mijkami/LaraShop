<?php

use Illuminate\Database\Seeder;
use App\Cart;
use App\Products;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return voideb
     */
    public function run()
    {
        DB::table('products')->delete();
        $array = array("chats mignons", "chats sportifs", "LOLCATS");
        // initialisation de faker
        $faker = Faker\Factory::create('fr_FR');
    }
}
