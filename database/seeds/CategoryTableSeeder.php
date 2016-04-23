<?php

use Illuminate\Database\Seeder;
// use App\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
        	'name' => 'Apsaugos sistemos'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Priesgaisrines sistemos'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Vaizdo stebejimo sistemos'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Numeriu atpazinimo sistema'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Ieigos kontrole'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Telefonspynes'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Maitinimo saltiniai'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Komutacine tinklu iranga'
        	]);
        DB::table('categories')->insert([
        	'name' => 'Kabeliai'
        	]);
    }
}
