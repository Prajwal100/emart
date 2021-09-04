<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'title' => 'Boutique Silk Dress',
                    'slug' => 'boutique-silk-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                    'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 1,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-1-back.png',
                    'price' => 50,
                    'offer_price' => 45,
                    'conditions' => 'new',
                    'status' => 'active',
                    'is_featured'=>1,
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'title' => 'Flower Textured Dress',
                    'slug' => 'flower-textured-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 1,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-2.png',
                    'price' => 48,
                    'offer_price' => 34,
                    'is_featured'=>0,
                    'conditions' => 'new',
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            2 =>
                array (
                    'id' => 3,
                    'title' => 'Silk Dress',
                    'slug' => 'silk-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 1,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-4.png',
                    'price' => 50,
                    'offer_price' => 96,
                    'conditions' => 'new',
                    'status' => 'active',
                    'is_featured'=>1,
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            3 =>
                array (
                    'id' => 4,
                    'title' => 'Box Shape Dress',
                    'slug' => 'box-shape-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>10,
                    'brand_id' => 1,
                    'cat_id' => 2,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-4-back.png',
                    'price' => 27,
                    'is_featured'=>0,
                    'offer_price' => 13,
                    'conditions' => 'popular',
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            4 =>
                array (
                    'id' => 5,
                    'title' => 'Light Dress',
                    'slug' => 'light-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 2,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-5.png',
                    'price' => 50,
                    'offer_price' => 7.99,
                    'is_featured'=>0,
                    'conditions' => 'popular',
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'title' => 'Flower Textured Pants',
                    'slug' => 'flower-textured-pants',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>40,
                    'brand_id' => 1,
                    'cat_id' => 1,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-6.png',
                    'price' => 50,
                    'offer_price' => 39,
                    'conditions' => 'popular',
                    'is_featured'=>0,
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            6 =>
                array (
                    'id' => 7,
                    'title' => 'Fashion Dress',
                    'slug' => 'fashion-dress',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 3,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-7.png',
                    'price' => 50,
                    'offer_price' => 88,
                    'is_featured'=>1,
                    'conditions' => 'new',
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'title' => 'Top\'s Short',
                    'slug' => 'top-s-short',
                    'summary'=>'<p>Sint placeat aperiam ut explicabo. Consequatur soluta repellat fugit quidem. Fugiat necessitatibus aperiam corporis tempore iusto quasi. </p>',
                    'description'=>'<p> Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p> <p>Voluptatum ea et sint assumenda rerum quia. Laborum sequi ut blanditiis accusantium. Ut laudantium aut repellendus qui deserunt. A facere tenetur aspernatur aut voluptatem rem. Sunt et facere perspiciatis ab. Soluta voluptatem eius optio consequatur. Pariatur voluptatem minus doloribus odio dolores. Blanditiis inventore qui est exercitationem. Distinctio libero vero saepe quo consequatur commodi dolore. Optio cupiditate praesentium id earum quis.</p>',
                    'additional_info'=>'<p>In natus voluptatem eum veritatis dolores unde. Et consequatur blanditiis at iusto eos vel est. Et et quod nulla earum non sed. Id aspernatur facere quasi dignissimos sequi praesentium voluptatem. Sequi placeat porro voluptates nesciunt sed accusamus sit. Eum omnis sunt cum omnis sit porro. Vero molestiae fugit sed harum amet ipsa earum earum. Quia beatae aspernatur eaque itaque quae in aut. Sunt est aperiam eligendi sequi dolore voluptate quos. Sequi quia illum aut omnis illum. Alias suscipit dicta quo sapiente ipsam. Consequatur sunt quia et deserunt odio nesciunt quibusdam. </p>',
                    'return_cancellation'=>'<p>Id et sit non ad culpa iure est. Consequuntur blanditiis ab voluptas nemo provident est. At quas et fugiat fugit accusantium sit aperiam. Dolorum et qui et illum cum sit corrupti. Sed doloribus inventore ut ea quia nihil. Sit beatae sint et beatae quasi. Sequi porro debitis rerum quibusdam quis dignissimos. Reprehenderit quibusdam natus non omnis. Repudiandae sed animi blanditiis rerum qui qui optio facere. Cupiditate aliquid earum eaque voluptatem quia nulla. Aut a dolores accusamus praesentium asperiores. Laborum laborum adipisci a.</p>',
                       'stock' =>20,
                    'brand_id' => 1,
                    'cat_id' => 3,
                    'user_id' => 1,
                    'child_cat_id' => null,
                    'photo' => 'frontend/img/product-img/new-8.png',
                    'price' => 50,
                    'offer_price' => 32,
                    'conditions' => 'new',
                    'is_featured'=>0,
                    'status' => 'active',
                    'added_by' => 'admin',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ),
        ));


    }
}
