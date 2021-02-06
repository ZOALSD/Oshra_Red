<?php
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
        $this->call([

            AdminDataInfo::class,
            HomeBageSeederData::class,
            CausesSeeder::class,
            OurWorkSeeder::class,
            TearninglearnSeeder::class,

        ]);
    }
}
