<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create(
            [
                'name' => 'Aaron Annecchiarico',
                'email' => 'aannecchiarico@protonmail.com',
                'password' => Hash::make('fooBar12#'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
            ]
        );
    }
}
