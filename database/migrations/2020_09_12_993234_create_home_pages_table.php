<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('main_preghraph_ar');
            $table->longtext('main_preghraph_en');
            $table->longtext('sub_preghraph_ar')->nullable();
            $table->longtext('sub_preghraph_en');
            $table->longtext('Where_we_work_ar');
            $table->longtext('Where_we_work_en')->nullable();
            $table->longtext('about_say_ar')->nullable();
            $table->longtext('about_say_en')->nullable();
            $table->string('write_about_us_ar')->nullable();
            $table->string('write_about_us_en')->nullable();
            $table->longtext('Key_word');
            $table->longtext('Discraption_site')->nullable();
			$table->softDeletes();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_pages');
    }
}