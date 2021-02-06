<?php

use App\Model\OurWork;
use Illuminate\Database\Seeder;

class OurWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurWork::create([
            'main_p_ar' => 'الفقرة الرئيسية باللغة العربية',
            'main_p_en' => 'Main Pragrph Via English',
            'sub_p_en' => 'الفقرة الفرعية باللغة العربية',
            'sub_p_ar' => 'Sub Pragrph Via English',
        ]);
    }
}
