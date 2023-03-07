<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);]

        \DB::table('menu_categories')->insert([
            [
                'name' => 'voorgerecht',
                'description' => 'voorgerecht'
            ],
            [
                'name' => 'hoofdgerecht',
                'description' => 'hoofdgerecht'
            ],
            [
                'name' => 'nagerecht',
                'description' => 'nagerecht'
            ],
            [
                'name' => 'dranken (alcoholisch)',
                'description' => 'dranken (alcoholisch)'
            ],
            [
                'name' => 'dranken (non-alcoholisch)',
                'description' => 'dranken (non-alcoholisch)'
            ]
        ]);

        \DB::table('menu_items')->insert([
            [
                'category_id' => 1,
                'name' => 'Carpaccio',
                'description' => 'Lekkere Carpaccio',
                'price' => 12.95
            ],
            [
                'category_id' => 2,
                'name' => 'Biefstuk met pepersaus',
                'description' => 'Biefstuk met perpersaus, lekker mals!',
                'price' => 18.95
            ],
            [
                'category_id' => 3,
                'name' => 'Creme Brulee',
                'description' => 'Lekkere Creme Brulee',
                'price' => 7.95
            ],
            [
                'category_id' => 4,
                'name' => 'Rode wijn',
                'description' => 'Heerlijk cabernet sauvignon uit 1745',
                'price' => 235.95
            ],
            [
                'category_id' => 5,
                'name' => 'Cola',
                'description' => 'Coca Cola 33cl',
                'price' => 2.95
            ]
        ]);

    }
}
