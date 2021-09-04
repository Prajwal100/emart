<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //home banner
        DB::table('banners')->insert([
            [
                'title'=>'Special Offer',
                'description'=>'Only $78',
                'photo'=>'frontend/img/bg-img/8.jpg',
                'status'=>'active',
                'condition'=>'banner',
            ],
            [
                'title'=>'Sustainable Clock',
                'description'=>'Only $31 ',
                'photo'=>'frontend/img/bg-img/7.jpg',
                'status'=>'active',
                'condition'=>'banner',
            ],
            [
                'title'=>'Hot Shoes',
                'description'=>'Now $19',
                'photo'=>'frontend/img/bg-img/6.jpg',
                'status'=>'active',
                'condition'=>'banner',
            ],
            [
                'title'=>'ALL KID’S ITEMS',
                'description'=>'30% OFF',
                'photo'=>'frontend/img/bg-img/fea_offer.jpg',
                'status'=>'active',
                'condition'=>'promo',
            ],
        ]);

        //categories
        DB::table('categories')->insert([
            //Parent Categories
            [
                'title'=>'Craft Collection',
                'slug'=>'craft-collection',
                'photo'=>'frontend/img/category/cata-1.jpg',
                'is_parent'=>1,
                'parent_id'=>null,
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'Women Collection',
                'slug'=>'women-collection',
                'photo'=>'frontend/img/category/cata-2.jpg',
                'is_parent'=>1,
                'parent_id'=>null,
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'title'=>'Kids Collection',
                'slug'=>'kids-collection',
                'photo'=>'frontend/img/category/cata-3.jpg',
                'is_parent'=>1,
                'parent_id'=>null,
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);


        //brands
        DB::table('brands')->insert([
            //Parent Categories
            [
                'title'=>'Rolex',
                'slug'=>'rolex',
                'photo'=>'frontend/img/partner-img/5.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'aetna',
                'slug'=>'aetna',
                'photo'=>'frontend/img/partner-img/6.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'title'=>'Zara',
                'slug'=>'zara',
                'photo'=>'frontend/img/partner-img/2.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'Adidas',
                'slug'=>'adidas',
                'photo'=>'frontend/img/partner-img/3.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'Nike',
                'slug'=>'nike',
                'photo'=>'frontend/img/partner-img/4.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'H&M',
                'slug'=>'h-m',
                'photo'=>'frontend/img/partner-img/1.jpg',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        //settings

        DB::table('settings')->insert([
            'title'=>'E-mart online shopping',
            'meta_description'=>'E-mart online shopping.',
            'meta_keywords'=>'E-mart, Online Shopping, E-commerce website',
            'logo'=>'frontend/img/core-img/logo.png',
            'favicon'=>'',
            'address'=>'Kathmandu, Nepal',
            'email'=>'info@emart.com',
            'phone'=>'98329291913',
            'fax'=>'002 78965 369552',
            'footer'=>'Prajwal Rai',
            'facebook_url'=>'',
            'twitter_url'=>'',
            'linkedin_url'=>'',
            'pinterest_url'=>'',
        ]);
    }
}
