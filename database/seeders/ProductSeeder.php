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
                'name' => 'DAP',
                "price" => "1500",
                "description" => "The composition of DAP is 18% Nitrogen and P2O5 46%.",
                "category" => "fertilizer",
                "gallery" => "https://t4.ftcdn.net/jpg/00/87/62/49/240_F_87624930_7n7NgLCFHff7IGr85DCgOcE2aPunov2m.jpg"
            ],
            [
                'name' => 'Calcium',
                "price" => "400",
                "description" => "It contains 15,5% nitrogen (N) and 26,5% calcium oxide",
                "category" => "fertilizer",
                "gallery" => "https://t4.ftcdn.net/jpg/00/85/49/51/240_F_85495118_AUZZAJfHLdqctF8Kiazdy3hGxWlBo1vo.jpg"
            ],
            [
                'name' => 'Soil Fertilizer',
                "price" => "500",
                "description" => "Contains microbes which enhance the soil properties",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/61fUoGkNdHL._AC_UL320_.jpg"
            ],
            [
                'name' => ' Seaweed Tonic ',
                "price" => "200",
                "description" => ": Improves seed germination and increases root growth development",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/71Z4NWcw4cL._AC_UL320_.jpg"
            ],
            [
                'name' => 'NPK',
                "price" => "400",
                "description" => "Improves Size of Flowers, Fruits and Vegetables.",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/61d02TxNGPL._SX522_.jpg"
            ],
            [
                'name' => 'Babique Dap',
                "price" => "80",
                "description" => "Water-soluble helps the plant set buds and flowers",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/71xBf6iUG9L._SX569_.jpg"
            ],
            [
                'name' => 'Urban Gardens',
                "price" => "199",
                "description" => " It provides nutrient supplementation to plants",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/41gL2EO0M1L._SX679_.jpg"
            ],
            [
                'name' => ' Organic Bone',
                "price" => "129",
                "description" => "Prevents premature bud drop due to nutrient deficiency.",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/41z3tNVsAIL._SX300_SY300_QL70_FMwebp_.jpg"
            ],
            [
                'name' => 'Neem oil',
                "price" => "529",
                "description" => "Neem oil spray is a versatile and eco-friendly product with a wide range of applications",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/41PdrqEJRPL._SY445_SX342_QL70_FMwebp_.jpg"
            ],
            [
                'name' => ' Imida ',
                "price" => "529",
                "description" => "Prevent plants root from bacteria ",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/61o8399gf3L._SX679_.jpg"
            ],
            [
                'name' => 'Rogor',
                "price" => "110",
                "description" => "Prevent against insecticide to sucking pests like thrips on rose ",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/417Qoe3zoFL._SY445_SX342_QL70_FMwebp_.jpg"
            ],
            [
                'name' => 'Saaf',
                "price" => "225",
                "description" => "Mode of Action - Systemic and Contact",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/41OvLatTxHL.jpg"
            ],
            [
                'name' => 'FERGANIC ',
                "price" => "400",
                "description" => "Neem Cake for plant is a 2 in 1 Insecticide cum Fertilizer, which acts as a Soil conditioner too.",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/61SydFjczZL._SX522_.jpg"
            ],
            [
                'name' => 'Flower Booster',
                "price" => "279",
                "description" => "All Essential Multi Micro nutrients for All Flowering Plants.",
                "category" => "spray",
                "gallery" => "https://m.media-amazon.com/images/I/71+5RLdZZbL._SX522_.jpg"
            ],
            [
                'name' => 'Water Spray',
                "price" => "379",
                "description" => "The Kids Watering Can Spray Bottle is perfect for getting the little ones out and about in the garden, featuring a traditional watering can head and spray bottle trigger",
                "category" => "equipment",
                "gallery" => "https://m.media-amazon.com/images/I/611SU6W3vML._SX679_.jpg"
            ],
            [
                'name' => 'Potash Meal',
                "price" => "355",
                "description" => "Potash Meal is a natural and organic fertilizer, made by processing agricultural waste, to achieve a high level of organic available Potassium",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/516qY1aa3uL._SX522_.jpg"
            ],
            [
                'name' => 'Organic Mixture',
                "price" => "499",
                "description" => "Grow up to 2X bigger plants than regular potting soil or red soil",
                "category" => "fertilizer",
                "gallery" => "https://m.media-amazon.com/images/I/810DKq9syML._SX679_.jpg"
            ],



        ]);
    }
}
