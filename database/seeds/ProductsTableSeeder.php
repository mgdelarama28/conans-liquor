<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    protected $products = [
        [
            'category_id' => '1',
            'name' => 'Bacardi 151',
            'price' => 69.00,
            'image_path' => 'products/bacardi_151.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '2',
            'name' => 'Jim Beam Kentucky Straight',
            'price' => 69.00,
            'image_path' => 'products/jim_beam_kentucky_straight.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '3',
            'name' => 'Citadelle',
            'price' => 69.00,
            'image_path' => 'products/citadelle.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '3',
            'name' => 'The Glenlivet',
            'price' => 49.00,
            'image_path' => 'products/the_glenlivet.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'Black Label',
            'price' => 69.00,
            'image_path' => 'products/black_label.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '4',
            'name' => 'Macallan',
            'price' => 69.00,
            'image_path' => 'products/macallan.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '5',
            'name' => 'Old Monk',
            'price' => 69.00,
            'image_path' => 'products/old_monk.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'Jameson Irish Whiskey',
            'price' => 69.00,
            'image_path' => 'products/jameson_irish_whiskey.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'Screwball',
            'price' => 69.00,
            'image_path' => 'products/screwball.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'Jack Daniel\'s',
            'price' => 69.00,
            'image_path' => 'products/jack_daniels.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'McClelland\'s',
            'price' => 69.00,
            'image_path' => 'products/mcclellands.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
        [
            'category_id' => '6',
            'name' => 'Plantation',
            'price' => 69.00,
            'image_path' => 'products/plantation.jpg',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, impedit voluptatibus in dolore laboriosam praesentium aut veritatis quaerat adipisci repudiandae eligendi vitae error, ratione molestiae minus maiores numquam magni fuga suscipit iste magnam modi quam earum dolorum? Temporibus molestiae dolorum possimus sed quisquam nesciunt enim maxime autem cupiditate. Nulla repudiandae quia dolor delectus sapiente illum velit saepe repellendus quis excepturi!',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->init();

        foreach($this->products as $key => $product):
            $data = [
                'category_id' => $product['category_id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'image_path' => $product['image_path'],
                'description' => $product['description'],
            ];

            $this->write($data);
        endforeach;
    }

    private function init()
    {
        Product::truncate();
    }

    private function write($data)
    {
        \DB::beginTransaction();
            Product::create($data);
        \DB::commit();
    }
}
