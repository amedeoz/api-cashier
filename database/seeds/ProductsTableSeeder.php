<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        [
          'id' => 1,
          'name' => 'Adulte',
          'price' => 50,
          'icon_id' => 1
        ],
        [
          'id' => 2,
          'name' => 'Enfant',
          'price' => 30,
          'icon_id' => 2
        ],
        [
          'id' => 3,
          'name' => 'Billes-Adultes',
          'price' => 30,
          'icon_id' => 3
        ],
        [
          'id' => 4,
          'name' => 'Billes-Enfants',
          'price' => 20,
          'icon_id' => 4
        ],
        [
          'id' => 5,
          'name' => 'Costume-lapin',
          'price' => 40,
          'icon_id' => 5
        ],
        [
          'id' => 6,
          'name' => 'Combie-Jetable',
          'price' => 8,
          'icon_id' => 6
        ],
        [
          'id' => 7,
          'name' => 'Boisson',
          'price' => 2,
          'icon_id' => 7
        ],
        [
          'id' => 8,
          'name' => 'Mangé',
          'price' => 3,
          'icon_id' => 8
        ],
        [
          'id' => 9,
          'name' => 'Autre',
          'price' => 0,
          'icon_id' => 9
        ]
      ]);
    }
}