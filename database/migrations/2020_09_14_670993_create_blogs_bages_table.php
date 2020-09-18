<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateBlogsBagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_bages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('main_p_ar')->nullable();
            $table->longtext('main_p_en')->nullable();
            $table->string('sub_p_ar')->nullable();
            $table->string('sub_p_en')->nullable();
            $table->string('slide_image')->nullable();
            $table->string('other_image')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('disc')->nullable();
            $table->longtext('keyword')->nullable();
            $table->string('p_color')->nullable();
            $table->string('image_color')->nullable();
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
        Schema::dropIfExists('blogs_bages');
    }
}