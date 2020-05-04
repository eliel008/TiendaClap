<?php

use illuminate\Database\seeder;
use illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends seeder
{
	public function run()
	{
		$data = array(
			[
				'name' => 'Alimentos',
				'slug' => 'alimentos',
				'description' => 'alimentos de la cesta basica',
				'color' => '#440022'
			],
			[
				'name' => 'Productos de limpieza',
				'slug' => 'productos-de-limpieza',
				'description' => 'productos de limpieza',
				'color' => '#445500'
			],
			[
				'name' => 'Productos de aseo personal',
				'slug' => 'productos-de-aseo-personal',
				'description' => 'productos de aseo personal',
				'color' => '#5B2C6F'
			]
		);
		Category::insert($data);
	}
}