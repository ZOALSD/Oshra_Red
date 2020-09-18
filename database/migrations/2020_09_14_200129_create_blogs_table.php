<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('blog_title_ar')->nullable();
            $table->string('blog_title_en')->nullable();
            $table->longtext('blog_ar');
            $table->longtext('blog_en');
            $table->string('blog_img')->nullable();
            $table->date('blog_date')->nullable();
            $table->string('Disc')->nullable();
            $table->longtext('keyword')->nullable();
            $table->string('p_color')->nullable();
            $table->string('img_color')->nullable();
            $table->longtext('youtube_link')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}