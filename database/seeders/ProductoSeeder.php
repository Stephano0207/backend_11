<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create(
            [
                'name' => 'Coca Cola',
                'price' => 20.0,
                'description' => 'Sabor Cola',
                'category' => 'Abarrotes',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'tertiary',
                'quantity' => 20
            ]
        );

        Producto::create(
            [
                'name' => 'Galletas Oreo',
                'price' => 17.0,
                'description' => 'Sabor Chocolate',
                'category' => 'Abarrotes',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'tertiary',
                'quantity' => 20
            ]
        );


        Producto::create(
            [
                'name' => 'Pinol',
                'price' => 18,
                'description' => 'Limpiador para pisos',
                'category' => 'Limpieza',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'warning',
                'quantity' => 5
            ]
        );

        Producto::create(
            [
                'name' => 'Cloro',
                'price' => 23,
                'description' => 'Limpia el 99% de las vacterias',
                'category' => 'Limpieza',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'warning',
                'quantity' => 5
            ]
        );


        Producto::create(
            [
                'name' => 'Plata',
                'price' => 8,
                'description' => 'Muy rico',
                'category' => 'Frutas y Verduras',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'secondary',
                'quantity' => 5
            ]
        );

        Producto::create(
            [
                'name' => 'Paracetamol',
                'price' => 8,
                'description' => 'Te alivias porque te alivias',
                'category' => 'Farmacia',
                'photo' => 'https://picsum.photos/200/300?randmom=',
                'color' => 'danger',
                'quantity' => 5
            ]
        );


    }
}
