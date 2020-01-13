<?php

use Illuminate\Database\Seeder;

class ShoppingProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_products')->insert([
            'name' => 'iPhone 11',
            'description' => 'The all-new iPhone 11 is the perfect phone for the everyday user. Colors included are black, white, purple, yellow, green and red. Available in 64GB, 256GB and 512GB configurations.',
            'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1567022175704',
            'price' => '699.99'
        ]);

        DB::table('shopping_products')->insert([
            'name' => 'iPhone 11 Pro',
            'description' => 'The all-new iPhone 11 Pro is the perfect phone for the professional user. Colors included are black, silver, midnight green and gold. Available in 64GB, 256GB and 512GB configurations. Available 5.8" or 6.5" OLED displays',
            'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-11-pro-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1567812930312',
            'price' => '999.99'
        ]);

        DB::table('shopping_products')->insert([
            'name' => 'iPad Pro',
            'description' => 'The all-new iPad Pro is the perfect tablet all of your needs. Colors included are space gray and silver. Available in 64GB, 256GB, 512GB and 1TB configurations. Available 11" and 12.9" retina displays.',
            'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-pro-12-11-select-201810?wid=870&amp;hei=1100&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1540576039631',
            'price' => '799.99'
        ]);

        DB::table('shopping_products')->insert([
            'name' => 'Apple Watch Series 5',
            'description' => 'The all-new Apple Watch is designed with your everyday needs in mind. Customize it to fit your style and daily routine. Available in 40mm and 44mm cases. Choice of materials include aluminum, stainless steel, titanium and ceramic.',
            'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MTP62_VW_PF+watch-40-alum-spacegray-nc-5s_VW_PF_WF_CO?wid=1400&hei=1400&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1566449865297,1569365643157',
            'price' => '399.99'
        ]);
    }
}
