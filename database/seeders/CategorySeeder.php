<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arry = ['Web Development / Web Design','SEO','Apps','Graphics'];
    	if(!empty($arry)){
    	    foreach ($arry as $key => $name) {
    	        Category::create([
    	            'name'  		=> $name,
    	            'created_at'   	=> date("Y-m-d H:i:s")
    	        ]);
    	    }
    	}
    }
}
