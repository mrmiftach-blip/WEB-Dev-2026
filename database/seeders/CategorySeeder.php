<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Olah Raga']);
        Category::create(['name' => 'Politik']);
        Category::create(['name' => 'Hiburan']);
    }
}
