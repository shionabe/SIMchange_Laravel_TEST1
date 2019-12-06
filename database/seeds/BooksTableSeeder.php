<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
        [
          'book_name' => 'ブック１',
          'price' => '1000円',
        ],
     ]);
    }
}
