<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateTearninglearnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tearninglearns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('main_image')->nullable();
            $table->string('main_p_ar')->nullable();
            $table->string('main_p_en')->nullable();
            $table->longtext('Desc_search')->nullable();
            $table->longtext('Key_word')->nullable();
            $table->string('sup_p_ar')->nullable();
            $table->string('sup_p_en')->nullable();
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
        Schema::dropIfExists('tearninglearns');
    }
}