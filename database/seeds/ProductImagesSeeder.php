<?php

use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-498-V01.jpg',
                'product_id' => 1,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-498-V02.jpg',
                'product_id' => 1,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-569-V10.jpg',
                'product_id' => 2,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-569-V08.jpg',
                'product_id' => 2,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V11.jpg',
                'product_id' => 3,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V08.jpg',
                'product_id' => 3,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S01.jpg',
                'product_id' => 4,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S02.jpg',
                'product_id' => 4,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-126-S01.jpg',
                'product_id' => 5,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-126-S02.jpg',
                'product_id' => 5,
            ],
        ]);
    }
}
