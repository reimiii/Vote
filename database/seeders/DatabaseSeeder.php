<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
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
        Category::factory()->create(['name' => 'Design']);
        Category::factory()->create(['name' => 'Development']);
        Category::factory()->create(['name' => 'Marketing']);
        Category::factory()->create(['name' => 'Sales']);
        Idea::factory(30)->create();
    }
}
