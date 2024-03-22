<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "name"=>"MI Mobiles",
                "price"=>12000,
                "description"=>"a smartphone with 12 gb ramd and much more features",
                "category"=>"mobile",
                "gallery"=>"https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1672738688.24231648!500x500.jpg"
            ],
            [
                "name"=>"Apple Mobiles",
                "price"=>12000,
                "description"=>"a smartphone with 12 gb ramd and much more features",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/71xb2xkN5qL._AC_UF1000,1000_QL80_.jpg"
            ],
            [
                "name"=>"One Plus Mobiles",
                "price"=>12000,
                "description"=>"a smartphone with 8 gb ramd and much more features",
                "category"=>"mobile",
                "gallery"=>"https://i.gadgets360cdn.com/products/large/oneplus-10t-oneplus-636x800-1659541437.jpg"
             ]
        ]);
    }
}
