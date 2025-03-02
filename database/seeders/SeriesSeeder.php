<?php
namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    public function run()
    {
        Series::factory()->count(20)->create();
    }
}
