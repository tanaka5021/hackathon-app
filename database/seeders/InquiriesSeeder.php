<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Inquiry;

class InquiriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        DB::table('inquiry')->insert([
            'content' => Str::random(100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        */

        Inquiry::factory()->count(10)->create();
    }
}
