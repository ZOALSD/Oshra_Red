<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateOurWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('main_imig')->nullable();
            $table->longtext('main_p_ar')->nullable();
            $table->longtext('main_p_en')->nullable();
            $table->longtext('sub_p_ar')->nullable();
            $table->longtext('sub_p_en')->nullable();
            $table->longtext('what_our_do_ar')->nullable();
            $table->longtext('what_our_do_en')->nullable();
            $table->string('what_our_do_img')->nullable();
            $table->longtext('why_oshra_unique_ar')->nullable();
            $table->longtext('why_oshra_unique_en')->nullable();
            $table->string('why_oshra_unique_img')->nullable();
            $table->string('page_description')->nullable();
            $table->longtext('key_Word')->nullable();
            $table->string('p_color')->nullable();
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
        Schema::dropIfExists('our_works');
    }
}