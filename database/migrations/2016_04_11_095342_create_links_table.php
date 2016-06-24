<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatemediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('media_id');
            $table->string('media_name')->default('')->comment('//名称');
            $table->string('media_img')->default('')->comment('//存储地址');
            $table->string('create_time')->default('')->comment('//创建时间');
            $table->string('media_url')->default('')->comment('//外链链接');
            $table->string('media_intro')->default('')->comment('//简介');
            $table->integer('media_order')->default(0)->comment('//排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media');
    }
}
