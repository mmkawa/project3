<?php

namespace Database\Seeders;

use App\Models\Org;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Org::factory()->count(1)->create();

    }
}
