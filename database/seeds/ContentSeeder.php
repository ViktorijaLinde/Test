<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name' => 'Цвет',
                'name_en' => 'Color',
                'name_lv' => 'Krāsa',
                'options' => [
                    [
                        'name' => 'Белый',
                        'name_en' => 'White',
                        'name_lv' => 'Balts'
                    ],
                    [
                        'name' => 'Черный',
                        'name_en' => 'Black',
                        'name_lv' => 'Melns'
                    ],
                    [
                        'name' => 'Серебристый',
                        'name_en' => 'Silver',
                        'name_lv' => 'Sudrabs'
                    ],
                    [
                        'name' => 'Золотой',
                        'name_en' => 'Gold',
                        'name_lv' => 'Zelts'
                    ],
                    [
                        'name' => 'Красный',
                        'name_en' => 'Red',
                        'name_lv' => 'Sarkans'
                    ],
                    [
                        'name' => 'Синий',
                        'name_en' => 'Blue',
                        'name_lv' => 'Zils'
                    ],
                ],
            ],
            [
                'name' => 'Внутренняя память',
                'name_en' => 'Memory',
                'name_lv' => 'Iekšējā atmiņa',
                'options' => [
                    [
                        'name' => '32гб',
                        'name_en' => '32gb',
                        'name_lv' => '32gb'
                    ],
                    [
                        'name' => '64гб',
                        'name_en' => '64gb',
                        'name_lv' => '64gb'
                    ],
                    [
                        'name' => '128гб',
                        'name_en' => '128gb',
                        'name_lv' => '128gb'
                    ],
                ],
            ],
        ];

        foreach ($properties as $property) {
            $property['created_at'] = Carbon::now();
            $property['updated_at'] = Carbon::now();
            $options = $property['options'];
            unset($property['options']);
            $propertyId = DB::table('properties')->insertGetId($property);

            foreach ($options as $option) {
                $option['created_at'] = Carbon::now();
                $option['updated_at'] = Carbon::now();
                $option['property_id'] = $propertyId;
                DB::table('property_options')->insert($option);
            }
        }

        $categories = [
            [
                'name' => 'Мобильные телефоны',
                'name_en' => 'Mobile phones',
                'name_lv' => 'Mobīlie telefoni',
                'code' => 'mobiles',
                'image' => 'categories/mobile.jpg',
                'products' => [
                    [
                        'name' => 'iPhone X',
                        'name_en' => 'iPhone X',
                        'name_lv'=>'iPhone X',
                        'code' => 'iphone_x',
                        'image' => 'products/iphone_x.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                1, 7,
                            ],
                            [
                                1, 8,
                            ],
                            [
                                2, 7,
                            ],
                            [
                                2, 8,
                            ],
                            [
                                3, 7,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                4, 7,
                            ],
                            [
                                4, 8,
                            ],
                        ],
                    ],
                    [
                        'name' => 'iPhone XL',
                        'name_en' => 'iPhone XL',
                        'name_lv' => 'iPhone XL',
                        'code' => 'iphone_xl',
                        'image' => 'products/iphone_x_silver.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                1, 8,
                            ],
                            [
                                1, 9,
                            ],
                            [
                                2, 8,
                            ],
                            [
                                2, 9,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                3, 9,
                            ],
                            [
                                4, 8,
                            ],
                            [
                                4, 9,
                            ],
                        ],
                    ],
                    [
                        'name' => 'HTC One S',
                        'name_en' => 'HTC One S',
                        'name_lv' => 'HTC One S',
                        'code' => 'htc_one_s',
                        'image' => 'products/htc_one_s.png',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 7,
                            ],
                            [
                                2, 8,
                            ],
                        ],
                    ],
                    [
                        'name' => 'iPhone 5SE',
                        'name_en' => 'iPhone 5SE',
                        'name_lv' => 'iPhone 5SE',
                        'code' => 'iphone_5se',
                        'image' => 'products/iphone_5.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                1, 7,
                            ],
                            [
                                1, 8,
                            ],
                            [
                                3, 7,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                4, 7,
                            ],
                            [
                                4, 8,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Samsung Galaxy J6',
                        'name_en' => 'Samsung Galaxy J6',
                        'name_lv' => 'Samsung Galaxy J6',
                        'code' => 'samsung_j6',
                        'image' => 'products/samsung_j6.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                4, 7,
                            ],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Портативная техника',
                'name_en' => 'Portable',
                'name_lv' => 'Portatīvā tehnika',
                'code' => 'portable',
                'image' => 'categories/portable.jpg',
                'products' => [
                    [
                        'name' => 'Наушники Beats',
                        'name_en' => 'Headphones Beats',
                        'name_lv' => 'Austiņas Beats',
                        'code' => 'beats_audio',
                        'image' => 'products/beats.jpg',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                2,
                            ],
                            [
                                5,
                            ],
                            [
                                6,
                            ]
                        ],
                    ],
                    [
                        'name' => 'Камера GoPro',
                        'name_en' => 'Camera GoPro',
                        'name_lv' => 'Kamera GoPro',
                        'code' => 'gopro',
                        'image' => 'products/gopro.jpg',
                    ],
                    [
                        'name' => 'Камера Panasonic HC-V770',
                        'name_en' => 'Camera Panasonic HC-V770',
                        'name_lv' => 'Kamera Panasonic HC-V770',
                        'code' => 'panasonic_hc-v770',
                        'image' => 'products/video_panasonic.jpg',
                    ],
                ],
            ],
            [
                'name' => 'Бытовая техника',
                'name_en' => 'Appliance',
                'name_lv' => 'Sadzīves tehnika',
                'code' => 'appliances',
                'image' => 'categories/appliance.jpg',
                'products' => [
                    [
                        'name' => 'Кофемашина DeLongi',
                        'name_en' => 'Coffee machine DeLongi',
                        'name_lv' => 'Kafijas automāts DeLongi',
                        'code' => 'delongi',
                        'image' => 'products/delongi.jpg',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                2,
                            ],
                            [
                                5,
                            ],
                            [
                                6,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Холодильник Haier',
                        'name_en' => 'Refrigerator Haier',
                        'name_lv' => 'Ledusskapis Haier',
                        'code' => 'haier',
                        'image' => 'products/haier.jpg',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                1,
                            ],
                            [
                                2,
                            ],
                            [
                                3,
                            ]
                        ],
                    ],
                    [
                        'name' => 'Блендер Moulinex',
                        'name_en' => 'Blender Moulinex',
                        'name_lv' => 'Blenderis Moulinex',
                        'code' => 'moulinex',
                        'image' => 'products/moulinex.jpg',

                    ],
                    [
                        'name' => 'Мясорубка Bosch',
                        'name_en' => 'Food processor Bosch',
                        'name_lv' => 'Gaļas maļamā mašīna Bosch',
                        'code' => 'bosch',
                        'image' => 'products/bosch.jpg',
                    ],
                ],
            ]
        ];

        foreach ($categories as $category) {
            $category['created_at'] = Carbon::now();
            $category['updated_at'] = Carbon::now();
            $products = $category['products'];
            unset($category['products']);
            $categoryId = DB::table('categories')->insertGetId($category);

            foreach ($products as $product) {
                $product['created_at'] = Carbon::now();
                $product['updated_at'] = Carbon::now();
                $product['hit'] = !boolval(rand(0, 3));
                $product['recommend'] = rand(0, 1);
                $product['new'] = rand(0, 1);
                $product['category_id'] = $categoryId;

                if (isset($product['properties'])) {
                    $properties = $product['properties'];
                    unset($product['properties']);
                    $skusOptions = $product['options'];
                    unset($product['options']);
                }

                $productId = DB::table('products')->insertGetId($product);

                if (isset($properties)) {
                    foreach ($properties as $propertyId) {
                        DB::table('property_product')->insert([
                            'product_id' => $productId,
                            'property_id' => $propertyId,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
                    }

                    foreach ($skusOptions as $skuOptions) {
                        $skuId = DB::table('skus')->insertGetId([
                            'product_id' => $productId,
                            'count' => rand(1, 100),
                            'price' => rand(5000, 100000),
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);

                        foreach ($skuOptions as $skuOption) {
                            $skuData['sku_id'] = $skuId;
                            $skuData['property_option_id'] = $skuOption;
                            $skuData['created_at'] = Carbon::now();
                            $skuData['updated_at'] = Carbon::now();

                            DB::table('sku_property_option')->insert($skuData);
                        }
                    }

                    unset($properties);
                } else {
                    DB::table('skus')->insert([
                        'product_id' => $productId,
                        'count' => rand(1, 100),
                        'price' => rand(500, 2500),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }
        }
    }
}
