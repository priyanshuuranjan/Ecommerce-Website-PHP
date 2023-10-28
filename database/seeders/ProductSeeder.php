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
        //
        DB::table('products')->insert([
            [
                'name'=>'DAP',
                "price"=>"1500",
                "description"=>"The composition of DAP is 18% Nitrogen and P2O5 46%.",
                "category"=>"fertilizer",
                "gallery"=>"https://t4.ftcdn.net/jpg/00/87/62/49/240_F_87624930_7n7NgLCFHff7IGr85DCgOcE2aPunov2m.jpg"
            ],
            [
                'name'=>'Calcium',
                "price"=>"400",
                "description"=>"It contains 15,5% nitrogen (N) and 26,5% calcium oxide",
                "category"=>"fertilizer",
                "gallery"=>"https://t4.ftcdn.net/jpg/00/85/49/51/240_F_85495118_AUZZAJfHLdqctF8Kiazdy3hGxWlBo1vo.jpg"
            ],
            [
                'name'=>'Soil Fertilizer',
                "price"=>"500",
                "description"=>"Contains microbes which enhance the soil properties",
                "category"=>"fertilizer",
                "gallery"=>"https://m.media-amazon.com/images/I/61fUoGkNdHL._AC_UL320_.jpg"
            ],
            [
                'name'=>' Seaweed Tonic ',
                "price"=>"200",
                "description"=>": Improves seed germination and increases root growth development",
                "category"=>"spray",
                "gallery"=>"https://m.media-amazon.com/images/I/71Z4NWcw4cL._AC_UL320_.jpg"
            ],
        ]);
    }
}


