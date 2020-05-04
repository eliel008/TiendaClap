<?php

use illuminate\Database\seeder;
use illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends seeder
{
	public function run()
	{
		$data = array(
			[
				'name' => 'Alimentos 1',
				'slug' => 'alimentos-1',
				'description' => '1kg arroz, 1kg mayonesa, 1L aceite, 2kg harina de trigo, 1/4 cafe',
				'extract' => 'datos de prueba',
				'price' => 275000.00,
				'image' => 'https://notitotal.com/wp-content/uploads/2015/10/productos-alimenticios-venezolanos-50576620.jpg',
				'visible' => 1,
				'category_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Alimentos 2',
				'slug' => 'alimentos-2',
				'description' => '2 cartones de huevos',
				'extract' => 'datos de prueba',
				'price' => 250000.00,
				'image' => '../img/2.png',
				'visible' => 1,
				'category_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Alimentos 3',
				'slug' => 'alimentos-3',
				'description' => 'Productos de la cesta basica variados',
				'extract' => 'datos de prueba',
				'price' => 321234.00,
				'image' => '../img/3.jpg',
				'visible' => 1,
				'category_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de limpieza',
				'slug' => 'productos-de-limpieza',
				'description' => 'combo de productos de limpieza',
				'extract' => 'datos de prueba',
				'price' => 200000.00,
				'image' => '../img/4.jpg',
				'visible' => 1,
				'category_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de limpieza 2',
				'slug' => 'productos-de-limpieza-2',
				'description' => 'combo de productos de limpieza 2',
				'extract' => 'datos de prueba',
				'price' => 100000.00,
				'image' => '../img/5.jpg',
				'visible' => 1,
				'category_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de limpieza 3',
				'slug' => 'productos-de-limpieza-3',
				'description' => 'combo de productos de limpieza 3',
				'extract' => 'datos de prueba',
				'price' => 165200.00,
				'image' => '../img/6.jpg',
				'visible' => 1,
				'category_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de aseo personal',
				'slug' => 'productos-de-aseo-personal',
				'description' => 'combo de productos de aseo personal',
				'extract' => 'datos de prueba',
				'price' => 190000.00,
				'image' => '../img/7.jpg',
				'visible' => 1,
				'category_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de aseo personal 3',
				'slug' => 'productos-de-aseo-personal-3',
				'description' => 'combo de productos de aseo personal 3',
				'extract' => 'datos de prueba',
				'price' => 400000.00,
				'image' => '../img/8.jpg',
				'visible' => 1,
				'category_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			],
			[
				'name' => 'Productos de aseo personal 2',
				'slug' => 'productos-de-aseo-personal-2',
				'description' => 'combo de productos de aseo personal 2',
				'extract' => 'datos de prueba',
				'price' => 300000.00,
				'image' => '../img/9.jpg',
				'visible' => 1,
				'category_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime

			]
		);
		Product::insert($data);
	}
}