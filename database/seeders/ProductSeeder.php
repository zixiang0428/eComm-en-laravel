<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>'Oppo Mobile',
                    'price'=>'500',
                    'description'=>'A smartphone with 6gb ram',
                    'category'=>'mobile',
                    'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno5-pro-5g-chaka/listpage/Reno5-pro-chaka-listpage-series-black-blue-v2-mobile.jpg'
                ],
                [
                    'name'=>'Samsung TV',
                    'price'=>'1200',
                    'description'=>'A smartTV with HD resolution',
                    'category'=>'TV',
                    'gallery'=>'https://images.samsung.com/is/image/samsung/my-uhdtv-tu8000-ua50tu8000kxxm-frontblack-221068828?$720_576_PNG$'
                ],
                [
                    'name'=>'Sony TV',
                    'price'=>'500',
                    'description'=>'A smartTV with HD resolution',
                    'category'=>'TV',
                    'gallery'=>'https://www.sony.com.my/image/4dfd9ca48ba82b26b620b9049c099665?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9'
                ],
                [
                    'name'=>'Sharp Fridge',
                    'price'=>'1500',
                    'description'=>'A fridge with much more feature',
                    'category'=>'Fridge',
                    'gallery'=>'https://www.senheng.com.my/media/catalog/product/s/h/shp-sjf858vmbk_1.jpg'
                ],
            ]
        );
        //
    }
}
