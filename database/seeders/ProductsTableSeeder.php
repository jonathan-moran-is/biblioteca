<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Cien años de Soledad',
            'slug' => 'cienaños',
            'details' => 'Cuero, reforzado, español',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'Cien años de soledad, de Gabriel García Márquez.  469 puntos',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cienaños.png'
        ]);

        Product::create([
            'name' => 'El señor de los Anillos',
            'slug' => 'señoranillos',
            'details' => 'Carton, sin refuerzo, ingles',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'El señor de los anillos (Trilogía), de J. R. R. Tolkien.  389 puntos',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'señoranillos.png'
        ]);

        Product::create([
            'name' => 'Crimen y castigo',
            'slug' => 'crimencastigo',
            'details' => 'Carton, reforzado, ingles',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'Crimen y castigo, de Fiódor Dostoyevski.  324  puntos',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'crimencastigo.png'
        ]);

        Product::create([
            'name' => 'En busca del tiempo perdido',
            'slug' => 'buscatiempo',
            'details' => 'Cuero, sin refuerzo, español',
            'price' => 589.99,
            'shipping_cost' => 1.89,
            'description' => 'En busca del tiempo perdido, de Marcel Proust.  304  puntos',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'buscatiempo.jpg'
        ]);

        Product::create([
            'name' => 'Orgullo y prejuicio',
            'slug' => 'orgulloprejuicio',
            'details' => 'Cuero, reforzado, español',
            'price' => 649.99,
            'shipping_cost' => 12.59,
            'description' => 'Orgullo y prejuicio, de Jane Austen.  341  puntos
            ',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'orgulloprejuicio'
        ]);

    }
}
