<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            "Thời trang",
            "Khẩu trang",
            "Làm đẹp",
            "Laptop",
            "Ổ cứng",
            "Điện thoại",
        ];

        foreach($categories as $name){
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
