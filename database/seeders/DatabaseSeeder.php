<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\JobOpening;
use App\Models\User;
use App\Models\Engineer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        JobOpening::factory()->count(5)->create();
        User::factory()->count(5)->create();
        Engineer::factory()->count(5)->create();
        // DB::table('job_openings')->insert([
        //     'hospital' => Str::random(5),
        //     'engineer' => Str::random(5),
        //     'error_name' => Str::random(5),
        //     'error_status' => Str::random(5),
        //     'location' => Str::random(5),
        // ]);
    }
}
