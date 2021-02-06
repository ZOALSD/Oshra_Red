<?php

use App\Model\Tearninglearn;
use Illuminate\Database\Seeder;

class TearninglearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tearninglearn::create([
            'main_p_ar' => 'الفقرة الئسية بالعربية',
            'main_p_en' => ' main prgraph via English',
            'sup_p_ar' => '',
        ]);
    }
}
