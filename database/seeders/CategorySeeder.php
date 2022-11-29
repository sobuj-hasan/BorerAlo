<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'সাপ্তাহিক জুমআর খুৎবা ',
        ]);
        Category::create([
            'name' => 'সালাফী মানহাজ পরিচিতি',
        ]);
    }
}
